"use strict";
const prevBtn = document.querySelector(".header__menu-left");
const nextBtn = document.querySelector(".header__menu-right");
const scrollerElem = document.querySelector(".header__top-nav");
const servicesSliderElem = document.querySelector(".services__slider");
const personsSliderElem = document.querySelector(".persons__slider");
const projectSliderElem = document.querySelector(".project__slider");
const answersAccardion = document.querySelector(".answers__accardion");

const btnsModals = document.querySelectorAll("[data-modal-target]");
const btnsClose = document.querySelectorAll(".modal__btn-close");
const header = document.querySelector(".header");
const footer = document.querySelector(".footer");
const focusWrapper = document.querySelector(".focus-wrapper");

const inputMaskElem = document.querySelectorAll('.modal__phone');

const im = new Inputmask("+7 (999) 999-99-99");

inputMaskElem.forEach(elem=>{
  im.mask(elem);
})

const modalOpenFoo = (event) => {
  const target = event.target;
  const bodyWidth = document.body.offsetWidth;
  const windowWidth = window.innerWidth;
  const padding = windowWidth - bodyWidth + "px";
  if (target.hasAttribute("data-modal-target")) {
    const id = target.dataset.modalTarget;
    const modal = document.getElementById(id);
    modal.classList.add("open");
    document.body.style.overflow = "hidden";
    document.body.style.paddingRight = padding;
    header.toggleAttribute("inert");
    focusWrapper.toggleAttribute("inert");
    footer.toggleAttribute("inert");
  }
};

const closeModalFoo = (event) => {
  const modal = event.target.closest(".modal");
  modal.classList.remove("open");
  document.body.style.overflow = null;
  document.body.style.paddingRight = null;
  header.toggleAttribute("inert");
  focusWrapper.toggleAttribute("inert");
  footer.toggleAttribute("inert");
};

btnsModals.forEach((elem) => {
  elem.addEventListener("click", modalOpenFoo);
});

btnsClose.forEach((elem) => {
  elem.addEventListener("click", closeModalFoo);
});

nextBtn.addEventListener("click", scrollToNextItem);
prevBtn.addEventListener("click", scrollToPrevItem);

const mql = window.matchMedia("(max-width: 1000px)");

function scrollToNextItem() {
  scrollerElem.scrollBy({ left: 130, top: 0, behavior: "smooth" });
}

function scrollToPrevItem() {
  scrollerElem.scrollBy({ left: -130, top: 0, behavior: "smooth" });
}

let servicesSlider;
let personsSlider;
let projectSlider;

const servicesConfig = {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  pagination: {
    el: ".services__pagination",
    bulletClass: "services__bullet",
    bulletActiveClass: "services__bullet-active",
    clickable: true,
  },
  breakpoints: {
    600: {
      slidesPerView: 2,
    },
    700: {
      slidesPerView: 3,
    },
  },
};

const personsConfig = {
  slidesPerView: 1,
  spaceBetween: 50,
  pagination: {
    el: ".persons__pagination",
    bulletClass: "persons__bullet",
    bulletActiveClass: "persons__bullet-active",
    clickable: true,
  },
  breakpoints: {
    600: {
      slidesPerView: 2,
    },
    700: {
      slidesPerView: 3,
    },
    800: {
      slidesPerView: 4,
    },
  },
};

const projectConfig = {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  pagination: {
    el: ".projects__pagination",
    bulletClass: "projects__bullet",
    bulletActiveClass: "projects__bullet-active",
    clickable: true,
  },
  breakpoints: {
    700: {
      slidesPerView: 2,
    },
  },
};

if (mql.matches) {
  servicesSlider = new Swiper(servicesSliderElem, servicesConfig);
  personsSlider = new Swiper(personsSliderElem, personsConfig);
  projectSlider = new Swiper(projectSliderElem, projectConfig);
}

function screenTest(e) {
  if (e.matches) {
    servicesSlider = new Swiper(servicesSliderElem, servicesConfig);
    personsSlider = new Swiper(personsSliderElem, personsConfig);
    projectSlider = new Swiper(projectSliderElem, projectConfig);
  } else {
    if (servicesSlider) {
      servicesSlider.destroy(true, true); 
    }

    if (personsSlider) {
      personsSlider.destroy(true, true);
    }

    if (projectSlider) {
      projectSlider.destroy(true, true);
    }
  }
}

mql.addEventListener("change", screenTest);

new Swiper(".advantages__slider", {
  loop: true,
  slidesPerView: 1,
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
  breakpoints: {
    600: {
      slidesPerView: 2,
      navigation: {
        enabled: false,
      },
    },
    900: {
      slidesPerView: 3,
    },
  },
});

new Swiper(".documents__slider", {
  loop: true,
  slidesPerView: 1,
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
  breakpoints: {
    600: {
      slidesPerView: 2,
    },
    900: {
      slidesPerView: 3,
    },
  },
});

Fancybox.bind('[data-fancybox="document-gallary"]', {
  closeButton: true,
  contentClick: "iterateZoom",
  Images: {
    Panzoom: {
      maxScale: 2,
    },
  },
});

answersAccardion.addEventListener("click", (event) => {
  const target = event.target;
  if (target.closest(".answers__accardion-btn")) {
    const btn = target.closest(".answers__accardion-btn");
    const dropElem = btn.nextElementSibling;
    btn.classList.toggle("active");
    dropElem.classList.toggle("active");
  }
});

new Swiper(".reviews__slider", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  pagination: {
    el: ".reviews__pagination",
    bulletClass: "reviews__bullet",
    bulletActiveClass: "reviews__bullet-active",
    clickable: true,
  },
  breakpoints: {
    600: {
      slidesPerView: 2,
    },
    900: {
      slidesPerView: 3,
    },
  },
});

let fucks = document.querySelectorAll("iframe");
let fucksWraper = document.querySelectorAll(".mrg-wrapper");

if (fucks)
  fucks.forEach((elem) => {
    if (elem.classList.contains("lazyload")) elem.remove();
  });

fucksWraper.forEach((elem) => elem.remove());

setInterval(() => {
  fucks = document.querySelectorAll("iframe");
  fucksWraper = document.querySelectorAll(".fucksWraper");

  if (fucks)
    fucks.forEach((elem) => {
      if (!elem.classList.contains("lazyload")) {
        elem.remove();
      }
    });

  fucksWraper.forEach((elem) => elem.remove());
}, 1000);
