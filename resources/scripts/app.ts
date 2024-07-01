import alpine from 'alpinejs';
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

Object.assign(window, {Alpine: alpine}).Alpine.start();

import.meta.webpackHot?.accept(console.error);

addEventListener('DOMContentLoaded', () => {
    Swiper.use([Navigation, Pagination]);

    const projectenSwiper = document.querySelector('.projecten-swiper') as HTMLElement;
    if (projectenSwiper) {
        new Swiper(projectenSwiper, {
            slidesPerView: 1,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1024: {
                    slidesPerView: 2,
                },
            },
        });
    }
});
