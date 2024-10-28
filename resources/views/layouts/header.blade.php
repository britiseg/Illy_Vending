<div class="relative pX-4">
    <div class="absolute right-0">
        <button type="button" class="inline-flex items-center bg-primary-red text-white font-semibold px-3 py-2 text-sm shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
            Get In Touch
        </button>
    </div>

    <div class="flex flex-col space-y-4">
        <div class="flex items-center space-x-2 !mb-0.5 !ml-2">
            <img src="{{ asset('images/logo_prepango.png') }}" alt="Logo Prepango" class="h-8 !mt-0.5">
            <img src="{{ asset('images/logo_illy.png') }}" alt="Logo Illy" class="h-8 !mt-0.5">
        </div>

        <div class="relative !mt-0">
            <button id="leftArrow" class="arrow left hidden-arrows text-dark_beige hover:text-dark_brown hover:border-dark_brown" onclick="scrollNav(-200)">
                <svg class="sm:block hidden-arrows" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </button>

            <div class="w-full bg-med_beige py-4 px-6 nav-bar overflow-x-auto scrollbar-hide" id="navBar" onscroll="toggleArrows()">
                <nav class="flex space-x-6 justify-left justify-start md:justify-center">
                    <a href="#" class="nav-item font-bold" onclick="selectNavItem(event)">The Prepango Program</a>
                    <a href="#" class="nav-item" onclick="selectNavItem(event)">The Illy Experience</a>
                    <a href="#" class="nav-item" onclick="selectNavItem(event)">Machine Details</a>
                    <a href="#" class="nav-item" onclick="selectNavItem(event)">New!</a>
                    <a href="#" class="nav-item" onclick="selectNavItem(event)">Get In Touch</a>

                </nav>
            </div>

            <button id="rightArrow" class="arrow right hidden-arrows  text-dark_beige hover:text-dark_brown hover:border-dark_brown" onclick="scrollNav(200)">
                <svg class="sm:block hidden-arrows" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>

        </div>
    </div>
</div>

<script>
    function selectNavItem(event) {
        document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('font-bold'));
        event.currentTarget.classList.add('font-bold');
    }

    // Función para hacer scroll en la barra de navegación
    function scrollNav(distance) {
        const navBar = document.getElementById('navBar');
        navBar.scrollBy({ left: distance, behavior: 'smooth' });
    }

    function toggleArrows() {
        const navBar = document.getElementById('navBar');
        const leftArrow = document.getElementById('leftArrow');
        const rightArrow = document.getElementById('rightArrow');

        // Verifica si hay desplazamiento horizontal disponible
        if (navBar.scrollWidth > navBar.clientWidth) {
            // Muestra u oculta las flechas según la posición de desplazamiento
            leftArrow.classList.toggle('hidden-arrows', navBar.scrollLeft === 0);
            rightArrow.classList.toggle('hidden-arrows', navBar.scrollLeft + navBar.clientWidth >= navBar.scrollWidth);
        } else {
            // Oculta ambas flechas si no hay desplazamiento horizontal
            leftArrow.classList.add('hidden-arrows');
            rightArrow.classList.add('hidden-arrows');
        }
    }

    // Llama a toggleArrows al cargar la página para establecer el estado inicial
    window.addEventListener('load', toggleArrows);
    window.addEventListener('resize', toggleArrows);
</script>

