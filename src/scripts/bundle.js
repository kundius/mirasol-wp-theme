import Swiper, {
  Autoplay,
  EffectCoverflow,
  EffectCreative,
  Pagination,
  Navigation,
  Thumbs,
} from "swiper";
// import HystModal from "hystmodal";

// new HystModal({
//   linkAttributeName: "data-hystmodal",
// });

// new Swiper(".nav-slider .swiper", {
//   modules: [Navigation],
//   speed: 500,
//   spaceBetween: 6,
//   loop: true,
//   // grabCursor: true,
//   slidesPerView: "auto",
//   navigation: {
//     nextEl: ".nav-slider-button-next",
//     prevEl: ".nav-slider-button-prev",
//   },
// });

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
