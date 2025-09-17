const logoEl = document.querySelector('.logo');
const iconLightEl = document.querySelector('.icon-waveform-light');
const iconPrimaryEl = document.querySelector('.icon-waveform-primary');
const menuEl = document.querySelector('.menu-icon-container');
const menuBarTopEl = document.querySelector('.menu-bar-top');
const menuBarBottomEl = document.querySelector('.menu-bar-bottom');
const mobileNavEl = document.querySelector('.mobile-nav');
const mobileLinksArr = document.querySelectorAll('.mobile-nav-link-container');

menuEl.addEventListener('click', () => {
    const isOpen = JSON.parse(menuEl.getAttribute('aria-expanded'));
    menuEl.setAttribute('aria-expanded', !isOpen);
    isOpen ? closeNav() : openNav();
});

const openNav = () => {
    mobileNavEl.style.display = 'flex';
    iconPrimaryEl.style.display = 'block';
    iconLightEl.style.display = 'none';

    setTimeout(() => {
    }, 250)

    gsap.to(mobileNavEl, {
        duration: 0.25,
        opacity: 1
    });

    gsap.to(logoEl, {
        duration: 0.25,
        color: '#009a61'
    });

    gsap.to(iconPrimaryEl, {
        duration: 0.25,
        opacity: 1
    });

    gsap.to(menuBarTopEl, {
        duration: 0.25,
        backgroundColor: '#009a61',
        rotation: 45,
        height: 3,
        y: 9
    });

    gsap.to(menuBarBottomEl, {
        duration: 0.25,
        backgroundColor: '#009a61',
        rotation: -45,
        height: 3,
        width: 40,
        y: -1
    });

    let linkAnimationDelay = 0;
    let x;

    mobileLinksArr.forEach((link, i) => {
        if (i !== 0) {
            linkAnimationDelay += 0.25;
        }

        if (i % 2 !== 0) {
            x = '-100%';
        } else {
            x = '100%';
        }

        gsap.fromTo(
            link,
            {
                x: x,
                opacity: 0
            },
            {
                x: '0%',
                opacity: 1,
                duration: 0.75,
                delay: linkAnimationDelay,
                ease: 'power2.inOut'
            }
        )
    });
}

const closeNav = () => {
    gsap.to(menuBarTopEl, {
        duration: 0.25,
        backgroundColor: '#f5f5f5',
        rotation: 0,
        height: 2,
        y: 0
    });

    gsap.to(menuBarBottomEl, {
        duration: 0.25,
        backgroundColor: '#f5f5f5',
        rotation: 0,
        height: 2,
        width: 30,
        y: 0
    });

    gsap.to(logoEl, {
        duration: 0.25,
        color: '#f5f5f5'
    });

    gsap.to(iconPrimaryEl, {
        duration: 0.25,
        opacity: 0
    });

    gsap.to(mobileNavEl, {
        duration: 0.25,
        opacity: 0
    });

    iconLightEl.style.display = 'block';
    iconPrimaryEl.style.display = 'none';

    setTimeout(() => {
        mobileNavEl.style.display = 'none';
    }, 250);
}