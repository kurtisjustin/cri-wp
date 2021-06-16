gsap.registerPlugin("ScrollTrigger");



function slideIn(target, axis, amount, duration) {
    if (axis === "x") {
        gsap.from(target, {
            x: amount,
            duration: duration,
        });
    } else if (axis === "y") {
        gsap.from(target, {
            y: amount,
            duration: duration,
        });
    }
}

const slideInFromLeft = document.querySelectorAll(".slide-in-from-left");

const animStart = "top 80%";
const animEnd = "bottom 10%";

gsap.set(".slide-in-from-left", {opacity: 0, x: -100})

ScrollTrigger.batch(".slide-in-from-left", {
    onEnter: batch => gsap.to(batch, {opacity: 1, x: 0}),
    // onLeave: batch => gsap.to(batch, {opacity: 0, x: -100}),
    onEnterBack: batch => gsap.to(batch, {opacity: 1, x: 0}),
    onLeaveBack: batch => gsap.to(batch, {opacity: 0, x: -100}),

    start: animStart,
    end: animEnd,
    // markers: true,
});

const slideInFromRight = document.querySelectorAll(".slide-in-from-right");

gsap.set(".slide-in-from-right", {opacity: 0, x: 100})

ScrollTrigger.batch(".slide-in-from-right", {
    onEnter: batch => gsap.to(batch, {opacity: 1, x: 0}),
    // onLeave: batch => gsap.to(batch, {opacity: 0, x: 100}),
    onEnterBack: batch => gsap.to(batch, {opacity: 1, x: 0}),
    onLeaveBack: batch => gsap.to(batch, {opacity: 0, x: 100}),

    start: animStart,
    end: animEnd,
    // markers: true,
});


const slideInFromBottom = document.querySelectorAll(".slide-in-from-bottom");

gsap.set(".slide-in-from-bottom", {opacity: 0, y: 100})
ScrollTrigger.batch(".slide-in-from-bottom", {
    onEnter: batch => gsap.to(batch, {opacity: 1, y: 0}),
    // onLeave: batch => gsap.to(batch, {opacity: 0, y: 100}),
    onEnterBack: batch => gsap.to(batch, {opacity: 1, y: 0}),
    onLeaveBack: batch => gsap.to(batch, {opacity: 0, y: 100}),

    start: animStart,
    end: animEnd,
    markers: true,
});



/**
 * Navigation background animation 
 */

let mediaMd = window.matchMedia("(min-width: 550px)")

function headerAnimation(media) {
  if(media.matches) {
    
    const headerTl = gsap.timeline({
        scrollTrigger: { 
          trigger: ".header",
          start: "top top",
          endTrigger: ".intro__content",
          end: "top top",
          pin: true,
          pinSpacing: false,
          scrub: true,
        }
    });
    headerTl.to(".intro", {
      y: -250,
    })
  }
}
headerAnimation(mediaMd);

gsap.set(".navigation__background", {y: -80})
const navBgTl = gsap.timeline({
  scrollTrigger: {
    trigger: "body",
    start: "+=20px",
    toggleActions: 'play complete restart reverse',
  }
})
navBgTl.to(".navigation__background", {y: 0, duration: .5})

// const homeTags = document.querySelectorAll(".homepage-tag");
const homeTagsTl = gsap.timeline({
  scrollTrigger: {
    trigger: ".homepage-tags",
    start: "top 70%",
    end: "bottom 10%",
    toggleActions: 'play complete restart null',
  }
});

homeTagsTl.from(".homepage-tag-1", {
  opacity: 0,
  y: 100,
  duration: .3,
})
.from(".homepage-tag-2", {
  opacity: 0,
  y: 100,
  duration: .6,
}, "-=0.3")
.from(".homepage-tag-3", {
  opacity: 0,
  y: 100,
  duration: .9,
}, "-=0.6")



// Testimonials Animations
let testiContainer = document.querySelector(".homepage__testimonials");

let testiInnerContainer = document.querySelector(".testimonials__container-inner");

