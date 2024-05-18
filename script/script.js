// Récupérer les éléments du menu
const openMenu = document.getElementById("open_icon");
const closeMenu = document.getElementById("close_icon");
const nav_menu = document.querySelector("nav");


// Ajouter un écouteur d'événement pour ouvrir le menu
openMenu.addEventListener("click", () => {
  nav_menu.style.display = "block";
  openMenu.style.display = "none";
  closeMenu.style.display = "block";
});

// Ajouter un écouteur d'événement pour fermer le menu
closeMenu.addEventListener("click", () => {
  nav_menu.style.display = "none";
  openMenu.style.display = "block";
  closeMenu.style.display = "none";
});

document.addEventListener('DOMContentLoaded', () => {
    const mainNavItems = document.querySelectorAll('nav > ul > li > a'); // Sélectionne les éléments principaux du menu

    // Fonction pour définir la classe active en fonction de l'URL actuelle
    const setActiveClass = () => {
        const currentPath = window.location.pathname;

        mainNavItems.forEach(item => {
            try {
                const itemURL = new URL(item.href, window.location.origin);
                const itemPath = itemURL.pathname;

                // Vérifie si l'élément est dans la section "Services"
                const isInServicesSection = item.getAttribute('href') === '#';

                // Assure que l'élément n'est pas dans la section "Services" et n'a pas de sous-menu avant de lui attribuer la classe active
                if (itemPath === currentPath && !isInServicesSection && !item.nextElementSibling) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            } catch (error) {
                console.error('Error processing URL:', error);
            }
        });
    };

    // Appel initial pour définir la classe active en fonction de l'URL actuelle
    setActiveClass();

    // Ajoute un écouteur d'événement de clic pour changer la classe active avant la navigation
    mainNavItems.forEach(item => {
        item.addEventListener('click', () => {
            mainNavItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
        });
    });
});







document.addEventListener("DOMContentLoaded", function() {
    function setupFilterMenu() {
        const menuItems = document.querySelectorAll(".menu .filter");

        menuItems.forEach(item => {
            item.addEventListener("click", function(event) {
                event.preventDefault();

                // Appliquer la classe .show_li à l'élément cliqué
                menuItems.forEach(menuItem => {
                    menuItem.classList.remove("show_li");
                });
                item.classList.add("show_li");
                
                const filter = item.getAttribute("data-filter");

                if (filter === "all") {
                    const allElements = document.querySelectorAll('.rea_content');
                    allElements.forEach(element => {
                        element.classList.remove("hidden");
                    });
                } else {
                    const filteredElements = document.querySelectorAll(`.rea_content.${filter}`);

                    filteredElements.forEach(element => {
                        element.classList.remove("hidden");
                    });

                    // Masquer les autres éléments
                    const otherElements = document.querySelectorAll('.rea_content:not(.' + filter + ')');
                    otherElements.forEach(element => {
                        element.classList.add("hidden");
                    });
                }
            });
        });

        // Initialiser l'état par défaut
        document.querySelector('.menu .filter[data-filter="all"]').click();
    }

    setupFilterMenu();
});
