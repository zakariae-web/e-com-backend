$('.single-item').slick({
    autoplay: true,
    autoplaySpeed: 2000
});

$('.multiple-items').slick({
    dots: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 3,
    slidesToScroll: 1,
    dynamicBullets: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }
    ]
  });

  $('.brands').slick({
    centerMode: true,
    centerPadding: '60px',
    autoplay: true,
    autoplaySpeed: 500,
    slidesToShow: 6,
    arrows: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 2
        }
      }
    ]
  });