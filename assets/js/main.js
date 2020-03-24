var toggleBtn = document.querySelector(".navbar__toggle-button");
var header = document.querySelector(".header");

console.log("hello world");

if (toggleBtn) {
  toggleBtn.addEventListener("click", function(e) {
    header.classList.toggle("navbar__nav-collapse");
  });
}
