<?php
// generate.php
header('Content-Type: application/json');
ini_set('display_errors', '0');

function respond($ok, $error = '', $extra = []) {
    echo json_encode(array_merge(['ok' => $ok, 'error' => $error], $extra));
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);
if (!$data) respond(false, 'Invalid data');

$category = $data['category'];
$templateId = $data['templateId'];
$userB64 = $data['userPngBase64'];
$placement = $data['placement'];

// Path Validation
$templatePath = __DIR__ . "/templates/$category/$templateId";
if (!is_file($templatePath)) respond(false, 'Template not found');

try {
    $card = new Imagick($templatePath);
    $card->setImageFormat('png');

    $cardW = $card->getImageWidth();
    $cardH = $card->getImageHeight();

    // Calculate ratio from frontend stage to actual high-res image
    $ratioX = $cardW / $data['stageW'];
    $ratioY = $cardH / $data['stageH'];

    $userBin = base64_decode(explode(',', $userB64)[1]);
    $user = new Imagick();
    $user->readImageBlob($userBin);
    
    // Resize user image based on scale and placement
    $targetW = (int)($placement['w'] * $ratioX * $placement['scale']);
    $targetH = (int)($placement['h'] * $ratioY * $placement['scale']);
    $user->resizeImage($targetW, $targetH, Imagick::FILTER_LANCZOS, 1);

    // Calculate position
    $posX = (int)($placement['x'] * $ratioX);
    $posY = (int)($placement['y'] * $ratioY);

    $card->compositeImage($user, Imagick::COMPOSITE_OVER, $posX, $posY);

    $filename = "ecard_" . time() . ".png";
    $outputPath = __DIR__ . "/output/" . $filename;
    
    if(!is_dir(__DIR__ . "/output")) mkdir(__DIR__ . "/output", 0775);
    $card->writeImage($outputPath);

    // BEYOND THIS: Your Backend Dev will add the Mailer function using $data['email_data']
    respond(true, '', ['file' => $filename, 'url' => "output/$filename"]);

} catch (Exception $e) {
    respond(false, $e->getMessage());
}