// resources/js/app.js
import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';


import './bootstrap';
document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("div[id]"); // Todas las secciones con id
    const navItems = document.querySelectorAll(".nav-item"); // Todos los items de navegación
    const getInTouchButton = document.getElementById("get-in-touch-button");

    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.2, // Detecta cuando el 30% de la sección está visible
    };

    // Esta función es llamada para centrar un navItem en la barra de navegación
    function centerNavItem(navItem) {
        const navBar = document.getElementById('navbar');
        if (!navBar || !navItem) return;

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
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const sectionId = entry.target.getAttribute("id");
                console.log('sectionID: ' + sectionId);

                // Primero, desmarcar todos los navItems
                navItems.forEach((item) => {
                    item.classList.remove("font-bold");
                });

                // Ahora, marcar el navItem correspondiente a la sección visible
                navItems.forEach((item) => {
                    if (item.getAttribute("href") === `#${sectionId}`) {
                        item.classList.add("font-bold");
                    }
                });

                // Si estamos en la sección "prepango-get-in-touch", cambia el botón
                if (sectionId === "prepango-get-in-touch") {
                    getInTouchButton.href = "#prepango-program";
                    getInTouchButton.textContent = "↑ Back to Top";
                    getInTouchButton.classList.remove("bg-primary-red", "hover:bg-secondary-red");
                    getInTouchButton.classList.add("bg-dark_brown", "hover:bg-med_brown");
                } else {
                    // Restaurar el botón al estado original si no estamos en "prepango-get-in-touch"
                    getInTouchButton.href = "#prepango-get-in-touch";
                    getInTouchButton.textContent = "Get In Touch";
                    getInTouchButton.classList.remove("bg-dark_brown", "hover:bg-med_brown");
                    getInTouchButton.classList.add("bg-primary-red", "hover:bg-secondary-red");
                }

                // Si la pantalla es pequeña, centrar el navItem seleccionado
                if (window.innerWidth <= 768) {
                    const activeNavItem = document.querySelector('.nav-item.font-bold');
                    if (activeNavItem) {
                        centerNavItem(activeNavItem);
                    }
                }
            }
        });
    }, observerOptions);

    // Observa solo las secciones relevantes, no los elementos como el navbar
    sections.forEach((section) => observer.observe(section));

    // Al cargar la página, selecciona el primer navItem (el de "The Prepango Program")
    const firstNavItem = document.querySelector('.nav-item[href="#prepango-program"]');
    if (firstNavItem) {
        firstNavItem.classList.add('font-bold');
        if (window.innerWidth <= 768) {
            centerNavItem(firstNavItem);
        }
    }
});

// Función para centrar el navItem dentro de la barra de navegación

function centerNavItem(navItem, navbarId) {

    if (!navItem) {
        console.error('Nav item not found');
        return;
    }
    const navBars = document.querySelectorAll('.nav-bar'); // Seleccionar todas las barras de navegación con la clase '.nav-bar'

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