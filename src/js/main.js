const prevBtn = document.querySelector(".header__menu-left");
const nextBtn = document.querySelector(".header__menu-right");
const scrollerElem = document.querySelector(".header__top-nav");
const servicesSliderElem = document.querySelector(".services__slider");
const personsSliderElem = document.querySelector(".persons__slider");
const projectSliderElem = document.querySelector(".project__slider");
const answersAccardion = document.querySelector(".answers__accardion");

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
    }
  },
}

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
    }
  },
}

if (mql.matches) {
  servisesSlider = new Swiper(servicesSliderElem, servicesConfig);
  personsSlider = new Swiper(personsSliderElem,personsConfig);
  projectSlider = new Swiper(projectSliderElem,projectConfig);
}

function screenTest(e) {
  if (e.matches) {
    servisesSlider = new Swiper(servicesSliderElem, servicesConfig);
    personsSlider = new Swiper(personsSliderElem,personsConfig);
    projectSlider = new Swiper(projectSliderElem,projectConfig);
    
  } else {
    if (servisesSlider) {
      servisesSlider.destroy(true, true);
      personsSlider.destroy(true, true);
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
        enabled: false
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
})
