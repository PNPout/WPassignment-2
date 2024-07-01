// import Swiper JS
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

new Swiper('.js-swiper', {
  modules: [Navigation, Pagination],
  speed: 400,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swipe-next',
    prevEl: '.swipe-prev',
  },
});
