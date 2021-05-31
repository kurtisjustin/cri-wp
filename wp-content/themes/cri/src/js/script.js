gsap.registerPlugin("ScrollTrigger");

// ScrollTrigger.create({
//     trigger: ".pinned-header",
//     start: "top top",
//     end: () => "300% bottom",
//     pin: true,
//     pinSpacing: false,
//     scrub: 1,
// });

  function vh(v) {
    var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    return (v * h) / 100;
  }
  
  function vw(v) {
    var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    return (v * w) / 100;
  }


let homeIntrotl = gsap.timeline({
    scrollTrigger: {
        trigger: ".pinned-header",
        start: "top top",
        end: () => vh(140),
        pin: true,
        pinSpacing: false,
        scrub: 1,
    }
})
.fromTo(".navigation__background", {height: 0}, {height: 80})