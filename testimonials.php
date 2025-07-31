<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from html.themeholy.com/bame/demo/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 19:32:38 GMT -->

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="assets/logo/imgi_1_LOGO.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Author Info -->
  <meta name="author" content="Mad Alpha" />
  <title>Mad-&#945 | Testimonials</title>
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/app.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <style>
    .responsive-width {
      width: 100%;
      /* Default for mobile */
      border-radius: 40px;
      margin: 0 auto !important;
    }

    /* Desktop styles (applies when screen is 992px or wider) */
    @media (min-width: 992px) {
      .responsive-width {
        width: 70% !important;
        margin: 0 auto !important;
      }
    }

    /* Optional: Adjust for tablets (768px to 991px) */
    @media (min-width: 768px) and (max-width: 991px) {
      .responsive-width {
        width: 85%;
        margin: 0 auto !important;
      }
    }

    .bg-opacity {
      --border-color: $black-color3;
      position: relative;
      z-index: 2;
      background-color: #232f3624;
      overflow: hidden;
    }

    .testimonials-sec-v2 {
      position: relative;
      z-index: 1;
      text-align: center;
      /* padding-top: calc(110px + 20px); */
    }

    .testimonials-sec-v2:after {
      content: "";
      position: absolute;
      inset: 0;
      background: -webkit-linear-gradient(top,
          #0b0e13 0%,
          rgba(11, 14, 19, 0.94) 46.17%,
          #0b0e13 100%);
      background: linear-gradient(180deg,
          #0b0e13 0%,
          rgba(11, 14, 19, 0.94) 46.17%,
          #0b0e13 100%);
      z-index: -1;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // Image click shows popup
      $('.popup-trigger').on('click', function() {
        const src = $(this).attr('src');
        $('.popup-img').attr('src', src);
        $('#image-popup').fadeIn();
      });

      // Close popup
      $('.close-img-popup, #image-popup').on('click', function(e) {
        if (e.target !== this && !$(e.target).hasClass('close-img-popup')) return;
        $('#image-popup').fadeOut();
      });
    });
  </script>

</head>

<body>
  <!-- cursor  -->
  <div class="cursor-animation cursor-image"></div>
  <!-- pre loader  -->
  <div class="preloader">
    <button class="th-btn preloaderCls">CANCEL PRELOADER</button>
    <div class="preloader-inner"><span class="loader"></span></div>
  </div>

  <?php
  include 'navbar.php';
  ?>
  <!-- top section  -->
  <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">TESTIMONIALS</h1>
      </div>
    </div>
  </div>
  <!-- images section  -->
  <section class="space-top space-extra2-bottom bg-opacity background-image"
    data-bg-src="assets/img/bg/footer2-bg.png">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-12">
          <div class="title-area text-center">
            <span class="sub-title style2"># OUR TOP STREAMERS</span>
            <h2 class="sec-title">
              Let’s See Our Top Rated Streamers
              <span class="text-theme">!</span>
            </h2>
          </div>
        </div>
      </div>
      <!-- TESTIMONIALS cards  -->
      <div style="justify-content: center;" class="row gy-4">
        <div class="col-lg-4 col-sm-5">
          <div class="th-team team-card">
            <div class="team-card-corner team-card-corner1"></div>
            <div class="team-card-corner team-card-corner2"></div>
            <div class="team-card-corner team-card-corner3"></div>
            <div class="team-card-corner team-card-corner4"></div>
            <div class="img-wrap zoom-hover">
              <div class="team-img ">
                <img class="popup-trigger" src="assets/img/mad-alpha-testimonials/feedback-1.png" alt="Team" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-5">
          <div class="th-team team-card">
            <div class="team-card-corner team-card-corner1"></div>
            <div class="team-card-corner team-card-corner2"></div>
            <div class="team-card-corner team-card-corner3"></div>
            <div class="team-card-corner team-card-corner4"></div>
            <div class="img-wrap zoom-hover">
              <div class="team-img">
                <img class="popup-trigger" src="assets/img/mad-alpha-testimonials/feedback-2.png" alt="Team" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-5">
          <div class="th-team team-card">
            <div class="team-card-corner team-card-corner1"></div>
            <div class="team-card-corner team-card-corner2"></div>
            <div class="team-card-corner team-card-corner3"></div>
            <div class="team-card-corner team-card-corner4"></div>
            <div class="img-wrap zoom-hover">
              <div class="team-img">
                <img class="popup-trigger" src="assets/img/mad-alpha-testimonials/feedback-3.png" alt="Team" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-5">
          <div class="th-team team-card">
            <div class="team-card-corner team-card-corner1"></div>
            <div class="team-card-corner team-card-corner2"></div>
            <div class="team-card-corner team-card-corner3"></div>
            <div class="team-card-corner team-card-corner4"></div>
            <div class="img-wrap zoom-hover">
              <div class="team-img">
                <img class="popup-trigger" src="assets/img/mad-alpha-testimonials/feedback-4.png" alt="Team" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-5">
          <div class="th-team team-card">
            <div class="team-card-corner team-card-corner1"></div>
            <div class="team-card-corner team-card-corner2"></div>
            <div class="team-card-corner team-card-corner3"></div>
            <div class="team-card-corner team-card-corner4"></div>
            <div class="img-wrap zoom-hover">
              <div class="team-img">
                <img class="popup-trigger" src="assets/img/mad-alpha-testimonials/feedback-5.png" alt="Team" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-5">
          <div class="th-team team-card">
            <div class="team-card-corner team-card-corner1"></div>
            <div class="team-card-corner team-card-corner2"></div>
            <div class="team-card-corner team-card-corner3"></div>
            <div class="team-card-corner team-card-corner4"></div>
            <div class="img-wrap zoom-hover">
              <div class="team-img">
                <img class="popup-trigger" src="assets/img/mad-alpha-testimonials/feedback-6.png" alt="Team" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-5">
          <div class="th-team team-card">
            <div class="team-card-corner team-card-corner1"></div>
            <div class="team-card-corner team-card-corner2"></div>
            <div class="team-card-corner team-card-corner3"></div>
            <div class="team-card-corner team-card-corner4"></div>
            <div class="img-wrap zoom-hover">
              <div class="team-img">
                <img class="popup-trigger" src="assets/img/mad-alpha-testimonials/feedback-7.png" alt="Team" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-5">
          <div class="th-team team-card">
            <div class="team-card-corner team-card-corner1"></div>
            <div class="team-card-corner team-card-corner2"></div>
            <div class="team-card-corner team-card-corner3"></div>
            <div class="team-card-corner team-card-corner4"></div>
            <div class="img-wrap zoom-hover">
              <div class="team-img">
                <img class="popup-trigger" src="assets/img/mad-alpha-testimonials/feedback-8.png" alt="Team" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-5">
          <div class="th-team team-card">
            <div class="team-card-corner team-card-corner1"></div>
            <div class="team-card-corner team-card-corner2"></div>
            <div class="team-card-corner team-card-corner3"></div>
            <div class="team-card-corner team-card-corner4"></div>
            <div class="img-wrap zoom-hover">
              <div class="team-img">
                <img class="popup-trigger" src="assets/img/mad-alpha-testimonials/feedback-9.png" alt="Team" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-5">
          <div class="th-team team-card">
            <div class="team-card-corner team-card-corner1"></div>
            <div class="team-card-corner team-card-corner2"></div>
            <div class="team-card-corner team-card-corner3"></div>
            <div class="team-card-corner team-card-corner4"></div>
            <div class="img-wrap zoom-hover">
              <div class="team-img">
                <img class="popup-trigger" src="assets/img/mad-alpha-testimonials/feedback-10.png" alt="Team" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-5">
          <div class="th-team team-card">
            <div class="team-card-corner team-card-corner1"></div>
            <div class="team-card-corner team-card-corner2"></div>
            <div class="team-card-corner team-card-corner3"></div>
            <div class="team-card-corner team-card-corner4"></div>
            <div class="img-wrap zoom-hover">
              <div class="team-img">
                <img class="popup-trigger" src="assets/img/mad-alpha-testimonials/feedback-11.png" alt="Team" />
              </div>
            </div>
          </div>
        </div>


      </div>
      <!-- Image Section -->
      <!-- <div class="col-lg-4 col-sm-5">
        <div class="th-team team-card">
          <div class="img-wrap ">
            <div class="team-img">
              <img
                src="assets/img/mad-alpha-testimonials/feedback-11.png"
                alt="Team"
                class="popup-trigger" />
            </div>
          </div>
        </div>
      </div> -->

      <!-- Popup Modal -->
      <div id="image-popup" class="image-popup-overlay" style="display: none;">
        <span class="close-img-popup">&times;</span>
        <img class="popup-img" src="" alt="Popup Image" />
      </div>

      <!-- <div class="pt-60 text-center">
          <div class="th-pagination">
            <ul>
              <li>
                <a href="blog.html"><span class="btn-border"></span> 1</a>
              </li>
              <li>
                <a href="blog.html"><span class="btn-border"></span> 2</a>
              </li>
              <li>
                <a href="blog.html"><span class="btn-border"></span> 3</a>
              </li>
              <li>
                <a href="blog.html"
                  ><span class="btn-border"></span
                  ><i class="far fa-arrow-right"></i
                ></a>
              </li>
            </ul>
          </div>
        </div> -->
    </div>
  </section>
  <!-- form  -->
  <div
    class="row self-center space responsive-width">
    <div class="col-12">
      <form action="#" class="woocommerce-form-coupon">
        <div class="form-group self-cente text-center">
          <h3 class="widget_title">TELL US WHAT YOU THINK</h3>
          <input
            type="text"
            class="form-control"
            placeholder="Name" />
          <input
            type="text"
            class="form-control"
            placeholder="Email" />
          <div class="col-12 form-group">
            <textarea
              cols="20"
              rows="5"
              class="form-control"
              placeholder="Tell us what you think !"></textarea>
          </div>
          <div class="col-12 form-group ">
            <input
              type="file"
              accept="image/*"
              class="form-control file-input items-center"
              id="image-upload" />
            <!-- <i class="far fa-image"></i> -->
          </div>
        </div>
        <div style="z-index: 1;" class="form-group">
          <button type="submit" class="th-btn">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>
  <!-- contact section  -->
  <?php
  include 'contact-form.php';
  ?>

  <!-- footer  -->
  <?php
  include 'footer.php';
  ?>
  <div class="scroll-top">
    <svg
      class="progress-circle svg-content"
      width="100%"
      height="100%"
      viewBox="-1 -1 102 102">
      <path
        d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
        style="
            transition: stroke-dashoffset 10ms linear 0s;
            stroke-dasharray: 307.919, 307.919;
            stroke-dashoffset: 307.919;
          "></path>
    </svg>
  </div>
  <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>