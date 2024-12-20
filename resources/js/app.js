// resources/js/app.js
import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';
import intlTelInput from '/node_modules/intl-tel-input/build/js/intlTelInput.js';
import '/node_modules/intl-tel-input/build/css/intlTelInput.css';



import './bootstrap';

document.addEventListener("DOMContentLoaded", function() {
    const phoneInput = document.querySelector("#phone");

    if (phoneInput) {
        const iti = window.intlTelInput(phoneInput, {
            initialCountry: "us",
            preferredCountries: ["us", "gb", "fr", "es", "it"],
            separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js",
        });

        // Forzar el placeholder manualmente para mantener la animación de Tailwind
        phoneInput.addEventListener("countrychange", function() {
            phoneInput.setAttribute("placeholder", " ");
        });
    }
});



document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".section"); // Selecciona solo las secciones relevantes
    const navItems = document.querySelectorAll(".nav-item"); // Todos los items de navegación
    const getInTouchButton = document.getElementById("get-in-touch-button");

    const observerOptions = {
        root: null,
        rootMargin: "0px 0px -30% 0px",
        threshold: 0.1,
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
            // console.log('Observando:', entry.target.id, 'Is intersecting:', entry.isIntersecting);
            if (entry.isIntersecting) {
                const sectionId = entry.target.getAttribute("id");

                // Primero, desmarcar todos los navItems
                navItems.forEach((item) => {
                    item.classList.remove("font-bold");
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


    // Forzar visibilidad inicial
    const firstSection = document.querySelector("#prepango-program");
    if (firstSection) {
        firstSection.scrollIntoView({ behavior: "smooth" });
        if (window.innerWidth <= 768) {
            centerNavItem(firstSection);
        }
    }


});