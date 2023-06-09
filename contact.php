<!DOCTYPE html>
<html>
  <head>
    <title>RisamSoft</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/contact.css" />
    <link rel="stylesheet" href="./assets/css/slick.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body id="About">
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"
            ><img alt= "" src="./assets/images/riamsoft.svg"
          /></a>
          <button
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbar"
          >
            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="portfolio.html">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="careers.html">Careers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="service-banner">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="banner y-p-60 mb-y-p-30 text-center">
                <h3 class="heading text-white">Contact Us</h3>
                <div class="image m-t-40 mb-m-t-20">
                  <img
                    src="./assets/images/contact.svg"
                    class="page-banner-image"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="subscription m-t-60 mb-m-t-0">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 mb-m-t-30 mb-p-r-0 p-l-0">
              <div class="subs-image">
                <img
                  src="./assets/images/subscription.svg"
                  class="mob-img img-fluid"
                />
                <div class="image-overlay">
                  <h3 class="section-heading text-center text-white">
                    Contact Us & Reach!! Speak to Our Experts today
                  </h3>
                  <div class="text-center m-t-60 mb-m-t-30">
                    <img alt= "" class="icon" src="./assets/images/location.svg" />
                    <p class="m-t-10 section-heading">
                      5005 W Royal ln, suite 148 Irving tX 75063.
                    </p>
                  </div>
                  <div class="text-center m-t-40 mb-m-t-30">
                    <img alt= "" class="icon" src="./assets/images/telephone.svg" />
                    <a class="m-t-10 section-heading" href="#"
                      >+1(469)524-3401
                    </a>
                  </div>
                  <div class="text-center m-t-40 mb-m-t-30">
                    <img alt= "" class="icon" src="./assets/images/mail.svg" />
                    <a class="m-t-10 section-heading" href="#"
                      >info@risamsoft.com</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-y-p-30 gradient-border">
              <div class="sub_text">
                <h3 class="section-heading">Leave the message</h3>
                <form action="mail.php" method="post">
                  <input
                    type="text"
                    class="email-input m-t-60 mb-m-t-30"
                    value=""
                    name="name"
                    placeholder="Full Name *"
                  />
                  <input
                    type="email"
                    class="email-input m-t-16"
                    value=""
                    name="email"
                    placeholder="Enter your email *"
                  />
                  <input
                    type="number"
                    class="email-input m-t-16"
                    value=""
                    name="phone"
                    placeholder="Mobile Number *"
                  />
                  <input
                    type="text"
                    class="email-input m-t-16"
                    value=""
                    name="position"
                    placeholder="Your Position *"
                  />
                  <textarea
                    placeholder="Enter your Message"
                    class="m-t-16"
                    name="message"
                  ></textarea>
                  <input type="submit" class="btn primary m-t-40 mb-m-t-30" value="Submit your enquiry">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer p-60">
      <div class="footer-overlay">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <div class="about">
                <img alt= "footer-logo" class="logo" src="./assets/images/footer-logo.svg" />
                <p>
                  Our goal is to effectively supply our clients with cutting
                  edge technology solutions.
                </p>
                <ul class="social-icons">
                  <li><i class="fa-brands fa-linkedin"></i></li>
                  <li><i class="fa-brands fa-facebook-f"></i></li>
                  <li><i class="fa-brands fa-instagram"></i></li>
                  <li><i class="fa-brands fa-twitter"></i></li>
                  <li><i class="fa-brands fa-youtube"></i></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 mb-m-t-40">
              <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                  <li><a class="text-white" href="#">Home</a></li>
                  <li><a class="text-white" href="#">About Us</a></li>
                  <li><a class="text-white" href="#">Services</a></li>
                  <li><a class="text-white" href="#">Carrers</a></li>
                  <li><a class="text-white" href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 mb-m-t-40">
              <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                  <li>
                    <a class="text-white" href="#"
                      ><b
                        >Know where to find us? Let's take a look and get in
                        touch!</b
                      ></a
                    >
                  </li>
                  <li><a class="text-white" href="#">map</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 mb-m-t-40">
              <div class="footer-links">
                <h3>Location Address</h3>
                <ul>
                  <li>
                    <a class="text-white" href="#"
                      ><i class="fa fa-location"></i>Suite 148 Irving TX
                      75063</a
                    >
                  </li>
                  <li>
                    <a class="text-white" href="#"
                      ><i class="fa fa-phone"></i>+1(469)524-3401</a
                    >
                  </li>
                  <li>
                    <a class="text-white" href="#"
                      ><i class="fa fa-envelope"></i>info@risamsoft.com</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-overlay m-t-40 mb-m-t-20 gap-12 flex aic jcsb mb-fdc">
        <p class="m-0 text-white text-center">
          Copyright © 2022 Risamsoft. All rights reserved.
        </p>
        <p class="m-0 text-white text-center">
          Privacy Policy | Terms & Condition
        </p>
      </div>
    </footer>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".process-slider").slick({
          dots: true,
          prevArrow:
            "<button type='button' class='slick-prev pull-left'><i class='fa fa-arrow-left' aria-hidden='true'></i></button>",
          nextArrow:
            "<button type='button' class='slick-next pull-right'><i class='fa fa-arrow-right' aria-hidden='true'></i></button>",
        });
        $(".slider-single").slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          adaptiveHeight: true,
          infinite: false,
          useTransform: true,
          speed: 400,
          prevArrow: false,
          nextArrow: false,
          dots: true,
          cssEase: "cubic-bezier(0.77, 0, 0.18, 1)",
        });
        $(".slider-nav")
          .on("init", function (event, slick) {
            $(".slider-nav .slick-slide.slick-current").addClass("is-active");
          })
          .slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            focusOnSelect: false,
            infinite: false,
            prevArrow: false,
            nextArrow: false,
            centerMode: true,
            centerPadding: 60,
            // responsive: [{
            //     breakpoint: 1024,
            //     settings: {
            //         slidesToShow: 5,
            //         slidesToScroll: 5,
            //     }
            // }, {
            //     breakpoint: 640,
            //     settings: {
            //         slidesToShow: 4,
            //         slidesToScroll: 4,
            //     }
            // }, {
            //     breakpoint: 420,
            //     settings: {
            //         slidesToShow: 3,
            //         slidesToScroll: 3,
            // }
            // }]
          });
        $(".slider-single").on(
          "afterChange",
          function (event, slick, currentSlide) {
            $(".slider-nav").slick("slickGoTo", currentSlide);
            var currrentNavSlideElem =
              '.slider-nav .slick-slide[data-slick-index="' +
              currentSlide +
              '"]';
            $(".slider-nav .slick-slide.is-active").removeClass("is-active");
            $(currrentNavSlideElem).addClass("is-active");
          }
        );

        $(".slider-nav").on("click", ".slick-slide", function (event) {
          event.preventDefault();
          var goToSingleSlide = $(this).data("slick-index");

          $(".slider-single").slick("slickGoTo", goToSingleSlide);
        });
      });
    </script>
  </body>
</html>
