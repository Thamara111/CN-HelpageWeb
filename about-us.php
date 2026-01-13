<?php

$meta_title = "About Us - HelpAge Sri Lanka";
$meta_description = "Learn about HelpAge Sri Lanka, a non-profit organization dedicated to improving the quality of life for senior citizens across Sri Lanka since 1984.";
$meta_keywords = "HelpAge Sri Lanka, About Us, Senior Citizens, Non-Profit Organization, Elderly Care, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/about";
$og_image = "https://helpagesl.org/assets/images/og-about.webp";

require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>

<!-- About Us Section -->
<section class="">
  <div class="container mx-auto px-6 py-12" data-aos="fade-down" data-aos-duration="1500">
    <div class="text-center mb-8 md:mb-12">
      <h2 class="text-4xl md:text-6xl font-bold mb-4">About Us</h2>
      <p class="text-gray-700 mb-12 max-w-5xl mx-auto">
        HelpAge Sri Lanka is a non-profit organization dedicated to
        improving the quality of life for senior citizens across Sri Lanka.
        Established in 1984, we have been at the forefront of advocating for
        the rights and well-being of the elderly population. Our mission is
        to empower older people to lead dignified, active, and healthy lives
        through various programs and initiatives focused on healthcare,
        social inclusion, and economic security.
      </p>
    </div>
  </div>
</section>

<!-- 
    <section>
        <div class="container mx-auto px-6 py-12">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">

                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 border-l-4 border-red-500 
             hover:shadow-xl transition-all duration-300">
                    <div class="text-center mb-4 sm:mb-6">
                        <h3 class="text-2xl sm:text-3xl font-bold mb-3 text-gray-800">Our Mission</h3>
                    </div>
                    <p class="text-gray-700 text-base sm:text-lg leading-relaxed text-center italic">
                        "By working together we ensure that people in Sri Lanka understand how much older people
                        contribute
                        to society and that they must enjoy their right to healthcare, social services, and economic and
                        physical security."
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 border-l-4 border-blue-500 
             hover:shadow-xl transition-all duration-300">
                    <div class="text-center mb-4 sm:mb-6">
                        <h3 class="text-2xl sm:text-3xl font-bold mb-3 text-gray-800">Our Vision</h3>
                    </div>
                    <p class="text-gray-700 text-base sm:text-lg leading-relaxed text-center italic">
                        "A world in which all older people fulfill their potential to lead dignified, active, healthy,
                        and
                        secure lives."
                    </p>
                </div>
            </div>
        </div>
    </section> -->

<!-- Chairman's Message -->
<section>
  <div class="container mx-auto px-6 py-12">
    <div class="grid grid-cols-1 grid-cols-1 md:grid-cols-2 lg:gap-6">
      <div  data-aos="fade-right" data-aos-duration="1500">
        <h4 class="text-red-600 text-red-600 mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
          Chairman's Message
        </h4>
        <h2
          class="text-2xl md:text-3xl lg:text-4xl xl:text-4xl 2xl:text-6xl font-bold mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8 leading-relaxed">
          “Building a Legacy of Dignity, Hope, and Empowerment for Senior Citizens”
        </h2>
        <p class="text-gray-700 mb-6 text-sm md:text-sm lg:text-sm xl:text-sm 2xl:text-md">
          On behalf of the Council of HelpAge
          Sri Lanka (HASL), it is with great
          pride and heartfelt gratitude that
          I present this message, as we begin
          the 40th anniversary of HASL.
          This is a momentous milestone of
          a journey rooted in compassion,
          service, and an unwavering
          commitment to the well-being and
          dignity of older person, across
          Sri Lanka.
        </p>


        <a href="/chairman-message"
          class="group inline-flex items-center bg-red-600 text-white mb-4 md:mb-2 pl-4 pr-2 py-2 rounded-full hover:bg-white hover:text-black transition duration-300">
          view More
          <i
            class="fa-solid fa-arrow-right bg-white text-red-600 p-3 rounded-full ml-3 transition duration-300 group-hover:bg-red-600 group-hover:text-white"></i>
        </a>
      </div>
      <div class="flex justify-center items-center" data-aos="fade-left" data-aos-duration="1500">
        <img src="/assets/images/chairman.png" alt="Chairman" class="rounded-2xl border-2 border-gray-400" />
      </div>
    </div>
  </div>
</section>

<!-- donation logos -->
<?php require_once 'components/donation-logos.php'; ?>


