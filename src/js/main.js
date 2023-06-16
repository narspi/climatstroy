const answersAccardion = document.querySelector('.answers__accardion');

new Swiper(".advantages__slider", {
  loop: true,
  slidesPerView: 3,
  pagination: {
    el: ".advantages__pagination",
    bulletClass: "advantages__bullet",
    bulletActiveClass: "advantages__bullet-active",
    clickable: true,
  },
  navigation: {
    nextEl: ".advantages__next",
    prevEl: ".advantages__prev",
  },
});

new Swiper(".documents__slider", {
  loop: true,
  slidesPerView: 3,
  spaceBetween: 30,
  navigation: {
    nextEl: ".documents__next",
    prevEl: ".documents__prev",
  },
  pagination: {
    el: ".documents__pagination",
    bulletClass: "documents__bullet",
    bulletActiveClass: "documents__bullet-active",
    clickable: true,
  },
});

Fancybox.bind("[data-fancybox]", {
  closeButton: true,
  contentClick: "iterateZoom",
  Images: {
    Panzoom: {
      maxScale: 2,
    },
  },
});

answersAccardion.addEventListener('click',event=>{
  const target = event.target;
  if (target.closest('.answers__accardion-btn')) {
    const btn = target.closest('.answers__accardion-btn');
    const dropElem = btn.nextElementSibling;
    btn.classList.toggle('active');
    dropElem.classList.toggle('active');
  }
});

new Swiper('.reviews__slider',{
  loop: true,
  slidesPerView: 3,
  spaceBetween: 20,
  pagination: {
    el: ".reviews__pagination",
    bulletClass: "reviews__bullet",
    bulletActiveClass: "reviews__bullet-active",
    clickable: true,
  },
})