<!-- resources/views/program/main.blade.php -->

<div class="">



    <div class="grid grid-cols-1 sm:grid-cols-2 ">

        <div class="flex flex-col items-center justify-center text-left">
            <h2 class="header_2 responsive-padding font-bold bg-light_beige">
                Introducing Your Luxury Automated Coffee Solution
            </h2>

            <p class="body_txt responsive-padding  md:pl-10">
                illy Caffè North America and Prepango, a national operator of specialty vending machines, have partnered to introduce an innovative automated espresso coffee concept—marking the first of its kind for both illy and Prepango in the USA.<br><br>
                Unlike traditional coffee vending machines that serve instant coffee, our machines grind, brew, and serve illy’s signature blend of
                <span class="text-primary-red">100% Arabica</span> whole beans sourced from around the world, delivering a premium coffee experience.
            </p>
        </div>

        <div class="flex justify-end order-2 sm:order-1">
            <img class="Image relative"src="{{ asset('images/program/satisfaction_2.png') }}" alt="Coffee Machine" />
        </div>



    </div>
    <div class="flex flex-col md:flex-row items-center w-full h-[307px] px-10 py-[62px] bg-fade justify-center text-center gap-4">
        <div class="flex flex-col md:flex-row items-center gap-2 md:gap-4">
            <div class="header_1 text-white mb-2 md:mb-0">Treat your people</div>
            <div class="flex items-center gap-2">
                <div class="header_1 text-white">to</div>
                <div class="mt-2">
                    <div class="w-[63px] h-[40px] md:h-[50px] bg-no-repeat bg-center bg-contain" style="background-image: url('/images/illy_white.svg');"></div>
                </div>

                <div class="header_1 text-white">today</div>
            </div>
        </div>

        <div id="btn_getInTouch" class="btn_red mt-4 md:mt-0">
            <a href="{{ route('get-in-touch') }}">Get in touch</a>

        </div>
    </div>



    <div class="grid grid-cols-1 sm:grid-cols-2 ">

        <div class="flex justify-center order-2 sm:order-1">
            <img class="w-full  h-[452px] md:h-[860px] object-cover" src="{{ asset('images/program/satisfaction_1.png') }}" alt="Coffee Machine" >
        </div>

        <div class="flex flex-col items-center  text-left order-1 sm:order-2">
            <h2 class="header_2 responsive-padding  bg-light_beige">Maximum Satisfaction with a Small Footprint</h2>
            <p class="body_txt responsive-padding  ">Enjoy an espresso, cappuccino, caffè latte, macchiato, and many other espresso-based drinks. Our units offer a premium coffee experience in every cup, all while taking up minimal space, making them perfect for:

            </p>

            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-2 xl:grid-cols-5 gap-4 mt-6 justify-center">
                <div class="flex flex-col items-center">
                    <i class="fa fa-plane md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Airport</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-graduation-cap md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Apartments and Condos</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-building md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Colleges and Universities</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-car-side md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Auto Dealerships</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-users md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Campus Hubs</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-school-flag md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Clubs and Clubhouses</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-house-laptop md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Corporate Offices</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-couch md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Faculty Lounges</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-building-columns md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Government Offices</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-hospital md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Hospital</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-gavel md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Law Office</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-basket-shopping md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Shopping Malls</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-train md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Mass Transit Stations</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fa fa-masks-theater md:text-[40px] text-[44px] text-dark_brown"></i>
                    <p class="text-center text-gray-600 mt-2">Stadiums, Suites, and Arenas</p>
                </div>
            </div>
        </div>
    </div>



    <!-- Partnerships Section -->
<div class="bg-light_beige">
          <h1 class="header_2 responsive-padding pb-0 md:pl-10">
          Partner With Us in Just Three Easy Steps
        </h1>
    <div class=" grid grid-cols-1 sm:grid-cols-3 gap-4 pt-6">

        <div class="flex flex-col pl-5  md:pl-10 ">
            <h2 class="header_2  md:pt-0 md:!pl-0 ">
                <span class="text-primary-red font-bold">1 </span>
                Connect
            </h2>
            <p class="body_txt responsive-padding   pl-0 ">
                Connect with us to select the perfect program tailored to your needs and budget.

            </p>
        </div>
        <div class="flex flex-col pl-5  ">
            <h2 class="header_2  md:pt-0 md:pl-0">
                <span class="text-primary-red font-bold">2 </span>
                Select
            </h2>
            <p class="body_txt responsive-padding  md:pl-10 !pl-0">
                Choose your ideal location, and we’ll handle everything: instillation, manages refills, cleaning, monitoring, and maintenance - all to ensure a seamless operation.

            </p>
        </div>
        <div class="flex flex-col pl-5  ">
            <h2 class="header_2  md:pt-0 md:pl-0">
                <span class="text-primary-red font-bold">3 </span>
                Gain
            </h2>
            <p class="body_txt responsive-padding  md:pl-10 !pl-0">
                We’ll send detailed reports to keep you informed while enjoying flexible service agreements and smooth transactions.

            </p>
            <!-- <div id="btn_learnMore" class="btn_red mt-4 md:mt-0 responsive-padding ">
                Learn More
            </div>-->
        </div>
    </div>
</div>

    <h2 class="header_1 responsive-padding">
        Find Us on Your Next Journey Through Partner Airports
    </h2>
    <div class="responsive-padding grid grid-cols-1 sm:grid-cols-2 gap-4">

        <div class="flex flex-col justify-center ">
            <img class="Image  w-full h-[214px] md:h-[255px] relative"src="{{ asset('images/program/journey_1.png') }}"  />
        </div>
        <div class="flex flex-col justify-center order-1 sm:order-2">
            <img class="Image  w-full h-[214px] md:h-[255px] relative"src="{{ asset('images/program/journey_2.png') }}"  />
        </div>

    </div>



    <script>

</script>
