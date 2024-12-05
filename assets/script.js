document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".row-nav");

  hamburger.addEventListener("click", () => {
    navMenu.classList.toggle("active");
  });
});
