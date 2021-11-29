
/* OWL CAROUSEL */

$('.owl-carousel').owlCarousel({
  loop:false,
  nav: true,
  dots: false,
  responsive:{
    0:{
        items:1.2,
        nav: false,
    },
    768:{
        items:3.2
    },
    1000:{
        items:5.2
    }
}
});



/* BOOTSTRAP TOOLTIPS */

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

/* GSAP */

gsap.from(".hero-img", { opacity: 0, duration: 1, delay: 0.4, x: 200});
gsap.from(".hero-content h2", { opacity: 0, duration: 1, delay: 0.8, x: -50});
gsap.from(".hero-content h1", { opacity: 0, duration: 1, delay: 1.2, x: -45});
gsap.from(".hero-content button", { opacity: 0, duration: 1, delay: 1.5, x: -50});