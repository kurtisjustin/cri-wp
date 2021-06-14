gsap.registerPlugin("ScrollTrigger");



// function slideIn(target, axis, amount, duration) {
//     if (axis === "x") {
//         gsap.from(target, {
//             x: amount,
//             duration: duration,
//         });
//     } else if (axis === "y") {
//         gsap.from(target, {
//             y: amount,
//             duration: duration,
//         });
//     }
// }

// const slideInFromLeft = document.querySelectorAll(".slide-in-from-left");

// gsap.set(".slide-in-from-left", {opacity: 0, x: -100})

// ScrollTrigger.batch(".slide-in-from-left", {
//     onEnter: batch => gsap.to(batch, {opacity: 1, x: 0}),
//     // onLeave: batch => gsap.to(batch, {opacity: 0, x: -100}),
//     // onEnterBack: batch => gsap.to(batch, {opacity: 1, x: 0}),
//     // onLeaveBack: batch => gsap.to(batch, {opacity: 0, x: -100}),

//     start: "top 50%",
//     end: "bottom 20%",
//     // markers: true,
// });


gsap.set(".navigation__background", {y: -80})

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

headerTl.to(".navigation__background", {
  y: 0,
})


// Modal open
const modals = document.querySelectorAll("[data-modal]");

function showModal(e) {
  target = document.getElementById(e.target.getAttribute("data-modal"));

  target.classList.add("active")
}
modals.forEach(modal => {
  modal.addEventListener("click", showModal);
})

// Modal Close
const closeModals = document.querySelectorAll(".bio__close");

function hideModal(e) {
  target = document.querySelectorAll(".team-member__bio");
  target.forEach(targ => {
    targ.classList.remove("active");
  })
  
}
closeModals.forEach(modal => {
  modal.addEventListener("click", hideModal);
})

// Disable click on parent menu item
// const subMenu = document.querySelector(".menu-item-has-children");
// subMenu.addEventListener("click", (e) => {
//   e.preventDefault();
// })



// function homeTestiTl() {
//   ScrollTrigger.create({
//     trigger: ".testimonials__container"
//   })
// }

// ScrollTrigger.create({
//     trigger: ".homepage__testimonials",
//     start: "top top",
//     // onEnter: () => homeTestiTl(),
//     end: "+=500",
//     pin: true,
//     pinSpacing: false,
//     scrub: true,
//     markers: true,
// });

// homeTl.from(".pinned-header");

// gsap.timeline({
//     trigger: "homepage-container",
//     pin: true,
//     start: () => innerHeight,
//     endTrigger: "html",
//     end: "bottom top",
//     toggleActions: 'play complete restart reverse',                                                                                                                                           
// })


/* // Single testimonial timeline
const testimonialTl = gsap.timeline({
    scrollTrigger: {
        trigger: ".testimonial-single",
        start: "top 50%",
        end: "bottom 20%",
        // markers: true,
    }
});
testimonialTl.from(".testimonial-single", {opacity: 0});
testimonialTl.from(".testimonial .quote-mark", {opacity: 0, x: -100});
testimonialTl.from(".testimonial q", {opacity: 0, x: 100});
testimonialTl.from(".testimonial cite", {opacity: 0, x: 100});
*/


// // Navigation trigger
// const navTl = gsap.timeline({
//     scrollTrigger: {
//         markers: true,
//         trigger: ".pinned-header",
//         pin: true,
//         pinSpacing: false,
//         start: "top top",
//         scrub: true,
//         endTrigger: ".white-angled-divider",
//         end: "bottom top",
//         toggleActions: 'play complete restart reverse',
//     }
// });
// .addLabel("beginning");
// navTl.from(".navigation__background", {
//     y: -80,
//     // duration: 3,
// })
// .to(".homepage-intro", {
//     y: () => -window.innerHeight,
//     // duration: 3,
// })
// .addLabel("homeIntro")


// const navTl = gsap.timeline({

// })
// // Header trigger
// ScrollTrigger.create({
//     pin: true,
//     pinSpacing: false,
//     trigger: ".pinned-header",
//     start: "top top",
//     end: "bottom -50%",
// });

