const headerEl = document.querySelector('.header');
const headerLogoEl = document.querySelector('.logo');
const headerLink1 = document.querySelectorAll('.desktop-nav-link:first-of-type');
const headerLink2 = document.querySelectorAll('.desktop-nav-link-container:nth-of-type(2)');
const headerLink3 = document.querySelectorAll('.desktop-nav-link-container:nth-of-type(3)');
const headerLink4 = document.querySelectorAll('.desktop-nav-link-container:nth-of-type(4)');
const headerLink5 = document.querySelectorAll('.desktop-nav-link-container:last-of-type');
const desktopNavLinksArr = document.querySelectorAll('.desktop-nav-link-container');
const heroImgEl = document.querySelector('.hero-section-bg-image');
const heroOverlayEl = document.querySelector('.hero-section-gradient');
const heroStatement1 = document.querySelector('.hero-content h1 span:first-of-type');
const heroStatement2 = document.querySelector('.hero-content h1 span:nth-of-type(2)');
const heroStatement3 = document.querySelector('.hero-content h1 span:last-of-type');
const heroSubtitleEl = document.querySelector('.hero-content h2');
const heroCtaEl = document.querySelector('.hero-content .cta-btn');

gsap.set(heroCtaEl, { transition: 'none' });  

gsap.fromTo(
    heroImgEl,
    {
        opacity: 0
    },
    {
        duration: 0.5,
        opacity: 1,
        ease: 'power2.inOut'
    }
);

gsap.fromTo(
    headerEl,
    {
        opacity: 0
    },
    {
        delay: 0.5,
        duration: 0.25,
        opacity: 1,
        ease: 'power2.inOut'
    }        
);

gsap.fromTo(
    logoEl,
    {
        opacity: 0
    },
    {
        duration: 0.25,
        opacity: 1,
        ease: 'power2.inOut'
    }        
);

let linkAnimationDelay = 0.15;

desktopNavLinksArr.forEach((link, i) => {
    if (i !== 0) {
        linkAnimationDelay += 0.15;
    }

    gsap.fromTo(
        link,
        {
            opacity: 0
        },
        {
            opacity: 1,
            duration: 0.75,
            delay: linkAnimationDelay,
            ease: 'power2.inOut'
        }
    )
});

gsap.fromTo(
    heroSubtitleEl,
    {
        opacity: 0,
        y: -20
    },
    {
        delay: 0.75,
        duration: 0.25,
        opacity: 1,
        y: 0,
        ease: 'power2.inOut'
    }        
);

gsap.fromTo(
    heroStatement1,
    {
        opacity: 0,
        x: -20
    },
    {
        delay: 1,
        duration: 0.5,
        opacity: 1,
        x: 0,
        ease: 'power2.inOut'
    }        
);

gsap.fromTo(
    heroStatement2,
    {
        opacity: 0,
        x: 20
    },
    {
        delay: 1.25,
        duration: 0.5,
        opacity: 1,
        x: 0,
        ease: 'power2.inOut'
    }        
);

gsap.fromTo(
    heroStatement3,
    {
        opacity: 0,
        x: -20
    },
    {
        delay: 1.5,
        duration: 0.5,
        opacity: 1,
        x: 0,
        ease: 'power2.inOut'
    }        
);

gsap.fromTo(
    heroCtaEl,
    {
        opacity: 0,
        y: 30,
    },
    {
        delay: 1.75,
        duration: 0.5,
        opacity: 1,
        y: 0,
        ease: 'power2.inOut'
    }
);

gsap.to(headerEl, {
    backgroundColor: "#009a61",
    scrollTrigger: {
        trigger: ".hero-section",
        start: "top top",
        end: "center-=200 top",
        scrub: true,
    }
});