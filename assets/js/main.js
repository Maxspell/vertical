const initSwiper = () => {
    if (typeof Swiper !== 'undefined') {
        new Swiper('.reviews__slider', {
            slidesPerView: 1,
            spaceBetween: 16,
            grabCursor: true,
            loop: true,
            navigation: {
                nextEl: '.reviews .swiper-button--next',
                prevEl: '.reviews .swiper-button--prev',
            },
            pagination: {
                el: '.reviews__pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 32,
                },
            },
        });
    }
};

Fancybox.bind("[data-fancybox]", {
    // Your custom options
});

document.addEventListener('DOMContentLoaded', () => {
    initSwiper();
});
