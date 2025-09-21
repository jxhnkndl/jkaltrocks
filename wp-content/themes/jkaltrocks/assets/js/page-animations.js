const headerEl = document.querySelector('.header');

gsap.to(headerEl, {
    backgroundColor: "#009a61",
    scrollTrigger: {
        trigger: ".hero-section",
        start: "top top",
        end: "center-=200 top",
        scrub: true,
    }
});