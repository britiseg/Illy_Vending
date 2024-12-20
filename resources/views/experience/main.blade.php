<div class="responsive-padding" style="background: #F6F0EB">

    <div class="flex items-center justify-center space-x-2">
        <div class="header_1 text-black hidden lg:block">See What Makes</div>
        <div class="w-12 h-[32px] md:w-[83px] md:h-[73px] bg-no-repeat bg-center bg-contain hidden lg:block" style="background-image: url('/images/illy_red.svg');"></div>
        <div class="header_1 text-black hidden lg:block">an Exceptional Partner</div>
    </div>

    <div class="mb-1 text-center">
        <div class="flex ml-1 mt-1">
            <img src="{{ asset('images/experience/label_illy_mobile.png') }}" class="block lg:hidden" alt="label">
        </div>
    </div>

    <div class="grid grid-cols-1 mt-2 sm:grid-cols-2" style="background: #F6F0EB">
        <div class="flex flex-col text-left lg:responsive-padding">
            <h1 class="header_experience_red hidden lg:block">
                THE DIRECT TRADE MODEL
            </h1>
            <h1 class="text-[#f80000] text-base font-extrabold font-['Manrope'] uppercase leading-normal block lg:hidden">
                WE AIM TO DELIGHT COFFEE LOVERS
            </h1>

            <p class="mt-4 mb-1 body_txt hidden lg:block">
                Every single bean we harvest is 100% traceable to the source. We purchase our coffee directly from more than 800 growers, paying on average 30% more for the highest-quality Arabica beans. We possess a 100% sustainable supply chain.
            </p>

            <span class="body_text block lg:hidden">
                illy aims to be the reference standard for coffee excellence and culture worldwide, an innovative company that offers the best products and places to enjoy them, and thanks to this grows and becomes a leader in high-end coffee.
            </span>

            <br>
            <h1 class="header_experience_red hidden lg:block">
                UNIVERSITY OF COFFEE
            </h1>
            <h1 class="block lg:hidden text-[#f80000] text-base font-extrabold font-['Manrope'] uppercase leading-normal">
                We are serious about sustainability
            </h1>
            <p class="mt-4 mb-1 body_txt hidden lg:block">
                We prioritize environmentally conscious practices. The establishment of the University of Coffee, ultra-low emission coffee roasting plants, and partnerships with universities to research sustainable coffee production. We pursue sustainability by sharing the value it generates (economic sustainability), personal growth (social sustainability) and respect for the ecosystem (environmental sustainability)
            </p>

            <p class="body_text block lg:hidden">
                illy has been carbon neutral since 2023 after creating the “One Makes the Difference” initiative to demonstrate how sustainable quality helps protect and improve the well being of the planet. It reminds consumers that everyone’s actions can make a difference.
            </p>
            <img src="{{ asset('images/experience/new_experience.png')}}" alt="Coffee" class="block lg:hidden mt-2 object-cover">
        </div>

        <div class="flex hidden lg:block">
            <img src="{{ asset('images/experience/image_illy_one.png')}}" alt="Coffee" class="w-full h-auto hidden object-cover lg:object-contain lg:block">
        </div>


        {{-- Mobile --}}
        <div class="flex flex-col text-left lg:responsive-padding block lg:hidden -mt-4 lg:mt-0">
            <br>
            <h1 class="mt-2 text-[#f80000] text-base font-extrabold font-['Manrope'] uppercase leading-normal ">
                THE DIRECT TRADE MODEL
            </h1>
            <p class="body_txt font-['Manrope'] leading-normal">
                Every single bean we harvest is 100% traceable to the source. We purchase our coffee directly from more than 800 growers, paying on average 30% more for the highest-quality Arabica beans. We possess a 100% sustainable supply chain.
            </p>
            <br>
            <h1 class="text-[#f80000] text-base font-extrabold font-['Manrope'] uppercase leading-normal">
                UNIVERSITY OF COFFEE
            </h1>
            <p class="body_txt font-['Manrope'] leading-normal">
                We prioritize environmentally conscious practices. The establishment of the University of Coffee, ultra-low emission coffee roasting plants, and partnerships with universities to research sustainable coffee production. We pursue sustainability by sharing the value it generates (economic sustainability), personal growth (social sustainability) and respect for the ecosystem (environmental sustainability)
            </p>

            <div class="flex">
                <img src="{{ asset('images/experience/image_experience_mobile_two.png')}}" alt="Coffee" class="w-full h-full object-cover">
            </div>
        </div>
        <br>
        <a id="get-in-touch-button" href="#prepango-get-in-touch" class="w-3/4 p-4 mx-auto font-bold text-white text-center bg-red-600 rounded-full block lg:hidden"> Get In Touch</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2" style="background: #F6F0EB">
        <div class="responsive-padding flex justify-start relative hidden lg:block">
            <img src="{{ asset('images/experience/new_experience.png')}}"
                alt="Coffee"
                class="w-full h-auto object-cover lg:object-contain relative -top-64">
        </div>
        <div class="responsive-padding flex flex-col text-left hidden lg:block -mt-4 p-4">
            <br>
            <h1 class="uppercase header_experience_red hidden lg:block">
                Our Goal is to Delight Coffee Lovers
            </h1>
            <p class="mt-4 mb-1 hidden lg:block" style="font-family: 'Manrope'; font-style: normal; font-weight: 400; font-size: 20px; line-height: 150%;">
                Illy aims to be the reference standard for coffee excellence and culture worldwide, an innovative company that offers the best products and places to enjoy them, and thanks to this grows and becomes a leader in high-end coffee.
            </p>
            <br>
            <p class="uppercase header_experience_red hidden lg:block">
                We are serious about sustainability
            </p>
            <p class="mt-2 mb-1 hidden lg:block" style="font-family: 'Manrope'; font-style: normal; font-weight: 400; font-size: 20px; line-height: 150%;">
                Illy has been carbon neutral since 2023 after creating the “One Makes the Difference” initiative to demonstrate how sustainable quality helps protect and improve the well being of the planet. It reminds consumers that everyone’s actions can make a difference.
            </p>
            <br>
            <div class="flex justify-center hidden lg:block">
                <img src="{{ asset('images/experience/image_illy_one.png')}}" alt="Coffee" class="w-full h-[648px] block object-cover lg:hidden">
            </div>
            <br>
            <div id="btn_getInTouch" class="btn_red mt-4 md:mt-0 mx-auto flex justify-center">
                <a id="get-in-touch-button" href="#prepango-get-in-touch" class="hidden lg:block"> Get In Touch</a>
            </div>
        </div>
    </div>
</div>
<div class="flex justify-center hidden lg:block -mt-72 bg-white">
    <img src="{{ asset('images/experience/image_illy_3.png')}}" alt="Coffee Illy" class="w-full h-[1150px] object-cover lg:object-contain">
</div>
<div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2">
    <div class="mb-2">
        <img src="{{ asset('images/experience/image_red.png')}}" alt="" class="block object-cover lg:hidden">
    </div>
    <div class="mb-2">
        <img src="{{ asset('images/experience/image_white.png')}}" alt="" class="block object-cover w-full lg:hidden lg:w-3/4">
    </div>
</div>
