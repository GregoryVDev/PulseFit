let index = 0;
const images = document.querySelectorAll(".illustration img");

function changeImage() {
  images[index].classList.remove("active");
  index = (index + 1) % images.length;
  images[index].classList.add("active");
}

setInterval(changeImage, 6000);
changeImage();
