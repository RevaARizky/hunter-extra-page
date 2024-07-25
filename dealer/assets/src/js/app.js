import Swiper from "swiper"
import {Scrollbar, Pagination, Navigation} from 'swiper/modules'
// import "swiper/modules/scrollbar.min.mjs"
// (() => {
//     document.addEventListener("DOMContentLoaded", () => {
//         document.querySelectorAll('.play-button').forEach(el => {
//             el.addEventListener('click', function (e) {
//                 document.querySelector(`video[data-id="${this.dataset.for}"]`).play()
//                 this.classList.add('d-none')
//             })
//         })
//         document.querySelectorAll('video').forEach(el => {
//             el.addEventListener('play', function (e) {
//                 document.querySelector(`.play-button[data-for="${this.dataset.id}"]`).classList.add('d-none')
//             })
//             el.addEventListener('pause', function (e) {
//                 document.querySelector(`.play-button[data-for="${this.dataset.id}"]`).classList.remove('d-none')
//             })
//         })
//     })
// })()


// (() => {

    // document.querySelectorAll('.swiper').forEach(el => {
    //     new Swiper(el, {
    //         slidesPerView: el.dataset.slidesPerView ? el.dataset.slidesPerView : 1,
    //         pagination: el.querySelector('.custom-pagination')
    //     })
    // })

    new Swiper(document.querySelector('.slider-introduction'), {
        slidesPerView: 1,
        modules: [Navigation, Pagination],
        navigation: {
            nextEl: '.slider-introduction .swiper-button-next',
            prevEl: '.slider-introduction .swiper-button-prev'
        },
        pagination: {
            enabled: true,
            el: '.slider-introduction .swiper-pagination'
        }
    })
    new Swiper(document.querySelector('.bike-gallery'), {
        slidesPerView: 1,
        modules: [Scrollbar],
        scrollbar: {
            draggable: true,
            el: '#bike-showcase .swiper-scrollbar'
        },
        spaceBetween: 0,
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 15
            }
        }
    })

    document.querySelectorAll('#slider-detail .swiper').forEach(el => {
        new Swiper(el, {
            slidesPerView: 1,
            modules: [Pagination, Navigation],
            navigation: {
                nextEl: el.querySelector('.swiper-button-next'),
                prevEl: el.querySelector('.swiper-button-prev')
            },
            pagination: {
                el: el.querySelector('.swiper-pagination'),
                enabled: true
            }
        })
    })

    new Swiper(document.querySelector('#community .swiper'), {
        slidesPerView: 1,
        spaceBetween: 0,
        modules: [Scrollbar],
        scrollbar: {
            draggable: true,
            el: '#community .swiper-scrollbar'
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        }
    })

    document.addEventListener('DOMContentLoaded', () => {
        const resizeHandler = () => {
            document.documentElement.style.setProperty("--nav-height", `${document.querySelector('nav').clientHeight}px`);
        }
    
        window.addEventListener('resize', resizeHandler)
        resizeHandler()
    })


// })()