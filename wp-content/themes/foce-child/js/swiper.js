var swiper = new Swiper(".mySwiper", {
    spaceBetween: 60,
    speed: 1750,
    autoplay: {
      delay: 400,
    },
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 3,
    coverflowEffect: {
      rotate: 50,
      depth: 100,
      slideShadows: false,
    },
  });
