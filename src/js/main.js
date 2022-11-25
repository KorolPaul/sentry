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
        controls: false,
        loop: false,
        responsive: {
            744: {
                controls: true,
            }
        }
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
        controls: false,
        loop: false,
        responsive: {
            744: {
                controls: true,
            }
        }
    });
})

const stepsSlider = document.querySelectorAll('.steps_slider');
stepsSlider.forEach(el => {
    tns({
        container: el,
        items: 1.1,
        fixedWidth: 230,
        gutter: 30,
        mouseDrag: true,
        autoplay: false,
        nav: true,
        navPosition: 'bottom',
        controls: false,
        loop: false,
        responsive: {
            744: {
                items: 3.5,
                fixedWidth: 350,
                controls: true,
            }
        }
    });
});

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
});

const appScreensSlider = document.querySelectorAll('.app_screens-wrapper');
appScreensSlider.forEach(el => {
    tns({
        container: el,
        items: 2,
        gutter: 30,
        mouseDrag: true,
        autoplay: false,
        nav: true,
        gap: 0,
        center: true,
        navPosition: 'bottom',
        controls: false,
        loop: false,
        responsive: {
            744: {
                disable: true
            }
        }
    });
});

const operationsSlider = document.querySelectorAll('.operations_column');
operationsSlider.forEach(el => {
    tns({
        container: el,
        items: 1.5,
        gutter: 20,
        mouseDrag: true,
        autoplay: false,
        nav: true,
        gap: 0,
        center: true,
        navPosition: 'bottom',
        controls: false,
        loop: false,
        responsive: {
            744: {
                disable: true
            }
        }
    });
});


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



if (Cookies) {
    const hasCookies = Cookies.get('CookieNotificationCookie');

    const cookiesBanner = document.querySelector('.cookies');
    const cookiesAcceptButton = document.querySelector('.cookies_button');

    if (cookiesAcceptButton) {
        cookiesAcceptButton.addEventListener('click', function (e) {
            e.preventDefault();

            cookiesBanner.style.display = 'none';
            Cookies.set('CookieNotificationCookie', 'true', { expires: 365 });
        });
    }

    if (cookiesBanner && !hasCookies) {
        cookiesBanner.style.display = 'flex';
    }
}


/* animation */
const animatedElements = document.querySelectorAll('.js-animation');
animateElements();
function animateElements() {
    animatedElements.forEach(el => {
        const observerCallback = function (e) {
            const {target, intersectionRatio} = e[0];
            if (intersectionRatio > 0.6) {
                target.classList.add('animated');

                setTimeout(() => {
                    target.classList.remove('js-animation');
                }, 2000);
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

// odometer
const odometerBlocks = document.querySelectorAll('.odometer');
odometerBlocks.forEach(el => {
    let od = new Odometer({
        el: el,
        value: 0,
        format: '',
        theme: 'default',
        duration: 8000, 
    });
    
    const observer = new IntersectionObserver((e) => {
        if (e[0].intersectionRatio > 0.8) {
            od.update(parseInt(el.dataset.value));
        }
    }, {
        rootMargin: '0px 0px 0px 0px',
        threshold: thresholdSteps,
        root: null
    });
    observer.observe(el);
});

// clients Categories filter
const clientsCategoriesLinks = document.querySelectorAll('.clients_category');
const clientsCategoriesCards = document.querySelectorAll('.client-card');
clientsCategoriesLinks.forEach(el => el.addEventListener('click', function(e) {
    e.preventDefault();
    const category = e.target.dataset.category;

    clientsCategoriesLinks.forEach(link => link.classList.add('inactive'));
    e.target.classList.remove('inactive');

    clientsCategoriesCards.forEach(card => {
        if (card.dataset.category === category) {
            card.classList.remove('hidden');
        } else {
            card.classList.add('hidden');
        }
    });
}));
