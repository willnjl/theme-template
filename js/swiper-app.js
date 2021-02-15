const swiper = new Swiper(".swiper-container", {
  // Optional parameters
  loop: true,

  breakpoints: {
    1200: {
      loopedSlides: 5,
    },
  },
});

const marquee = new Swiper(".swiper-marquee", {
  width: 500,
  loop: true,

  breakpoints: {
    1200: {
      loopedSlides: 10,
    },
  },
});
