import alpine from 'alpinejs';
import Swiper from 'swiper';
import { Navigation, Pagination, Thumbs } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

Object.assign(window, {Alpine: alpine}).Alpine.start();

import.meta.webpackHot?.accept(console.error);

addEventListener('DOMContentLoaded', () => {
    Swiper.use([Navigation, Pagination, Thumbs]);

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

    
    let projectDetailThumbsSwiper: Swiper;
    if (document.querySelector('.project-detail-slider-thumbs')) {
        projectDetailThumbsSwiper = new Swiper(".project-detail-slider-thumbs", {
            spaceBetween: 10,
            slidesPerView: 5,
            freeMode: true,
            watchSlidesProgress: true,
        });
    }
    if (document.querySelector('.project-detail-slider')) {
        new Swiper(".project-detail-slider", {
            spaceBetween: 10,
            slidesPerView: 1,
            thumbs: {
                swiper: projectDetailThumbsSwiper,
            },
        });
    }

});
