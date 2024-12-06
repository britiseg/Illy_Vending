
<div id="header" class="fixed top-0 left-0 w-full bg-white shadow-md z-50">
    <div class="flex items-center justify-between p-0">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/logo_prepango.png') }}" alt="Logo Prepango" class="h-8">
            <img src="{{ asset('images/logo_illy.png') }}" alt="Logo Illy" class="h-8">
        </div>
        <a href="{{ Route::is('get-in-touch') ? '/' : route('get-in-touch') }}"
           class="text-white font-semibold px-3 py-2 text-sm shadow-sm
           {{ Route::is('get-in-touch') ? 'bg-dark_brown hover:bg-med_brown' : 'bg-primary-red hover:bg-secondary-red' }}
           focus:outline-none">
            {{ Route::is('get-in-touch') ? 'Back to Top' : 'Get In Touch' }}
        </a>
    </div>
</div>

<!-- Barra de navegación con flechas -->
<div class="hidden-navbar fixed top-[2.2rem] md:top-[34px] left-0 w-full z-20" id="navbar">
    <x-navbar-with-arrows
    :id="'navbar1'"
    :links="[
        ['href' => '#prepango-program', 'text' => 'The Prepango Program', 'id' => '1', 'class' => 'font-bold'],
        ['href' => '#prepango-experience', 'text' => 'The Illy Experience', 'id' => '2'],
        ['href' => '#prepango-machine', 'text' => 'Machine Details', 'id' => '3'],
        ['href' => '#prepango-new', 'text' => 'New!', 'id' => '4'],
        ['href' => route('get-in-touch'), 'text' => 'Get In Touch', 'id' => '5']
    ]"
/>
</div>

@unless (Route::is('get-in-touch'))
<div class="flex justify-center">
       <img src="{{ asset('images/program/machine_1.png') }}" alt="Coffee Machine" class="w-full h-auto lg:h-[837px] object-cover shadow-md">
   </div>
     @endunless

<!-- Barra de navegación secundaria con flechas -->
<x-navbar-with-arrows
:id="'navbar2'"
:links="[
    ['href' => '#prepango-program', 'text' => 'The Prepango Program', 'id' => '1', 'class' => 'font-bold'],
    ['href' => '#prepango-experience', 'text' => 'The Illy Experience', 'id' => '2'],
    ['href' => '#prepango-machine', 'text' => 'Machine Details', 'id' => '3'],
    ['href' => '#prepango-new', 'text' => 'New!', 'id' => '4'],
    ['href' => route('get-in-touch'), 'text' => 'Get In Touch', 'id' => '5']
]"
/>


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
window.addEventListener('load', function () {
    // Desplazar la página al principio (al top)
    window.scrollTo({ top: 0, behavior: 'smooth' });

    // Deseleccionar todos los navItems (eliminar la clase 'font-bold' de todos)
    document.querySelectorAll('.nav-item').forEach(item => {
        item.classList.remove('font-bold');
    });
});


function selectNavItem(event) {
    const targetText = event.currentTarget.innerText;
    const targetHref = event.currentTarget.getAttribute("href");

    document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('font-bold'));
    document.querySelectorAll('.nav-item').forEach(item => {
        if (item.innerText === targetText || item.getAttribute("href") === targetHref) {
            item.classList.add('font-bold');
        }
    });

    if (window.innerWidth <= 768) {
        centerNavItem(event.currentTarget);
    }
}
function centerNavItem(navItem, navbarId) {
    console.log("NavItem: ", navItem);  // Verificar que navItem existe
    console.log("NavbarId: ", navbarId);  // Verificar que navbarId está siendo pasado correctamente

    if (!navItem) {
        console.error('Nav item not found');
        return;
    }
    const navBars = document.querySelectorAll('.nav-bar');  // Seleccionar todas las barras de navegación con la clase '.nav-bar'

    navBars.forEach(navBar => {
        console.log('navBar: '+navBar)
        const navBarWidth = navBar.offsetWidth;
        const navItemOffsetLeft = navItem.offsetLeft;
        const navItemWidth = navItem.offsetWidth;

        // Calcular la posición para centrar el nav-item en cada barra de navegación
        const scrollPosition = navItemOffsetLeft - navBarWidth / 2 + navItemWidth / 2;

        // Desplazar la barra de navegación hasta la posición calculada
        navBar.scrollTo({
            left: scrollPosition,
            behavior: 'smooth',
        });
    });


}

