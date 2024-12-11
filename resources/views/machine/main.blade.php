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
            <div class="grid grid-cols-1 sm:grid-cols-3 flex flex-col items-center justify-center">
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

            </div>

        </div>


    </div>
</div>
