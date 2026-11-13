import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';

export default function initServicesSlider() {
  const el = document.querySelector('#servicesSlider');
  if (!el) return;

  new Swiper(el, {
    modules: [Navigation],
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    navigation: {
      prevEl: '#sliderPrev',
      nextEl: '#sliderNext',
    },
    breakpoints: {
      0:    { slidesPerView: 1, spaceBetween: 25 },
      768:  { slidesPerView: 1, spaceBetween: 25 },
      992:  { slidesPerView: 2, spaceBetween: 25 },
      1200: { slidesPerView: 3, spaceBetween: 25 },
    },
  });
}