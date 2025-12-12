<section class="py-16 bg-red-50">
    <div class="container mx-auto">
        <div class="flex justify-center items-center space-x-4">

            <div class="counter-box text-center flex flex-col justify-center items-center px-[5rem]" data-target="25">
                <h3 class="counter text-black text-3xl md:text-6xl font-bold">0</h3>
                <p class="text-gray-800 text-lg md:text-xl font-semibold">Years</p>
            </div>

            <div class="counter-box text-center flex flex-col justify-center items-center px-[5rem]" data-target="5000">
                <h3 class="counter text-black text-3xl md:text-6xl font-bold">0</h3>
                <p class="text-gray-800 text-lg md:text-xl font-semibold">Dollars</p>
            </div>

            <div class="counter-box text-center flex flex-col justify-center items-center px-[5rem]" data-target="1000">
                <h3 class="counter text-black text-3xl md:text-6xl font-bold">0<span>k</span></h3>
                <p class="text-gray-800 text-lg md:text-xl font-semibold">Donors</p>
            </div>

            <div class="counter-box text-center flex flex-col justify-center items-center px-[5rem]" data-target="500">
                <h3 class="counter text-black text-3xl md:text-6xl font-bold">0</h3>
                <p class="text-gray-800 text-lg md:text-xl font-semibold">Projects</p>
            </div>

        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        function startCounters() {
            $(".counter").each(function () {
                let $counter = $(this);
                let target = parseInt($counter.parent().attr("data-target"));
                let count = 0;
                let speed = 100; // lower = faster
                let increment = target / speed;

                let updateCount = setInterval(function () {
                    count += increment;

                    if (count >= target) {
                        $counter.text(target);
                        clearInterval(updateCount);
                    } else {
                        $counter.text(Math.ceil(count));
                    }
                }, 20);
            });
        }

        // Trigger only once
        let started = false;

        $(window).on("scroll", function () {
            let sectionTop = $("section").offset().top;
            let scrollBottom = $(window).scrollTop() + $(window).height();

            if (!started && scrollBottom > sectionTop) {
                startCounters();
                started = true;
            }
        });
    });
</script>