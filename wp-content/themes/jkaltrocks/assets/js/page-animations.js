const headerEl = document.querySelector('.header');
const headerLogoEl = document.querySelector('.logo');
const headerLink1 = document.querySelectorAll(
    '.desktop-nav-link:first-of-type'
);
const headerLink2 = document.querySelectorAll(
    '.desktop-nav-link-container:nth-of-type(2)'
);
const headerLink3 = document.querySelectorAll(
    '.desktop-nav-link-container:nth-of-type(3)'
);
const headerLink4 = document.querySelectorAll(
    '.desktop-nav-link-container:nth-of-type(4)'
);
const headerLink5 = document.querySelectorAll(
    '.desktop-nav-link-container:last-of-type'
);
const desktopNavLinksArr = document.querySelectorAll(
    '.desktop-nav-link-container'
);
const heroImgEl = document.querySelector('.hero-section-bg-image');
const heroOverlayEl = document.querySelector('.hero-section-gradient');
const heroStatement1 = document.querySelector(
    '.hero-content h1 span:first-of-type'
);
const heroStatement2 = document.querySelector(
    '.hero-content h1 span:nth-of-type(2)'
);
const heroStatement3 = document.querySelector(
    '.hero-content h1 span:last-of-type'
);
const heroSubtitleEl = document.querySelector('.hero-content h2');
const heroCtaEl = document.querySelector('.hero-content .cta-btn');

gsap.to(headerEl, {
    backgroundColor: "#009a61",
    scrollTrigger: {
        trigger: ".hero-section",
        start: "top top",
        end: "center-=200 top",
        scrub: true,
    }
});
