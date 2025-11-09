const initMobileMenu = (breakpoint = 992) => {
    let mobileMenu = null;
    let isInitialized = false;
    let resizeTimer;

    const createMobileMenu = () => {
        const leftMenu = document.getElementById('menu-header-menu-left');
        const rightMenu = document.getElementById('menu-header-menu-right');
        const header = document.querySelector('.header');

        if (!leftMenu || !rightMenu || !header) return;

        mobileMenu = document.createElement('div');
        mobileMenu.className = 'header__menu';

        const combinedMenu = document.createElement('ul');
        combinedMenu.className = 'menu__list';

        [...leftMenu.querySelectorAll('.menu__item'), ...rightMenu.querySelectorAll('.menu__item')]
            .forEach(item => combinedMenu.appendChild(item.cloneNode(true)));

        mobileMenu.appendChild(combinedMenu);
        header.appendChild(mobileMenu);

        mobileMenu.querySelectorAll('.menu__link').forEach(link => {
            link.addEventListener('click', closeMenu);
        });
        mobileMenu.addEventListener('click', e => {
            if (e.target === mobileMenu) closeMenu();
        });
    };

    const destroyMobileMenu = () => {
        if (mobileMenu) {
            mobileMenu.remove();
            mobileMenu = null;
        }
        document.querySelector('.burger-menu')?.classList.remove('active');
        document.body.classList.remove('lock');
    };

    const openMenu = () => {
        if (!mobileMenu) return;
        document.querySelector('.burger-menu')?.classList.add('active');
        mobileMenu.classList.add('active');
        document.body.classList.add('lock');
    };

    const closeMenu = () => {
        if (!mobileMenu) return;
        document.querySelector('.burger-menu')?.classList.remove('active');
        mobileMenu.classList.remove('active');
        document.body.classList.remove('lock');
    };

    const toggleMenu = () => {
        if (!mobileMenu) return;
        mobileMenu.classList.contains('active') ? closeMenu() : openMenu();
    };

    const handleResize = () => {
        const isMobile = window.innerWidth < breakpoint;
        if (isMobile && !isInitialized) {
            createMobileMenu();
            isInitialized = true;
        } else if (!isMobile && isInitialized) {
            destroyMobileMenu();
            isInitialized = false;
        }
    };

    const bindEvents = () => {
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(handleResize, 100);
        });

        document.addEventListener('click', e => {
            if (e.target.closest('.burger-menu')) {
                toggleMenu();
            }
        });

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape' && mobileMenu?.classList.contains('active')) {
                closeMenu();
            }
        });
    };

    // init
    handleResize();
    bindEvents();
};

const geographyButtonManager = () => {
    const button = document.querySelector(".geography__button");
    const map = document.querySelector(".geography__map");
    const content = document.querySelector(".geography__content");
    let resizeTimer;

    if (!button || !map || !content) return;

    const moveButton = () => {
        if (window.innerWidth < 768) {
            if (!map.contains(button)) {
                map.insertAdjacentElement("afterend", button);
            }
        } else {
            if (!content.contains(button)) {
                content.appendChild(button);
            }
        }
    };

    moveButton();

    window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(moveButton, 100);
    });
};

const collaborationButtonManager = () => {
    const button = document.querySelector(".collaboration__button");
    const lists = document.querySelector(".collaboration__lists");
    const header = document.querySelector(".collaboration__header");
    let resizeTimer;

    if (!button || !lists || !header) return;

    const moveButton = () => {
        if (window.innerWidth < 768) {
            if (!lists.contains(button)) {
                lists.insertAdjacentElement("afterend", button);
            }
        } else {
            if (!header.contains(button)) {
                header.appendChild(button);
            }
        }
    };

    moveButton();

    window.addEventListener("resize", () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(moveButton, 100);
    });
};

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    geographyButtonManager();
    collaborationButtonManager();
});
