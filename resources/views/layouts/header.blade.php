
<div class="relative pX-4 ">
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-2 !mb-0.5 !ml-2">
            <img src="{{ asset('images/logo_prepango.png') }}" alt="Logo Prepango" class="h-8 !mt-0.5">
            <img src="{{ asset('images/logo_illy.png') }}" alt="Logo Illy" class="h-8 !mt-0.5">
        </div>
        <div>
            <button type="button" class="inline-flex items-center bg-primary-red text-white font-semibold px-3 py-2 text-sm shadow-sm hover:bg-secondary-red hover:shadow-lg focus:bg-secondary-red focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-red active:shadow-lg">
                Get In Touch
            </button>
        </div>
    </div>
</div>

<div id="navbar" class="fixed top-0 left-0 right-0 bg-med_beige py-4 px-6 shadow-md transition-all duration-300 ease-in-out z-10 hidden-navbar">
    <nav class="flex space-x-6 justify-left md:justify-center">
        <a href="#" class="nav-item font-bold" onclick="selectNavItem(event)">The Prepango Program</a>
        <a href="#" class="nav-item" onclick="selectNavItem(event)">The Illy Experience</a>
        <a href="#" class="nav-item" onclick="selectNavItem(event)">Machine Details</a>
        <a href="#" class="nav-item" onclick="selectNavItem(event)">New!</a>
        <a href="#" class="nav-item" onclick="selectNavItem(event)">Get In Touch</a>
    </nav>
</div>


<div class="relative !mt-0">
    <button id="leftArrow" class="arrow left hidden-arrows text-dark_beige hover:text-dark_brown hover:border-dark_brown" onclick="scrollNav(-200)">
        <svg class="sm:block hidden-arrows" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
    </button>

    <div class="w-full bg-med_beige py-4 px-6 nav-bar overflow-x-auto scrollbar-hide" id="navBar" onscroll="toggleArrows()">
        <nav class="flex space-x-6 justify-left md:justify-center">
            <a href="#" class="nav-item font-bold" onclick="selectNavItem(event)">The Prepango Program</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">The Illy Experience</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">Machine Details</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">New!</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">Get In Touch</a>
            {{-- <a href="#" class="nav-item font-bold" onclick="selectNavItem(event)">The Prepango Program</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">The Illy Experience</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">Machine Details</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">New!</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">Get In Touch</a>
            <a href="#" class="nav-item font-bold" onclick="selectNavItem(event)">The Prepango Program</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">The Illy Experience</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">Machine Details</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">New!</a>
            <a href="#" class="nav-item" onclick="selectNavItem(event)">Get In Touch</a> --}}
        </nav>
    </div>

    <button id="rightArrow" class="arrow right hidden-arrows text-dark_beige hover:text-dark_brown hover:border-dark_brown" onclick="scrollNav(200)">
        <svg class="sm:block hidden-arrows" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </button>
</div>

<button type="button" id="btn-get-in-touch" class="fixed bottom-5 left-5 hidden rounded-full bg-primary-red p-3 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-secondary-red hover:shadow-lg focus:bg-secondary-red focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-red active:shadow-lg">
    Get in Touch
</button>

<button type="button" data-twe-ripple-init data-twe-ripple-color="light" class="!fixed bottom-5 end-5 hidden rounded-full bg-dark_brown p-3 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-med_brown hover:shadow-lg focus:bg-med_brown focus:shadow-lg focus:outline-none focus:ring-0 active:bg-dark_brown active:shadow-lg" id="btn-back-to-top">
    <span class="[&>svg]:w-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
        </svg>
    </span>
    </button>
<script>
    function selectNavItem(event) {
        document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('font-bold'));
        event.currentTarget.classList.add('font-bold');
    }

    function scrollNav(distance) {
        const navBar = document.getElementById('navBar');
        navBar.scrollBy({ left: distance, behavior: 'smooth' });
    }

    function toggleArrows() {
        const navBar = document.getElementById('navBar');
        const leftArrow = document.getElementById('leftArrow');
        const rightArrow = document.getElementById('rightArrow');

        if (navBar.scrollWidth > navBar.clientWidth) {
            leftArrow.classList.toggle('hidden-arrows', navBar.scrollLeft === 0);
            rightArrow.classList.toggle('hidden-arrows', navBar.scrollLeft + navBar.clientWidth >= navBar.scrollWidth);
        } else {
            leftArrow.classList.add('hidden-arrows');
            rightArrow.classList.add('hidden-arrows');
        }
    }

    function scrollFunction() {
        const backToTopButton = document.getElementById("btn-back-to-top");
        const getInTouchButton = document.getElementById("btn-get-in-touch");

        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopButton.classList.remove("hidden");
            getInTouchButton.classList.remove("hidden");
        } else {
            backToTopButton.classList.add("hidden");
            getInTouchButton.classList.add("hidden");
        }
    }

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }

    function handleGetInTouch() {

        alert("Redirigir a sección de contacto o abrir modal.");
    }

    window.addEventListener("scroll", function() {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
        // Muestra el navbar solo cuando se baja 50px        navbar.classList.add("scrolled");
        navbar.classList.remove("hidden-navbar");
    } else {
        navbar.classList.add("hidden-navbar");
        navbar.classList.remove("scrolled");
    }
});


    document.getElementById("btn-back-to-top").addEventListener("click", scrollToTop);
    window.addEventListener("scroll", scrollFunction);
    window.addEventListener("load", toggleArrows);
    window.addEventListener("resize", toggleArrows);
</script>

