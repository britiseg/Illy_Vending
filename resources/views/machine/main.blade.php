<!-- resources/views/program/main.blade.php -->

<div class="">



    <div class="grid grid-cols-1 sm:grid-cols-2 ">

        <div class="flex flex-col   text-left">
            <h1 class="header_1 responsive-padding font-bold   !pb-3 !pl-5">
            Machine Details
            </h1>

            <h2 class="header_2 responsive-padding !pt-0  !pb-3 !pl-5">
            Maximize satisfaction with our units' state-of-the-art features
            </h2>
            <p class="body_txt responsive-padding   !pt-0 !pb-3 !pl-5">
            Customers can enjoy personalizing beverages to their preferences with choices for sugar quantity, caffeine strength and milk type. Take advantage of displaying custom screens and videos to engage and delight customers:
            </p>

            <div class="relative flex flex-col items-center">
                <!-- Carrusel -->
                <div class="w-full overflow-x-scroll flex gap-4 snap-x snap-mandatory scrollbar-hide">
                    <div class="snap-center flex-shrink-0 w-64 h-64 flex items-center justify-center">
                        <img src="{{ asset('images/machine/img_1.png') }}" alt="Image 1" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="snap-center flex-shrink-0 w-64 h-64 flex items-center justify-center">
                        <img src="{{ asset('images/machine/img_2.png') }}" alt="Image 2" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="snap-center flex-shrink-0 w-64 h-64 flex items-center justify-center">
                        <img src="{{ asset('images/machine/img_3.png') }}" alt="Image 3" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="snap-center flex-shrink-0 w-64 h-64 flex items-center justify-center">
                        <img src="{{ asset('images/machine/img_4.png') }}" alt="Image 4" class="w-full h-full object-cover rounded-lg">
                    </div>
                </div>

                <!-- Indicador de scroll -->
                <div class="mt-4 flex justify-center space-x-2">
                    <div class="w-[99px] h-[4px] rounded-[70px] bg-[#F80000]"></div>
                </div>
            </div>

        </div>

        <div class="flex justify-center order-2 sm:order-1">
            <div class="grid grid-cols-2 flex flex-col items-center justify-center">
                <img class="Image  w-full h-[313px] md:h-[500px] relative"src="{{ asset('images/machine/machine_2.png') }}" alt="Coffee Machine" />
                <div class="flex flex-col items-center justify-center">
                    <img class="Image  w-full h-[130px]  md:h-[168px] relative"src="{{ asset('images/machine/machine_Desc_1.png') }}" alt="Coffee Machine" />
                    <img class="Image  w-full h-[91px] md:h-[118px] relative"src="{{ asset('images/machine/machine_Desc_2.png') }}" alt="Coffee Machine" />
                    <img class="Image  w-full h-[87px] md:h-[112px] relative"src="{{ asset('images/machine/machine_Desc_3.png') }}" alt="Coffee Machine" />
                </div>
            </div>

        </div>

        <div class="flex justify-center order-2 sm:order-1">


            <!-- <div class="grid grid-cols-1 sm:grid-cols-3 flex flex-col items-center justify-center">
                <div clas="grid grid-cols-2 flex flex-col items-center">
                <div class="flex flex-col items-center">
                    <img class="Image  w-full h-[130px]  md:h-[168px] relative"src="{{ asset('images/machine/cup_1.png') }}" alt="Coffee Machine" />


                    </div> <div>
                          <p class="txt-body">
                    illy coffee prepared by the filter drip method, served in a 12oz cup
                    </p>
                    </div>

                </div>
                <div clas="grid grid-cols-2">
                    <img class="Image  w-full h-[130px]  md:h-[168px] relative"src="{{ asset('images/machine/cup_2.png') }}" alt="Coffee Machine" />
                    <div class="txt-body">
                    illy coffee prepared by the filter drip method, served in a 12oz cup
                    </div>
                </div>
                <div clas="grid grid-cols-2">
                    <img class="Image  w-full h-[130px]  md:h-[168px] relative"src="{{ asset('images/machine/cup_3.png') }}" alt="Coffee Machine" />
                    <div class="txt-body">
                    illy coffee prepared by the filter drip method, served in a 12oz cup
                    </div>
                </div>

            </div> -->

        </div>


    </div>
    <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 gap-6 px-4">
             <!-- Item 1 -->
            <div class="flex flex-col items-center text-center">
                <div class="grid grid-cols-2 gap-6 px-4">
                    <div class="pr-5 flex flex-col items-center justify-center">
                        <img class="w-[120px] h-[120px] object-cover" src="{{ asset('images/machine/cup_1.png') }}" alt="Drip Coffee">
                    </div>

                    <div class="text-left ">
                    <h3 class="header_red !p-0 text-left">DRIP COFFEE</h3>
                    <p class="body_txt">Illy coffee prepared by the filter drip method, served in a 12oz cup</p>
                    </div>

                </div>

            </div>

            <!-- Item 2 -->
            <div class="flex flex-col items-center text-center">
                 <div class="grid grid-cols-2 gap-6 px-4">
                    <div class="pr-5 flex flex-col items-center justify-center">
                    <img class="w-[120px] h-[120px] object-cover" src="{{ asset('images/machine/cup_2.png') }}" alt="Cappuccino">
                </div>

                    <div class="text-left ">
                        <h3 class="header_red !p-0 text-left">CAPPUCCINO</h3>
                        <p class="body_txt">6oz espresso blended with steamed and frothed milk, served in a 12oz cup</p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="flex flex-col items-center text-center">
                 <div class="grid grid-cols-2 gap-6 px-4">
                    <div class="pr-5 flex flex-col items-center justify-center">
                    <img class="w-[120px] h-[120px] object-cover" src="{{ asset('images/machine/cup_3.png') }}" alt="Cappuccino">
                </div>

                    <div class="text-left ">
                        <h3 class="header_red !p-0 text-left">CAFFÈ LATTE</h3>
                        <p class="body_txt">Espresso mixed with steamed milk, served in a 12oz cup</p>
                    </div>
                </div>
            </div>

               <!-- Item 1 -->
               <div class="flex flex-col items-center text-center">
                 <div class="grid grid-cols-2 gap-6 px-4">
                    <div class="pr-5 flex flex-col items-center justify-center">
                    <img class="w-[120px] h-[120px] object-cover" src="{{ asset('images/machine/cup_4.png') }}" alt="Drip Coffee">
                </div>
                    <div class="text-left ">
                    <h3 class="header_red !p-0 text-left">CAFFÈ MOCHAE</h3>
                    <p class="body_txt">Espresso blended with thick chocolate and steamed milk, served in a 12oz cup</p>
                    </div>

                </div>

            </div>

            <!-- Item 2 -->
            <div class="flex flex-col items-center text-center">
                 <div class="grid grid-cols-2 gap-6 px-4">
                    <div class="pr-5 flex flex-col items-center justify-center">
                    <img class="w-[120px] h-[120px] object-cover" src="{{ asset('images/machine/cup_5.png') }}" alt="Cappuccino">
                </div>

                    <div class="text-left ">
                        <h3 class="header_red !p-0 text-left">espresso</h3>
                        <p class="body_txt">2oz of fresh illy espresso beans prepared in its purest form, served in a 12oz cup</p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="flex flex-col items-center text-center">
                 <div class="grid grid-cols-2 gap-6 px-4">
                    <div class="pr-5 flex flex-col items-center justify-center">
                    <img class="w-[120px] h-[120px] object-cover" src="{{ asset('images/machine/cup_6.png') }}" alt="Cappuccino">
                </div>

                    <div class="text-left ">
                        <h3 class="header_red !p-0 text-left">double esresso</h3>
                        <p class="body_txt">E4oz of fresh illy espresso beans prepared in its purest form, served in a 12oz cup</p>
                    </div>
                </div>
            </div>


               <!-- Item 1 -->
               <div class="flex flex-col items-center text-center">
                 <div class="grid grid-cols-2 gap-6 px-4">
                    <div class="pr-5 flex flex-col items-center justify-center">
                    <img class="w-[120px] h-[120px] object-cover" src="{{ asset('images/machine/cup_7.png') }}" alt="Drip Coffee">
                </div>
                    <div class="text-left ">
                    <h3 class="header_red !p-0 text-left">macchiato</h3>
                    <p class="body_txt">2oz of fresh illy espresso beans with a touch of frothed milk, served in a 12oz cup</p>
                    </div>

                </div>

            </div>

            <!-- Item 2 -->
            <div class="flex flex-col items-center text-center">
                 <div class="grid grid-cols-2 gap-6 px-4">
                    <div class="pr-5 flex flex-col items-center justify-center">
                    <img class="w-[120px] h-[120px] object-cover" src="{{ asset('images/machine/cup_8.png') }}" alt="Cappuccino">
                </div>

                    <div class="text-left ">
                        <h3 class="header_red !p-0 text-left">chocolate</h3>
                        <p class="body_txt">Thick chocolate and steamed milk, served in a 12oz cup</p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="flex flex-col items-center text-center">
                 <div class="grid grid-cols-2 gap-6 px-4">
                    <div class="pr-5 flex flex-col items-center justify-center">
                    <img class="w-[120px] h-[120px] object-cover" src="{{ asset('images/machine/cup_9.png') }}" alt="Cappuccino">
                </div>

                    <div class="text-left ">
                        <h3 class="header_red !p-0 text-left">Americano</h3>
                        <p class="body_txt">Espresso & hot water, matching the brewed coffee strength. Served in a 12oz cup</p>
                    </div>
                </div>
            </div>



        </div>
</div>
