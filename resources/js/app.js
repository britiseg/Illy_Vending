// resources/js/app.js
import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';


import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("div[id]");
    const navItems = document.querySelectorAll(".nav-item");

    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.3, // Detecta cuando el 60% de la sección está visible
    };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const sectionId = entry.target.getAttribute("id");
                navItems.forEach((item) => {

                    item.classList.remove("font-bold");
                    if (item.getAttribute("href") === `#${sectionId}`) {
                        item.classList.add("font-bold");
                    } else if (sectionId === "navbar" && item.getAttribute("href") === "#prepango-program") {
                        item.classList.add("font-bold");
                    }
                });
            }
        });
    }, observerOptions);


    sections.forEach((section) => observer.observe(section));
});
