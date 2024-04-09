// Récupérer les éléments du menu
const openicon = document.getElementById("open_icon");
const closeicon = document.getElementById("close_icon");
const nav_menu = document.querySelector("nav");

// Définir les variables pour les écouteurs d'événements
const openMenu = openicon;
const closeMenu = closeicon;

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

console.log(opencon); // Affiche l'élément "open_con" dans la console