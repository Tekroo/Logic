// // Image agrandissante
// document.addEventListener("DOMContentLoaded", ()=>{
//   var expandableImage = document.querySelector('.pic_float');
//   expandableImage.addEventListener("click", ()=>{
//     expandableImage.classList.toggle("expanded");
//   })
// })

document.addEventListener("DOMContentLoaded", () => {
  const expandableImages = document.querySelectorAll('.pic_float');
  
  expandableImages.forEach(expandableImage => {
      expandableImage.addEventListener("click", () => {
          expandableImage.classList.toggle("expanded");
      });
  });
});