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
                center: true,
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

const fadeElement = document.querySelector('.fade_back');
if (fadeElement) {
    fadeElement.addEventListener('click', closeAllOpened);
}

function openPopup(name) {
    const popup = document.querySelector(`.fade[data-popup="${name}"]`);
    if (popup) {
        popup.classList.add('opened');
        document.body.classList.add('popup-opened');
        //window.addEventListener(wheelEvent, disableScroll, { passive: false });
    }
}


const menuLinkElements = document.querySelectorAll('.menu_link, .menu_close');
menuLinkElements.forEach(el => el.addEventListener('click', () => document.body.classList.remove('menu-opened')));


/* Popup */
const popupToggleElements = document.querySelectorAll('.js-popup-link');
function disableScroll(e) {
    const {target} = e
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
    const popup = document.querySelector(`.fade[data-popup="${name}"]`);
    if (popup) {
        popup.classList.add('opened');
        document.body.classList.add('popup-opened');
        // window.addEventListener(wheelEvent, disableScroll, {passive: false});
    }
}

function closePopup(name) {
    document.querySelector('.popup.opened').classList.remove('opened');
    document.body.classList.remove('popup-opened');
    // window.removeEventListener(wheelEvent, disableScroll, { passive: false });

}

popupToggleElements.forEach(el => el.addEventListener('click', (e) => {
    e.preventDefault();
    openPopup(el.dataset.popup);
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

                document.querySelector(`.tabs_button[data-tab="${index}"]`).classList.add('active');
                document.querySelector(`.tabs_content[data-tab="${index}"]`).classList.add('active');
            }

            tabsButtons.forEach(el => el.addEventListener('click', switchTab));
        }
    });
}

initTabs()


const hasCookies = localStorage.getItem('accept');

const cookiesBanner = document.querySelector('.cookies');
const cookiesAcceptButton = document.querySelector('.cookies_button');

if (cookiesAcceptButton) {
    cookiesAcceptButton.addEventListener('click', function (e) {
        e.preventDefault();

        localStorage.setItem('accept', 'true');
    });
}

if (cookiesBanner && !hasCookies) {
    cookiesBanner.style.display = 'flex';
}


/* animation */
const animatedElements = document.querySelectorAll('.js-animation');
animateElements();

function animateElements() {
    animatedElements.forEach(el => {
        const ratio = el.classList.contains('tabs') || el.classList.contains('showcase_stats-item') ? 0.000001 : 0.6;
        const observerCallback = function (e) {
            const {target, intersectionRatio} = e[0];
            if (intersectionRatio > ratio) {
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
if ('NiceSelect' in window && document.querySelector('select')) {
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
        format: '(,ddd)',
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
const clientsMoreButton = document.querySelector('#clients_more');
let activeCategory = 'all';
let isAllClientCardsShown = false;

function showClientsCategory() {
    let i = 0;

    clientsCategoriesCards.forEach(card => {
        if (!isAllClientCardsShown && i >= 9) {
            return;
        }

        if (card.dataset.category === activeCategory) {
            card.classList.remove('hidden');
            i++;
        } else {
            card.classList.add('hidden');
        }
        if (activeCategory == 'all') {
            i++;
            card.classList.remove('hidden');
        }
    });

    clientsMoreButton.style.display = isAllClientCardsShown || i <= 9 ? 'none' : 'block';
}

clientsCategoriesLinks.forEach(el => el.addEventListener('click', function (e) {
    e.preventDefault();
    activeCategory = e.target.dataset.category;
    isAllClientCardsShown = false;

    clientsCategoriesLinks.forEach(link => link.classList.add('inactive'));
    e.target.classList.remove('inactive');
    showClientsCategory();
}));

if (clientsMoreButton) {
    clientsMoreButton.addEventListener('click', (e) => {
        e.preventDefault();
        isAllClientCardsShown = true;
        showClientsCategory();
    });
}

const vacancyMoreButtons = document.querySelectorAll('.vacancy_more');
vacancyMoreButtons.forEach(el => {
    el.addEventListener('click', (e) => {
        e.target.parentElement.classList.toggle('active')
    })
});

const vacancyBackButtons = document.querySelectorAll('.vacancy_back');
vacancyBackButtons.forEach(el => {
    el.addEventListener('click', (e) => {
        e.target.parentElement.parentElement.parentElement.classList.toggle('active')
    })
});
