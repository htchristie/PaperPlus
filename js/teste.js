$('.owl-carousel').owlCarousel({
  dots: false,
  nav: true,
  navText: [
      '<i class="bi bi-arrow-left-short"></i>',
      '<i class="bi bi-arrow-right-short"></i>'
  ],
  responsive:{
      0:{
          items: 1
      },
      600:{
          items: 3
      },
      1000:{
          items: 5
      }
  }
});