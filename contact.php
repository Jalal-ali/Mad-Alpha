<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from html.themeholy.com/bame/demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 19:32:45 GMT -->

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="assets/logo/imgi_1_LOGO.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Author Info -->
  <meta name="author" content="Mad Alpha" />
    <title>Mad-&#945 | Contact</title>
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/app.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">


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
        <h1 class="breadcumb-title">CONTACT US</h1>
      </div>
    </div>
  </div>
  <!-- image and content section lft/ryt -->
  <section class="container space-top mb-30">
    <div class="row no-gutters gy-80 align-items-center justify-content-center">
      <!-- content  -->
      <div class="col-xl-7 self-center">
        <div class="team-about-card text-center ">
          <div class="title-area mb-0">
            <h2 class="sec-title">
              GET IN TOUCH WITH US
              <span class="text-theme">!</span>
            </h2>
          </div>
          <div class="fancy-title">24/7</div>
          <!-- <a href="contact.php" class="th-btn">
              LIVE CHAT<i class="fa-solid fa-arrow-right ms-2"></i
            ></a> -->
          <p>We love taking on exciting new projects for <br>aspiring <span class="text-theme">businesses</span> and
            <span class="text-theme">growth-oriented clients</span>. Get in touch with us today for a free strategic
            consultation!
          </p>
        </div>
      </div>
      <!-- img  -->
      <div class="col-xl-5 ">
        <div class="img self-center">
          <img
            src="./assets/img/mockup/madalpha-mockup.png"
            alt="team image"
            style="border-radius: 50px;
              padding: 20px;" />
        </div>
      </div>
    </div>
  </section>

  <!-- contact form and image section  -->
  <div class="contact-page-1 space align-items-center justify-content-center items-center">
    <div
      class="contact-s1 space bg-repeat overflow-hidde align-items-center justify-content-center items-center"
      data-bg-src="assets/img/bg/jiji-bg2.png">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <h3 class="text-white">FILL OUT THIS FORM TO SCHEDULE FREE CONSULTATION.</h3>
          <span class="sub-title style2">Tell us your business goals and we'll see how we can create something amazing together.
            Get in touch with us today to get started on your project!
            Explore our portfolio to delve into our creative journey.</span>
          <div class="col-xl-6 pe-xxl-5">
            <!-- <div class="title-area">
              </div> -->
            <form action="#" class="woocommerce-form-coupon ajax-contact">
              <div class="form-group text-cente row">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Name" />
                <input
                  type="email"
                  class="form-control"
                  placeholder="Email" />
                <input
                  type="number"
                  class="form-control"
                  placeholder="Phone No" />
                <textarea
                  cols="20"
                  rows="5"
                  class="form-control"
                  placeholder="To help us understand better, Enter a brief description about your project !"></textarea>
                  <input
              type="file"
              accept="image/*"
              class="form-control file-input items-center"
              id="image-upload" />
              </div>
              <div class="form-group">
                <button type="submit" class="th-btn">SUBMIT</button>
              </div>
            </form>
          </div>
          <!-- image  -->
          <div class="col-xl-5 ps-xxl-5 ">
            <div class="img">
              <img src="./assets/img/hero/hero-5-1.png" alt="team image" />
            </div>
          </div>
        </div>
      </div>
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