// const navItem = document.querySelector('.nav-item.font-bold');  // Selecciona el navItem con la clase 'font-bold'
// if (navItem && window.innerWidth <= 768) {
//     centerNavItem(navItem);  // Centrar el navItem seleccionado en ambas barras de navegación
// }




function scrollNav(distance) {
    const navBar = document.getElementById('navBar');
    navBar.scrollBy({ left: distance, behavior: 'smooth' });
}

function toggleArrows() {
    // Seleccionar todas las barras de navegación
    const navBars = document.querySelectorAll('.nav-bar');

    navBars.forEach(navBar => {
        // Obtener las flechas correspondientes a cada barra de navegación
        const leftArrow = navBar.querySelector('.arrow.left');
        const rightArrow = navBar.querySelector('.arrow.right');

        // Verificar si la barra de navegación tiene un desplazamiento horizontal
        if (navBar.scrollWidth > navBar.clientWidth) {
            // Mostrar/ocultar las flechas según el desplazamiento
            leftArrow.classList.toggle('hidden-arrows', navBar.scrollLeft === 0);
            rightArrow.classList.toggle('hidden-arrows', navBar.scrollLeft + navBar.clientWidth >= navBar.scrollWidth);
        } else {
            // Si no hay desplazamiento, ocultar ambas flechas
            leftArrow.classList.add('hidden-arrows');
            rightArrow.classList.add('hidden-arrows');
        }
    });
}


    function scrollFunction() {
        const backToTopButton = document.getElementById("btn-back-to-top");
        // const getInTouchButton = document.getElementById("btn-get-in-touch");

        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopButton.classList.remove("hidden");

            // const programNavItem = document.querySelector('a[href="#prepango-program"]');
            //                 if (programNavItem) {
            //                     programNavItem.classList.add("font-bold");
            //                 }

            // getInTouchButton.classList.remove("hidden");
        } else {

            backToTopButton.classList.add("hidden");
            // getInTouchButton.classList.add("hidden");
        }
    }

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }
    window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    if (!navbar) return;

    const scrollThreshold = window.innerWidth <= 768 ? 400 : 800;

    // Mostrar/ocultar la barra de navegación
    if (window.scrollY > scrollThreshold) {
        navbar.classList.remove("hidden-navbar");
    } else {
        navbar.classList.add("hidden-navbar");
        navbar.classList.remove("scrolled");
    }

    // Si la pantalla es pequeña, centramos el navItem seleccionado
    if (window.innerWidth <= 768) {
        const activeNavItem = document.querySelector('.nav-item.font-bold');
        if (activeNavItem) {
            centerNavItem(activeNavItem);
        }
    }
});


function centerNavItem(navItem, navbarId) {

    if (!navItem) {
        console.error('Nav item not found');
        return;
    }
    const navBars = document.querySelectorAll('.nav-bar');  // Seleccionar todas las barras de navegación con la clase '.nav-bar'

    navBars.forEach(navBar => {

        const navBarWidth = navBar.offsetWidth;
        const navItemOffsetLeft = navItem.offsetLeft;
        const navItemWidth = navItem.offsetWidth;

        // Calcular la posición para centrar el nav-item en cada barra de navegación
        const scrollPosition = navItemOffsetLeft - navBarWidth / 2 + navItemWidth / 2;

        // Desplazar la barra de navegación hasta la posición calculada
        navBar.scrollTo({
            left: scrollPosition,
            behavior: 'smooth',
        });
    });


}


    document.getElementById("btn-back-to-top").addEventListener("click", scrollToTop);
    window.addEventListener("scroll", scrollFunction);
    window.addEventListener("load", toggleArrows);
    window.addEventListener("resize", toggleArrows);

