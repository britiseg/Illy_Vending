<!-- resources/views/program/main.blade.php -->

<div class="">



    <div class="grid grid-cols-1 sm:grid-cols-2 responsive-padding ">

        <div class="flex flex-col   text-left">
            <h1 class="header_1 font-bold   !pb-3 !pl-5">
            Machine Details
            </h1>

            <h2 class="header_2 !pt-0  !pb-3 !pl-5">
            Maximize satisfaction with our units' state-of-the-art features
            </h2>
            <p class="body_txt   !pt-0 !pb-3 !pl-5">
            Customers can enjoy personalizing beverages to their preferences with choices for sugar quantity, caffeine strength and milk type. Take advantage of displaying custom screens and videos to engage and delight customers:
            </p>

            <div class="relative flex flex-col items-center pb-5">
                <!-- Contenedor de imágenes con scroll horizontal -->
                <div class="scroll-container w-full overflow-x-auto">
                    <div class="flex gap-5 ">
                        <div class="flex-shrink-0  flex items-center justify-center w-48 md:w-[268.25px] h-[168px] md:h-[268px] ">
                            <img src="{{ asset('images/machine/img_1.png') }}" alt="Image 1" class="shadow-custom object-cover">
                        </div>
                        <div class="flex-shrink-0  flex items-center justify-center w-48 md:w-[268.25px] h-[168px] md:h-[268px] ">
                            <img src="{{ asset('images/machine/img_2.png') }}" alt="Image 2" class="shadow-custom object-cover">
                        </div>
                        <div class="flex-shrink-0  flex items-center justify-center w-48 md:w-[268.25px] h-[168px] md:h-[268px] ">
                            <img src="{{ asset('images/machine/img_3.png') }}" alt="Image 3" class="shadow-custom object-cover">
                        </div>
                        <div class="flex-shrink-0  flex items-center justify-center w-48 md:w-[268.25px] h-[168px] md:h-[268px] ">
                            <img src="{{ asset('images/machine/img_4.png') }}" alt="Image 4" class="shadow-custom object-cover">
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div class="flex  order-2 sm:order-1 md:pl-20">
            <div class="grid grid-cols-3 items-center justify-center gap-0">

                <div class="col-span-1 flex justify-center">
                    <img class="Image w-auto md:h-[570px] block" src="{{ asset('images/machine/machine_2.png') }}" alt="Coffee Machine" />
                </div>

                <div class="col-span-2 flex justify-center pl-9">
                    <img class="Image block" src="{{ asset('images/machine/machine_details.svg') }}" alt="Coffee Machine" />
                </div>
            </div>


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
                    <h3 class="header_red !p-0 text-left">CAFFÈ MOCHA</h3>
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
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('image-container');
    const indicator = document.getElementById('scroll-indicator');

    container.addEventListener('scroll', () => {
        const scrollWidth = container.scrollWidth - container.clientWidth;
        const scrollLeft = container.scrollLeft;
        const scrollPercentage = (scrollLeft / scrollWidth) * 100;

        // Actualiza el ancho del indicador
        indicator.style.width = `${scrollPercentage}%`;
    });
});

</script>
