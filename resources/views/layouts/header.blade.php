

<div id="header" class="fixed top-0 left-0 w-full bg-white shadow-md z-20">
    <div class="flex items-center justify-between p-0">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/logo_prepango.png') }}" alt="Logo Prepango" class="h-8">
            <img src="{{ asset('images/logo_illy.png') }}" alt="Logo Illy" class="h-8">
        </div>
        <a href="{{ Route::is('get-in-touch') ? '/' : route('get-in-touch') }}"
        class="text-white font-semibold px-3 py-2 text-sm shadow-sm {{ Route::is ('get-in-touch') ? 'bg-dark_brown hover:bg-med_brown' : 'bg-primary-red hover:bg-secondary-red'}} focus:outline-none">
        {{ Route::is('get-in-touch') ? 'Back to Top' : 'Get In Touch' }}
        </a>

    </div>
</div>
<div id="navbar" class="fixed top-[34px] left-0 right-0 bg-med_beige py-4 px-6 shadow-md transition-all duration-300 ease-in-out z-20 hidden-navbar">
    <nav class="flex space-x-6 justify-left md:justify-center navigation">
            <a href="#prepango-program" class="nav-item font-bold" onclick="selectNavItem(event)">The Prepango Program</a>
            <a href="#prepango-experience" class="nav-item" onclick="selectNavItem(event)">The Illy Experience</a>
            <a href="#prepango-machine" class="nav-item" onclick="selectNavItem(event)">Machine Details</a>
            <a href="#prepango-new" class="nav-item" onclick="selectNavItem(event)">New!</a>
            <a href="{{ route('get-in-touch') }}" class="nav-item" onclick="selectNavItem(event)">Get In Touch</a>
    </nav>
</div>


<div class="relative !mt-0">
    <button id="leftArrow" class="arrow left hidden-arrows text-dark_beige hover:text-dark_brown hover:border-dark_brown" onclick="scrollNav(-200)">
        <svg class="sm:block hidden-arrows" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
    </button>
    @unless (Route::is('get-in-touch'))
 <div class="flex justify-center">
        <img src="{{ asset('images/program/machine_1.png') }}" alt="Coffee Machine" class="w-full h-auto lg:h-[837px] object-cover shadow-md">
    </div>
      @endunless



        <div id="navBar" class="w-full bg-med_beige py-4 px-6 nav-bar overflow-x-auto scrollbar-hide {{ Route::is('get-in-touch') ? 'mt-[30px]' : '' }}" onscroll="toggleArrows()">

        <nav class="flex space-x-6 justify-left md:justify-center  navigation">
            <a href="#prepango-program" class="nav-item font-bold" onclick="selectNavItem(event)">The Prepango Program</a>
            <a href="#prepango-experience" class="nav-item" onclick="selectNavItem(event)">The Illy Experience</a>
            <a href="#prepango-machine" class="nav-item" onclick="selectNavItem(event)">Machine Details</a>
            <a href="#prepango-new" class="nav-item" onclick="selectNavItem(event)">New!</a>
              <a href="{{ route('get-in-touch') }}" class="nav-item" onclick="selectNavItem(event)">Get In Touch</a>
        </nav>
    </div>

    <button id="rightArrow" class="arrow right hidden-arrows text-dark_beige hover:text-dark_brown hover:border-dark_brown" onclick="scrollNav(200)">
        <svg class="sm:block hidden-arrows" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </button>
</div>




<button type="button" data-twe-ripple-init data-twe-ripple-color="light"
    class="!fixed right-0 top-1/2 z-[9999] hidden -translate-y-1/2 flex items-center justify-center rounded-l-full bg-primary-red p-3 text-[10px] md:text-xs font-medium leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-secundary-red hover:shadow-lg focus:bg-med_brown focus:shadow-lg focus:outline-none focus:ring-0 active:bg-dark_brown active:shadow-lg"
    id="btn-back-to-top">
    <span class="flex items-center justify-center [&>svg]:w-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
        </svg>
        Back to Top
    </span>
</button>


<script>
  function selectNavItem(event) {
    const targetText = event.currentTarget.innerText;
    const targetHref = event.currentTarget.getAttribute("href");

    document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('font-bold'));
    document.querySelectorAll('.nav-item').forEach(item => {
        if (item.innerText === targetText || item.getAttribute("href") === targetHref) {
            item.classList.add('font-bold');
        }
    });
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
    if (window.scrollY > 800) {
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