// // Testimonials trigger
// const testimonialsTl = gsap.timeline({
//     scrollTrigger: {
//         pin: true,
//         pinSpacing: false,
//         trigger: ".pinned-testimonials",
//         start: "top 80px",
//         end: () => innerWidth * 2,
//         scrub: true,
//         markers: true,
//         toggleActions: 'play complete restart reverse',
//     }
// });

// testimonialsTl.to(".testimonials-container", {
//     xPercent: -100,
//     x: () => innerWidth,
//     ease: "none",
// })



// Testimonials trigger
// const testimonialsTl = gsap.timeline({
//     scrollTrigger: {
//         pin: true,
//         pinSpacing: false,
//         trigger: ".pinned-testimonials",
//         start: "top 80px",
//         end: () => innerWidth * 2,
//         scrub: true,
//         markers: true,
//         toggleActions: 'play complete restart reverse',
//     }
// });

// testimonialsTl.to("")

// testimonialsTl.to(".testimonials-container", {
//     xPercent: -100,
//     x: () => innerWidth,
//     ease: "none",
// })

// const testimonialsTl = gsap.timeline({
//   scrollTrigger: {
//     trigger: ".testimonials__background",
//     start: "top top",
//     endTrigger: ".testimonials__container-inner",
//     end:"bottom bottom",
//     pin: true,
//     pinSpacing: true,
//     scrub: true,
//     toggleActions: 'play complete restart reverse',
//   }
// });

// testimonialsTl.to(".testimonials__container-inner", {
//   scrollTrigger: {
//     trigger: ".testimonials__container-inner",
//     start: "top top",
//     pin: true,
//     // pinSpacing: true,
//     scrub: true,
//   },
//   yPercent: -100,
//   y: () => innerHeight,
//   ease: "none",
// })

// ScrollTrigger.create({
//     pin: true,
//     pinSpacing: false,
//     trigger: ".pinned-testimonials",
//     start: "top 80px",
//     endTrigger: ".footer",
//     end: "top bottom",
//     // markers: true,
//     // horizontal: true,
// }); 

// // Testimonials horizontal trigger
// const testimonialsSideTl = gsap.timeline({
//     scrollTrigger: {
      
//     }
// })
// testimonialsSideTl.to('.testimonials-container', {
//     xPercent: -100,
//     x: () => innerWidth,
//     ease: "none",
// })

// ScrollTrigger.create({
//     trigger: ".testimonials-container",
//     start: "top top"
// })

// const homeTl = gsap.timeline();

// homeTl.to(".homepage", {
//     scrollTrigger: {
//         // markers: true,
//         trigger: ".navigation",
//         start: "top 100px",
//         endTrigger: "html",
//         end: "bottom top",
//         toggleActions: 'play complete restart reverse'
//     }
// });
// homeTl.to(".homepage-intro", {
//     scrollTrigger: {
//         markers: true,
//         trigger: ".homepage",
//         start: "100px",
//         endTrigger: "html",
//         end: "bottom top",
//         toggleActions: 'play complete restart reverse',
//     }
// });


// function animateFrom(elem, direction) {
//     direction = direction || 1;
//     var x = 0,
//         y = direction * 100;
//     if(elem.classList.contains("gs_reveal_fromLeft")) {
//       x = -100;
//       y = 0;
//     } else if (elem.classList.contains("gs_reveal_fromRight")) {
//       x = 100;
//       y = 0;
//     }
//     elem.style.transform = "translate(" + x + "px, " + y + "px)";
//     elem.style.opacity = "0";
//     gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
//       duration: 1.25, 
//       x: 0,
//       y: 0, 
//       autoAlpha: 1, 
//       ease: "expo", 
//       overwrite: "auto"
//     });
//   }
  
//   function hide(elem) {
//     gsap.set(elem, {autoAlpha: 0});
//   }
  
//   document.addEventListener("DOMContentLoaded", function() {
//     gsap.registerPlugin(ScrollTrigger);
    
//     gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
//       hide(elem); // assure that the element is hidden when scrolled into view
      
//       ScrollTrigger.create({
//         trigger: elem,
//         onEnter: function() { animateFrom(elem) }, 
//         onEnterBack: function() { animateFrom(elem, -1) },
//         onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
//       });
//     });
//   });
  