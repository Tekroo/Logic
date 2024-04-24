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
