<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from html.themeholy.com/bame/demo/game.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 19:32:41 GMT -->

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="assets/logo/imgi_1_LOGO.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Author Info -->
  <meta name="author" content="Mad Alpha" />
  <title>Mad-&#945 | Payment</title>
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
  </style>
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

  <!-- form  -->
  <div
    class="row self-center space responsive-width">
    <div class="col-12">
      <form action="#" class="woocommerce-form-coupon">
        <div class="form-group self-cente text-center">
          <h3 class="widget_title">PAYMENT</h3>
          <input
            type="text"
            class="form-control"
            placeholder="Name" />
          <input
            type="text"
            class="form-control"
            placeholder="Email" />
          <input
            type="text"
            class="form-control"
            placeholder="Representative" />
          <input
            type="number"
            class="form-control"
            placeholder="Alternate contact (Optional)" />
          <!-- <div class="col-12 form-group">
            <textarea
              cols="20"
              rows="5"
              class="form-control"
              placeholder="Tell us what you think !"></textarea>
          </div> -->
        </div>
        <div class="form-group">
          <button type="submit" class="th-btn">PAY NOW</button>
        </div>
      </form>
    </div>
  </div>
    
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>