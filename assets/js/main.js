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

    window.addEventListener('resize', () => {
        if (window.innerWidth > 992 && burgerMenu.classList.contains('active')) {
            closeMenu();
        }
    });

    return { closeMenu, openMenu, toggleMenu };
};

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

    const toggleButton = document.createElement('button');
    toggleButton.className = 'menu__toggle-invisible';
    toggleButton.setAttribute('type', 'button');
    toggleButton.setAttribute('aria-label', 'Відкрити підменю');
    servicesLink.appendChild(toggleButton);

    servicesItem.addEventListener('click', (e) => {
        if (window.innerWidth < 992) {
            e.stopPropagation();
        }
    });

    toggleButton.addEventListener('click', (e) => {
        if (window.innerWidth < 992) {
            e.preventDefault();
            toggleMegaMenu();
        }
    });

    const megaMenuLinks = megaMenu.querySelectorAll('.mega-menu__list a');
    megaMenuLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 992) {
                closeMegaMenu();

                if (window.mobileMenu) {
                    window.mobileMenu.closeMenu();
                }
            }
        });
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 992) {
            closeMegaMenu();
        }
    });

    return { closeMegaMenu, openMegaMenu, toggleMegaMenu };
};

const initAnimations = () => {
    const sections = document.querySelectorAll(".section-animate");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("in-view");
            }
        });
    }, {
        threshold: 0.15
    });

    sections.forEach(section => observer.observe(section));
};

Fancybox.bind("[data-fancybox]", {});

document.addEventListener('DOMContentLoaded', () => {
    initSwiper();
    initMobileMenu();
    initMobileMegaMenu();
    alignMegaMenuHandler();
    initAnimations();
});