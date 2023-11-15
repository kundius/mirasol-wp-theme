import Swiper, { Autoplay, EffectCoverflow, EffectCreative, Pagination, Navigation } from "swiper";
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
    delay: 6000
  },
  slidesPerView: 1,
  navigation: {
    nextEl: ".slideshow .swiper-button-next",
    prevEl: ".slideshow .swiper-button-prev",
  },
});
