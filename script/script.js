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



document.addEventListener("DOMContentLoaded", function() {
  let lastScrollTop = 0;
  const header = document.getElementById  ("main_header");

  window.addEventListener("scroll", function() {
      const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

      if (currentScroll > lastScrollTop) {
          // Scroll vers le bas
          if (header !== null) {
              header.style.opacity = "0";
              header.style.transition = "opacity 0.5s ease-in-out";
          }
      } else {
          // Scroll vers le haut
          if (header !== null) {
              header.style.opacity = "1";
              header.style.transition = "opacity 0.5s ease-in-out";
          }
      }
      lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
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
  }

  setupFilterMenu();
});