<!-- Executive Director's Message -->
<section>
  <div class="container mx-auto px-6 py-12">
    <div class="grid grid-cols-1 grid-cols-1 md:grid-cols-2 lg:gap-6">
      <div class="flex justify-center items-center" data-aos="fade-right" data-aos-duration="1500">
        <img src="/assets/images/ed.png" alt="ed" class="rounded-2xl border-2 border-gray-400" />
      </div>
      <div data-aos="fade-left" data-aos-duration="1500">
        <h4 class="text-red-600 mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
          Executive Director's Message
        </h4>
        <h2
          class="text-2xl md:text-3xl lg:text-4xl xl:text-4xl 2xl:text-6xl font-bold mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8 leading-relaxed">
          “Executive Director’s Message: Leading Four Decades of Care for Sri Lanka’s Elders”
        </h2>

        <p class="text-gray-700 mb-6 text-sm md:text-sm lg:text-sm xl:text-sm 2xl:text-md">
          It is my pleasure to present my
          first message to the Annual Report
          of HelpAge Sri Lanka (HASL)
          for the financial year ending
          31 March 2025. HASL, established
          in January 1986, has served needy
          elders for 39 years all over the
          country in numerous ways to keep
          them active and healthy in order to
          ensure them a dignified life. All the
          services have been provided free of
          charge to the needy elders through
          the donations received from local
          and foreign donors and donor
          agencies.
        </p>

        <a href="/ed-message"
          class="group inline-flex items-center bg-red-600 text-white pl-4 pr-2 py-2 rounded-full hover:bg-white hover:text-black transition duration-300">
          view More
          <i
            class="fa-solid fa-arrow-right bg-white text-red-600 p-3 rounded-full ml-3 transition duration-300 group-hover:bg-red-600 group-hover:text-white"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container mx-auto px-6 py-12">
    <div class="flex flex-col justify-center items-center space-y-2" data-aos="fade-up" data-aos-duration="1500">
      <h4 class="text-red-600 mb-4">Our Team</h4>

      <!-- Left Content -->
      <div>
        <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl font-bold mb-8 text-gray-900 text-center">
          Meet the Dedicated <br />Hearts Behind Our Mission
        </h2>
        <p class="text-gray-700 mb-12 text-center">
          Every milestone we achieve is powered by the passion, dedication,
          and teamwork of the incredible people who stand with us.<br />
          Their vision and compassion make a difference every single day.
        </p>
      </div>
    </div>

    <section class="px-6 md:px-0 py-12 bg-white">
      <!-- Top Row (Chairman + Deputy) -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-10"  data-aos="fade-up" data-aos-duration="1500">
        <div class="flex flex-col items-center text-center">
          <img src="/assets/images/chairman.png" alt="Chairman"
            class="rounded-lg w-full h-64 object-cover shadow-md hover:shadow-lg transition duration-300" />
          <p class="font-semibold text-lg mt-4 transition duration-300">
            Deshabandu (Mr.) Tilak de Zoysa
          </p>
          <p class="text-gray-700 text-sm mt-1">Chairman</p>
        </div>

        <div class="flex flex-col items-center text-center">
          <img src="/assets/images/dchairman.png" alt="Deputy Chairman"
            class="rounded-lg w-full h-64 object-cover shadow-md hover:shadow-lg transition duration-300" />
          <p class="font-semibold text-lg mt-4 transition duration-300">
            Mr. Maithri Wickremesinghe PC
          </p>
          <p class="text-gray-700 text-sm mt-1">Deputy Chairman</p>
        </div>
      </div>

      <!-- Team Members Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8" data-aos="fade-up" data-aos-duration="1500">
        <div class="flex flex-col items-center text-center">
          <img src="/assets/images/team1.png" alt="Team Member"
            class="rounded-lg w-full h-64 object-cover shadow-md hover:shadow-lg transition duration-300" />
          <p class="font-semibold text-lg mt-4 transition duration-300">
            Deshabandu (Mrs.) Jezima Ismail
          </p>
        </div>

        <div class="flex flex-col items-center text-center">
          <img src="/assets/images/team2.png" alt="Team Member"
            class="rounded-lg w-full h-64 object-cover shadow-md hover:shadow-lg transition duration-300" />
          <p class="font-semibold text-lg mt-4 transition duration-300">
            Mr. Sanjeev Gardiner
          </p>
        </div>

        <div class="flex flex-col items-center text-center">
          <img src="/assets/images/team3.png" alt="Team Member"
            class="rounded-lg w-full h-64 object-cover shadow-md hover:shadow-lg transition duration-300" />
          <p class="font-semibold text-lg mt-4 transition duration-300">
            Dr. (Mrs.) C.P. Banagala
          </p>
        </div>

        <div class="flex flex-col items-center text-center">
          <img src="/assets/images/team4.png" alt="Team Member"
            class="rounded-lg w-full h-64 object-cover shadow-md hover:shadow-lg transition duration-300" />
          <p class="font-semibold text-lg mt-4 transition duration-300">
            Ms. Yasmin Raheem
          </p>
        </div>

        <div class="flex flex-col items-center text-center">
          <img src="/assets/images/team5.png" alt="Team Member"
            class="rounded-lg w-full h-64 object-cover shadow-md hover:shadow-lg transition duration-300" />
          <p class="font-semibold text-lg mt-4 transition duration-300">
            Mrs. Anosha Subasinghe
          </p>
        </div>

        <div class="flex flex-col items-center text-center">
          <img src="/assets/images/team6.png" alt="Team Member"
            class="rounded-lg w-full h-64 object-cover shadow-md hover:shadow-lg transition duration-300" />
          <p class="font-semibold text-lg mt-4 transition duration-300">
            Ms. Yasmin Raheem
          </p>
        </div>

        <div class="flex flex-col items-center text-center">
          <img src="/assets/images/team7.png" alt="Team Member"
            class="rounded-lg w-full h-64 object-cover shadow-md hover:shadow-lg transition duration-300" />
          <p class="font-semibold text-lg mt-4 transition duration-300">
            Mr. Nishantha Gooneratne
          </p>
        </div>

        <div class="flex flex-col items-center text-center">
          <img src="/assets/images/team8.png" alt="Team Member"
            class="rounded-lg w-full h-64 object-cover shadow-md hover:shadow-lg transition duration-300" />
          <p class="font-semibold text-lg mt-4 transition duration-300">
            Mr. Krishan Balendra
          </p>
        </div>
      </div>
    </section>
  </div>
</section>

<?php include 'layouts/footer.php'; ?>