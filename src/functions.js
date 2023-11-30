const swiper = new Swiper(".swiper", {
  autoplay: {
    delay: 5000,
  },
  loop: true,
  navigation: {
    nextEl: ".carousel-next",
    prevEl: ".carousel-prev",
  },
});
const dropdownBtn = document.querySelector(".dropdown-button");
const dropdownMenu = document.querySelector(".dropdown-menu");

dropdownBtn.addEventListener("click", (event) => {
  dropdownMenu.classList.toggle("hidden");
});

window.addEventListener("click", (event) => {
  const dropdown = document.querySelector(".dropdown");

  console.log(dropdown.contains(event.target));

  if (!dropdown.contains(event.target)) {
    dropdownMenu.classList.add("hidden");
  }
});