if (testiContainer) {
  let homeTestiTl = gsap.timeline({
    scrollTrigger: {
      pin: true,
      scrub: true,
      markers: true,
      trigger: testiContainer,
      end: () => "+=" + (testiInnerContainer.scrollHeight - testiContainer.clientHeight) * 4,
    },
  });
  homeTestiTl.to(".testimonials__container-inner", {
    y: () => -(testiContainer.clientHeight / 2) - 150,
    duration: 10
  });

  let homeTestiContainer =  document.querySelector(".testimonials__container");
  gsap.to(homeTestiContainer, {
    height: homeTestiContainer.clientHeight / 2
  })
}



// Modal open
const modals = document.querySelectorAll("[data-modal]");

function showModal(e) {
  target = document.getElementById(e.target.getAttribute("data-modal"));
  target.classList.add("active");
  // document.querySelector("body").classList.add("body-no-scroll");
  const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
  const body = document.body;
  body.style.position = 'fixed';
  body.style.top = `-${scrollY}`
}
modals.forEach(modal => {
  modal.addEventListener("click", showModal);
})

// Modal Close
const closeModals = document.querySelectorAll(".bio__close");

function hideModal(e) {
  const body = document.body;
  const scrollY = body.style.top;
  body.style.position = '';
  body.style.top = '';
  window.scrollTo(0, parseInt(scrollY || '0') * -1);
  target = document.querySelectorAll(".team-member__bio");
  target.forEach(targ => {
    targ.classList.remove("active");
  })
  // document.querySelector("body").classList.add("body-no-scroll");
}
closeModals.forEach(modal => {
  modal.addEventListener("click", hideModal);
})

window.addEventListener('scroll', () => {
  document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
});


// Navigation Mobile setup
const navToggle = document.querySelector(".nav-burger");


function showNav(e) {
  target = document.querySelector(".navigation__menu");
  target.classList.add("active");
  const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
  const body = document.body;
  // navToggle.classList.remove("active")
  body.style.position = 'fixed';
  body.style.top = `-${scrollY}`
}
  navToggle.addEventListener("click", showNav);


// Modal Close
const closeNav = document.querySelector(".menu-close");

function hideNav(e) {
  const body = document.body;
  const scrollY = body.style.top;
  body.style.position = '';
  body.style.top = '';
  window.scrollTo(0, parseInt(scrollY || '0') * -1);
  target = document.querySelector(".navigation__menu");

  target.classList.remove("active");
}
closeNav.addEventListener("click", hideNav);


// Disable click on parent menu item
const subMenu = document.querySelector(".menu-item-has-children");
subMenu.addEventListener("click", (e) => {
  e.preventDefault();
})
const subMenuItems = document.querySelectorAll(".menu-item-has-children .sub-menu a");
subMenuItems.forEach((menuItem => {
  menuItem.addEventListener("click", (e) => {
    console.log(e.path);
    window.open(e.path[0].href, "_self");
  })
}))


/**
 * loading screen animation
 */
document.addEventListener("DOMContentLoaded", function() {
  const loadingScreen = document.querySelector(".loading");
  const loadingImage = document.querySelector('.loading__the-video')
  let loadingTl = gsap.timeline();
  const windowWidth = window.screen.width;

  if (windowWidth >= 800) {
    loadingTl.to(".loading__image", 2, {
      y: -25000,
      ease: SteppedEase.config(50),
    }, "+=1")
    .to(loadingScreen, {
        autoAlpha: 0,
      }, "-=.5")
      .from(".header__heading--home", {
        x: -30,
        opacity: 0,
        duration: .5
      }, "-=.2")
  } else {
    loadingTl.to(".loading__image", 2, {
      y: -7000,
      ease: SteppedEase.config(50),
    })
    .to(loadingScreen, {
        autoAlpha: 0,
      })
      .from(".header__heading--home", {
        x: -30,
        opacity: 0,
        duration: .5
      }, "-=.2")
    }

});