//     window.addEventListener('load', function () {
//     const activeNavItem = document.querySelector('.nav-item.font-bold');
//     if (activeNavItem && window.innerWidth <= 768) {
//         centerNavItem(activeNavItem);
//     }
// });
//   function selectNavItem(event) {
//     const targetText = event.currentTarget.innerText;
//     const targetHref = event.currentTarget.getAttribute("href");

//     document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('font-bold'));
//     document.querySelectorAll('.nav-item').forEach(item => {
//         if (item.innerText === targetText || item.getAttribute("href") === targetHref) {
//             item.classList.add('font-bold');
//         }
//     });

//       // Aplicar centrado solo en móviles
//       if (window.innerWidth <= 768) {
//         console.log('entros center');
//         centerNavItem(event.currentTarget);
//     }
// }

// function centerNavItem(navItem) {
//     const navBar = document.getElementById('navBar');
//     console.log('cenger'+navBar);
//     if (!navBar || !navItem) return;

//     const navBarWidth = navBar.offsetWidth;
//     const navItemOffsetLeft = navItem.offsetLeft;
//     const navItemWidth = navItem.offsetWidth;

//     // Calcular la posición para centrar el nav-item
//     const scrollPosition = navItemOffsetLeft - navBarWidth / 2 + navItemWidth / 2;
//     navBar.scrollTo({
//         left: scrollPosition,
//         behavior: 'smooth',
//     });
// }
//     function scrollNav(distance) {
//         const navBar = document.getElementById('navBar');
//         navBar.scrollBy({ left: distance, behavior: 'smooth' });
//     }

//     function toggleArrows() {
//         const navBar = document.getElementById('navBar');
//         const leftArrow = document.getElementById('leftArrow');
//         const rightArrow = document.getElementById('rightArrow');

//         if (navBar.scrollWidth > navBar.clientWidth) {
//             leftArrow.classList.toggle('hidden-arrows', navBar.scrollLeft === 0);
//             rightArrow.classList.toggle('hidden-arrows', navBar.scrollLeft + navBar.clientWidth >= navBar.scrollWidth);
//         } else {
//             leftArrow.classList.add('hidden-arrows');
//             rightArrow.classList.add('hidden-arrows');
//         }
//     }

//     function scrollFunction() {
//         const backToTopButton = document.getElementById("btn-back-to-top");
//         // const getInTouchButton = document.getElementById("btn-get-in-touch");

//         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//             backToTopButton.classList.remove("hidden");
//             // getInTouchButton.classList.remove("hidden");
//         } else {
//             backToTopButton.classList.add("hidden");
//             // getInTouchButton.classList.add("hidden");
//         }
//     }

//     function scrollToTop() {
//         window.scrollTo({ top: 0, behavior: "smooth" });
//     }

//     function handleGetInTouch() {

//         alert("Redirigir a sección de contacto o abrir modal.");
//     }



//     window.addEventListener("scroll", function () {
//     const navbar = document.getElementById("navbar");
//     if (!navbar) return;

//     // Ajusta el valor de scrollY según el ancho de la pantalla
//     const scrollThreshold = window.innerWidth <= 768 ? 400 : 800;

//     if (window.scrollY > scrollThreshold) {
//         navbar.classList.remove("hidden-navbar");
//     } else {
//         navbar.classList.add("hidden-navbar");
//         navbar.classList.remove("scrolled");
//     }
// });



//     document.getElementById("btn-back-to-top").addEventListener("click", scrollToTop);
//     window.addEventListener("scroll", scrollFunction);
//     window.addEventListener("load", toggleArrows);
//     window.addEventListener("resize", toggleArrows);
</script>

