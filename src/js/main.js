"use strict";
const prevBtn = document.querySelector(".header__menu-left");
const nextBtn = document.querySelector(".header__menu-right");
const scrollerElem = document.querySelector(".header__top-nav");

const servicesSliderElem = document.querySelector(".services__slider");
const personsSliderElem = document.querySelector(".persons__slider");
const projectSliderElem = document.querySelector(".project__slider");
const sliderReviewsPlatforms = document.getElementById("slider-reviews");

const answersAccardion = document.querySelector(".answers__accardion");

const footerBody = document.querySelector(".footer__body");
const footerTopBtn = document.querySelector(".footer__top-btn");

const headerBurger = document.querySelector(".header__burger");
const headerMenuMobile = document.querySelector(".header__menu-mobile");
const dropNav = document.querySelector(".drop-nav");
const lists = document.querySelectorAll(".drop-nav ul");

const btnsModals = document.querySelectorAll("[data-modal-target]");
const btnsClose = document.querySelectorAll(".modal__btn-close");
const header = document.querySelector(".header");
const footer = document.querySelector(".footer");
const focusWrapper = document.querySelector(".focus-wrapper");

const inputMaskElem = document.querySelectorAll(".modal__phone");

const im = new Inputmask("+7 (999) 999-99-99");

inputMaskElem.forEach((elem) => {
  im.mask(elem);
});

new SimpleBar(dropNav, {
  autoHide: false,
});

const resObs = new ResizeObserver((entries) => {
  // for (const entry of entries) {

  // }

  let height = 0;
  lists.forEach((ul) => {
    if (height < ul.clientHeight) height = ul.clientHeight;
  });
  if (height > 0)
    dropNav.style.setProperty("--drop-height", height + 30 + "px");
  else dropNav.style.removeProperty("--drop-height");
});

lists.forEach((ul) => {
  resObs.observe(ul);
});

const openDropMenuFoo = () => {
  if (dropNav.classList.contains("open")) {
    headerBurger.classList.remove("close");
    headerMenuMobile.classList.remove("close");
    document.body.style.overflow = null;
    dropNav.classList.remove("open");
    document.body.style.removeProperty("--padding-desctop");

    focusWrapper.removeAttribute("inert");
    footer.removeAttribute("inert");
  } else {
    headerBurger.classList.add("close");
    headerMenuMobile.classList.add("close");
    const bodyWidth = document.body.offsetWidth;
    const windowWidth = window.innerWidth;
    const padding = windowWidth - bodyWidth + "px";
    document.body.style.overflow = "hidden";
    dropNav.classList.add("open");
    document.body.style.setProperty("--padding-desctop", padding);

    focusWrapper.toggleAttribute("inert");
    footer.toggleAttribute("inert");
  }
};

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    headerBurger.classList.remove("close");
    headerMenuMobile.classList.remove("close");
    document.body.style.overflow = null;
    dropNav.classList.remove("open");
    document.body.style.removeProperty("--padding-desctop");

    focusWrapper.removeAttribute("inert");
    footer.removeAttribute("inert");
  }
});

headerBurger.addEventListener("click", openDropMenuFoo);
headerMenuMobile.addEventListener("click", openDropMenuFoo);

dropNav.addEventListener("click", (event) => {
  const target = event.target;
  if (target.classList.contains("menu-item-btn")) {
    console.log(target.parentNode);
  }
});

if (footerBody.children[0].clientHeight > 300) {
  footerTopBtn.classList.add("show");
}

footerTopBtn.addEventListener("click", () => {
  if (footerTopBtn.classList.contains("open")) {
    footerBody.style.height = null;
    footerTopBtn.classList.remove("open");
    footerTopBtn.textContent = "Подробнее";
  } else {
    footerBody.style.height = footerBody.children[0].clientHeight + "px";
    footerTopBtn.classList.add("open");
    footerTopBtn.textContent = "Скрыть";
  }
});

window.addEventListener("resize", () => {
  if (footerTopBtn.classList.contains("open")) {
    footerBody.style.height = footerBody.children[0].clientHeight + "px";
  }
});

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

new Swiper("#documents-slider", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: "#documents-next",
    prevEl: "#documents-prev",
  },
  pagination: {
    el: "#documents-pagination",
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

if (sliderReviewsPlatforms) {
  new Swiper("#slider-reviews", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
      nextEl: "#reviews-next",
      prevEl: "#reviews-prev",
    },
    pagination: {
      el: "#reviews-pagination",
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
}

Fancybox.bind("[data-fancybox]", {
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

const frame = document.getElementById("quiz_iframe");
if (frame) {
  const frameWindow = frame.contentWindow;
  frame.addEventListener("load", () => {
    frame.height = frameWindow.document.body.scrollHeight + "px";

    const resizeObserver = new frameWindow.ResizeObserver(() => {
      frameWindow.top.postMessage(JSON.stringify({ narspiText: "Hello" }), "*");
    });

    resizeObserver.observe(frameWindow.document.body);
  });

  window.addEventListener(
    "message",
    function (event) {
      if (typeof event.data === "string") {
        try {
          const data = JSON.parse(event.data);
          console.log("Parsed message data", data);
          if (data?.narspiText === "Hello") {
            frame.height = frameWindow.document.body.scrollHeight + "px";
          }
        } catch (error) {
          console.log("Error parsing message data:", error);
        }
      }
    },
    false
  );
}

let fucks = document.querySelectorAll("iframe");
let fucksWraper = document.querySelectorAll(".mrg-wrapper");

fucks.forEach((elem) => {
  if (!elem.classList.contains("iframe-allowed")) {
    elem.remove();
  }
});

fucksWraper.forEach((elem) => elem.remove());

setInterval(() => {
  fucks = document.querySelectorAll("iframe");
  fucksWraper = document.querySelectorAll(".fucksWraper");

  fucks.forEach((elem) => {
    if (!elem.classList.contains("iframe-allowed")) {
      elem.remove();
    }
  });

  fucksWraper.forEach((elem) => elem.remove());
}, 1000);
