import Swiper, { Autoplay, Navigation, Thumbs } from "swiper";
import HystModal from "hystmodal";

const modal = new HystModal({
  linkAttributeName: "data-hystmodal",
});

new Swiper(".slideshow .swiper", {
  modules: [Navigation, Autoplay],
  speed: 500,
  spaceBetween: 24,
  loop: true,
  autoplay: {
    disableOnInteraction: false,
    delay: 6000,
  },
  slidesPerView: 1,
});

const swiper = new Swiper(".product-gallery__thumbs .swiper", {
  spaceBetween: 10,
  slidesPerView: 3,
  freeMode: true,
  watchSlidesProgress: true,
  direction: "vertical",
  centeredSlides: true,
});

const swiper2 = new Swiper(".product-gallery__main .swiper", {
  modules: [Thumbs],
  spaceBetween: 10,
  thumbs: {
    swiper: swiper,
  },
});

document.addEventListener('wpcf7submit', function(event) {
  event.target.classList.remove('sent');
  event.target.classList.remove('failed');
  event.target.classList.add('init');

  modal.open('#success');
}, false);
