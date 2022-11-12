const wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';
const thresholdSteps = [...Array(10).keys()].map(i => i / 10);
const isMobile = window.innerWidth <= 768
const isDesktop = window.innerWidth >= 1000

// sliders
const roadSlider = document.querySelectorAll('.road-carousel_slides');
roadSlider.forEach(el => {
    tns({
        container: el,
        items: 1,
        center: true,
        gutter: 16,
        mouseDrag: true,
        autoplay: false,
        nav: true,
        navPosition: 'bottom',
        controls: true,
        loop: false,
    });
})

const appSlider = document.querySelectorAll('.app_slider');
appSlider.forEach(el => {
    tns({
        container: el,
        items: 1,
        center: true,
        gutter: 16,
        mouseDrag: true,
        autoplay: false,
        nav: true,
        navPosition: 'bottom',
        controls: true,
        loop: false,
    });
})

const stepsSlider = document.querySelectorAll('.steps_slider');
stepsSlider.forEach(el => {
    tns({
        container: el,
        items: 3.5,
        fixedWidth: 350,
        gutter: 30,
        mouseDrag: true,
        autoplay: false,
        nav: true,
        navPosition: 'bottom',
        controls: true,
        loop: false,
    });
})
const transportationStatsSlider = document.querySelectorAll('.transportation-stats_cards');
transportationStatsSlider.forEach(el => {
    tns({
        container: el,
        items: 1.4,
        fixedWidth: 230,
        gutter: 20,
        mouseDrag: true,
        autoplay: false,
        nav: true,
        navPosition: 'bottom',
        controls: false,
        loop: false,
        responsive: {
            744: {
                disable: true
            }
        }
    });
})


// menu
const menuToggleElement = document.querySelector('.menu-toggle');
if (menuToggleElement) {
    menuToggleElement.addEventListener('click', () => document.body.classList.toggle('menu-opened'));
}


function closeAllOpened() {
    document.querySelectorAll('.opened').forEach(el => el.classList.remove('opened'));
    document.body.classList.remove('menu-opened');
    document.querySelectorAll('.popup-opened').forEach(el => el.classList.remove('popup-opened'));
    document.querySelectorAll('.js-form-popup').forEach(el => el.classList.remove('opened'));
    document.querySelectorAll('.filters_content').forEach(el => el.classList.remove('opened'));
}

// const fadeElement = document.querySelector('.fade');
// if (fadeElement) {
//     fadeElement.addEventListener('click', closeAllOpened);
// }

const menuLinkElements = document.querySelectorAll('.menu_link, .menu_close');
menuLinkElements.forEach(el => el.addEventListener('click', () => document.body.classList.remove('menu-opened')));


/* Popup */
const popupToggleElements = document.querySelectorAll('.js-popup-toggle');

function disableScroll(e) {
    const { target } = e
    let isInPopup = false;

    function findParentPopup(el) {
        if (!el.parentElement) {
            return
        }
        if (el.className.includes('popup_content')) {
            isInPopup = true
            return
        }

        findParentPopup(el.parentElement)
    }

    findParentPopup(target.parentElement)

    if (!isInPopup && !target.className.includes('contact-form')) {
        e.preventDefault();
    }
}

function openPopup(name) {
    const popup = document.querySelector(`.popup[data-popup="${name}"]`);
    if (popup) {
        popup.classList.add('opened');
        document.body.classList.add('popup-opened');
        window.addEventListener(wheelEvent, disableScroll, { passive: false });
    }
}
function closePopup(name) {
    document.querySelector('.popup.opened').classList.remove('opened');
    document.body.classList.remove('popup-opened');
    window.removeEventListener(wheelEvent, disableScroll, { passive: false });

}

popupToggleElements.forEach(el => el.addEventListener('click', (e) => {
    e.preventDefault();
    openPopup(el.dataset.popup);
}));

const popupCloseElements = document.querySelectorAll('.popup_close');
popupCloseElements.forEach(el => el.addEventListener('click', (e) => {
    e.preventDefault();
    closePopup();
}));

/* Tabs */
function initTabs() {
    const tabsContainers = document.querySelectorAll('.tabs');

    tabsContainers.forEach(tabContainer => {
        const tabsButtons = tabContainer.querySelectorAll('.tabs_button');
        const tabsBlocks = tabContainer.querySelectorAll('.tabs_content');

        if (tabsButtons.length) {
            function switchTab(e) {
                e.preventDefault();

                const index = e.target.dataset.tab;
                tabsButtons.forEach(el => el.classList.remove('active'));
                tabsBlocks.forEach(el => el.classList.remove('active'));

                tabsButtons[index - 1].classList.add('active');
                tabsBlocks[index - 1].classList.add('active');
            }

            tabsButtons.forEach(el => el.addEventListener('click', switchTab));
        }
    });
}

initTabs()



/* cookies */
// if (Cookies) {
//     const hasCookies = Cookies.get('CookieNotificationCookie');
// 
//     const cookiesBanner = document.querySelector('.cookies');
//     const cookiesAcceptButton = document.querySelector('.cookies_button');
// 
//     if (cookiesAcceptButton) {
//         cookiesAcceptButton.addEventListener('click', function (e) {
//             e.preventDefault();
// 
//             cookiesBanner.style.display = 'none';
//             Cookies.set('CookieNotificationCookie', 'true', { expires: 365 });
//         });
//     }
// 
//     if (cookiesBanner && !hasCookies) {
//         cookiesBanner.style.display = 'block';
//     }
// }


/* animation */
const animatedElements = document.querySelectorAll('.none');
animateElements();
function animateElements() {
    animatedElements.forEach(el => {
        const observerCallback = function (e) {
            const {target, intersectionRatio} = e[0];
            if (intersectionRatio > 0.6) {
                target.classList.add('animated');
            }
        };

        const observer = new IntersectionObserver(observerCallback, {
            rootMargin: '0px 0px 0px 0px',
            threshold: thresholdSteps,
            root: null
        });
        observer.observe(el);
    });
}

/* faq accordion */
const faqElements = document.querySelectorAll('.faq_header');
faqElements.forEach(el => {

    el.addEventListener('click', (e) => {
        faqElements.forEach(el => {
            if (el !== e.target) {
                el.parentElement.classList.remove('opened')
            }
        });
        e.currentTarget.parentElement.classList.toggle('opened');
    });
});

/* themes buttons */
const themesButtons = document.querySelectorAll('.themes_button');
themesButtons.forEach(el => {

    el.addEventListener('click', (e) => {
        themesButtons.forEach(el => {
            if (el !== e.target) {
                el.classList.remove('active')
            }
        });
        e.currentTarget.classList.add('active');

        const tab = e.currentTarget.dataset.tab || 1;

        document.querySelectorAll('.themes_image').forEach(el => {
            if (el !== e.target) {
                el.classList.remove('active')
            }
        });
        document.querySelector(`.themes_image[data-tab="${tab}"]`).classList.add('active');
    });
});

/* custom select input */
if ('NiceSelect' in window) {
    NiceSelect.bind(document.querySelector('select'));
}

/* steps accordion */
const stepTitleElements = document.querySelectorAll('.step_title');
stepTitleElements.forEach(el => {

    el.addEventListener('click', (e) => {
        e.preventDefault();

        e.currentTarget.classList.toggle('opened');
    });
});
