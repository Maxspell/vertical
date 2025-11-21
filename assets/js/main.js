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

const alignMegaMenuHandler = () => {
    const servicesMenuItem = document.querySelector('.menu__item--services');
    const megaMenu = document.querySelector('.mega-menu--services');
    const headerInner = document.querySelector('.header__inner');

    if (servicesMenuItem && megaMenu && headerInner) {
        function alignMegaMenu() {
            if (window.innerWidth > 992) {
                const headerInnerRect = headerInner.getBoundingClientRect();
                const menuItemRect = servicesMenuItem.getBoundingClientRect();

                const offset = menuItemRect.left - headerInnerRect.left;

                megaMenu.style.left = `-${offset}px`;
                megaMenu.style.width = `${headerInnerRect.width}px`;
            } else {
                megaMenu.style.left = '';
                megaMenu.style.width = '';
            }
        }

        alignMegaMenu();

        window.addEventListener('resize', alignMegaMenu);

        return alignMegaMenu;
    }

    return null;
};

const initMobileMenu = () => {
    const burgerMenu = document.querySelector('.burger-menu');
    const headerNav = document.querySelector('.header__nav');
    const body = document.body;

    if (!burgerMenu || !headerNav) return null;

    const closeMenu = () => {
        burgerMenu.classList.remove('active');
        headerNav.classList.remove('active');
        body.classList.remove('lock');
    };

    const openMenu = () => {
        burgerMenu.classList.add('active');
        headerNav.classList.add('active');
        body.classList.add('lock');
    };

    const toggleMenu = () => {
        if (burgerMenu.classList.contains('active')) {
            closeMenu();
        } else {
            openMenu();
        }
    };

    burgerMenu.addEventListener('click', toggleMenu);

    // Закрытие при изменении размера окна
    window.addEventListener('resize', () => {
        if (window.innerWidth > 992 && burgerMenu.classList.contains('active')) {
            closeMenu();
        }
    });

    return { closeMenu, openMenu, toggleMenu };
};

// Инициализация мега-меню для мобильных
const initMobileMegaMenu = () => {
    const servicesItem = document.querySelector('.menu__item--services');
    const servicesLink = servicesItem?.querySelector('.menu__link');
    const megaMenu = document.querySelector('.mega-menu--services');

    if (!servicesLink || !megaMenu) return null;

    const closeMegaMenu = () => {
        servicesLink.classList.remove('active');
        megaMenu.classList.remove('active');
    };

    const openMegaMenu = () => {
        servicesLink.classList.add('active');
        megaMenu.classList.add('active');
    };

    const toggleMegaMenu = () => {
        servicesLink.classList.toggle('active');
        megaMenu.classList.toggle('active');
    };

    // Создаем кнопку
    const toggleButton = document.createElement('button');
    toggleButton.className = 'menu__toggle-invisible';
    toggleButton.setAttribute('type', 'button');
    toggleButton.setAttribute('aria-label', 'Відкрити підменю');
    servicesLink.appendChild(toggleButton);

    // Останавливаем всплытие для ВСЕГО servicesItem на мобильных
    servicesItem.addEventListener('click', (e) => {
        if (window.innerWidth < 992) {
            e.stopPropagation();
        }
    });

    // ПРОСТО переключаем класс при клике на кнопку
    toggleButton.addEventListener('click', (e) => {
        if (window.innerWidth < 992) {
            e.preventDefault();
            toggleMegaMenu();
        }
    });

    // Закрытие при клике на ссылки внутри
    const megaMenuLinks = megaMenu.querySelectorAll('.mega-menu__list a');
    megaMenuLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 992) {
                closeMegaMenu();
                // Закрываем и главное меню
                if (window.mobileMenu) {
                    window.mobileMenu.closeMenu();
                }
            }
        });
    });

    // Сброс при resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 992) {
            closeMegaMenu();
        }
    });

    return { closeMegaMenu, openMegaMenu, toggleMegaMenu };
};

Fancybox.bind("[data-fancybox]", {});

document.addEventListener('DOMContentLoaded', () => {
    initSwiper();
    initMobileMenu();
    initMobileMegaMenu();
    alignMegaMenuHandler();
});

// document.addEventListener('DOMContentLoaded', () => {
//     const burgerMenu = document.querySelector('.burger-menu');
//     const headerNav = document.querySelector('.header__nav');
//     const body = document.body;
//     const menuLinks = document.querySelectorAll('.header__nav .menu__link');

//     // Функция для закрытия меню
//     const closeMenu = () => {
//         burgerMenu.classList.remove('active');
//         headerNav.classList.remove('active');
//         body.classList.remove('lock');
//     };

//     // Функция для открытия меню
//     const openMenu = () => {
//         burgerMenu.classList.add('active');
//         headerNav.classList.add('active');
//         body.classList.add('lock');
//     };

//     // Функция для переключения меню
//     const toggleMenu = () => {
//         if (burgerMenu.classList.contains('active')) {
//             closeMenu();
//         } else {
//             openMenu();
//         }
//     };

//     // Клик по бургер-меню
//     burgerMenu?.addEventListener('click', toggleMenu);

//     // Клик по пунктам меню
//     menuLinks.forEach(link => {
//         link.addEventListener('click', closeMenu);
//     });

//     // Закрытие меню при клике вне его (опционально)
//     document.addEventListener('click', (e) => {
//         const isClickInsideMenu = headerNav?.contains(e.target);
//         const isClickOnBurger = burgerMenu?.contains(e.target);

//         if (!isClickInsideMenu && !isClickOnBurger && burgerMenu?.classList.contains('active')) {
//             closeMenu();
//         }
//     });

//     // Закрытие меню при изменении размера окна (если ширина > 992px)
//     window.addEventListener('resize', () => {
//         if (window.innerWidth > 992 && burgerMenu?.classList.contains('active')) {
//             closeMenu();
//         }
//     });
// });

// document.addEventListener('DOMContentLoaded', () => {
//     const servicesItem = document.querySelector('.menu__item--services');
//     const servicesLink = servicesItem?.querySelector('.menu__link');
//     const megaMenu = document.querySelector('.mega-menu--services');

//     if (servicesLink && megaMenu) {
//         // Создаем невидимую кнопку поверх ::after
//         const toggleButton = document.createElement('button');
//         toggleButton.className = 'menu__toggle-invisible';
//         toggleButton.setAttribute('type', 'button');
//         toggleButton.setAttribute('aria-label', 'Відкрити підменю');
//         servicesItem.appendChild(toggleButton);

//         toggleButton.addEventListener('click', (e) => {
//             // Работает только если ширина меньше 992px
//             if (window.innerWidth < 992) {
//                 e.preventDefault();
//                 e.stopPropagation();

//                 servicesLink.classList.toggle('active');
//                 megaMenu.classList.toggle('active');
//             }
//         });

//         // Закрытие меню при клике вне его (только для мобильных)
//         document.addEventListener('click', (e) => {
//             if (window.innerWidth < 992) {
//                 const isClickInside = e.target.closest('.menu__item--services');

//                 if (!isClickInside && megaMenu.classList.contains('active')) {
//                     servicesLink.classList.remove('active');
//                     megaMenu.classList.remove('active');
//                 }
//             }
//         });

//         // Сброс при изменении размера окна
//         window.addEventListener('resize', () => {
//             if (window.innerWidth >= 992) {
//                 servicesLink.classList.remove('active');
//                 megaMenu.classList.remove('active');
//             }
//         });
//     }
// });