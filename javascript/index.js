const hamburer = document.querySelector(".hamburger");
const navList = document.querySelector(".nav-list");
console.log("1");

if (hamburer) {
  hamburer.addEventListener("click", () => {
    navList.classList.toggle("open");
  });
}
