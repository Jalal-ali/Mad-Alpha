<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="assets/logo/imgi_1_LOGO.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Author Info -->
  <meta name="author" content="Mad Alpha" />
  <title>Mad-α | Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/app.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.filter-active').isotope({
        filter: '.logo'
      });
    });
    // heading funcs 
    $(document).ready(function() {
      // When a filter button is clicked
      $('.category').click(function() {
        // Get the heading text from data attribute
        var newHeading = $(this).data('heading');

        // Update the heading text
        $('.main-heading').text(newHeading);

        // Optional: Add animation
        $('.sec-title').addClass('animate__animated animate__fadeIn');
        setTimeout(function() {
          $('.sec-title').removeClass('animate__animated animate__fadeIn');
        }, 500);
      });
    });
  </script>
  <style>
    .game-card-img-mask {
      position: relative;
      width: 100%;
      height: 0;
      padding-bottom: 56.25%;
      /* Adjust based on your mask aspect ratio */
      overflow: hidden;
    }

    .masked-img {
      /* position: absolute; */
      width: 100%;
      height: 100%;
      object-fit: cover;
      mask-image: url('assets/img/game/game_card3_bg.jpg');
      -webkit-mask-image: url('assets/img/game/game_card3_bg.jpg');
      mask-size: 100% 100%;
      -webkit-mask-size: 100% 100%;
      rotate: 0.4deg;
    }

    /*----------------------------------- tab buttons dropdown style ----------------------------------------- */
    .game-filter-btn .tab-wrapper .tab-btn {
      background: var(--title-color) !important;
      border: 0 !important;
      font-size: 18px !important;
      font-weight: 600 !important;
      color: var(--body-color) !important;
      font-family: var(--title-font) !important;
      letter-spacing: 0.1em !important;
      padding: 15px 45px !important;
      -webkit-clip-path: polygon(15px 0%,
          calc(100% - 15px) 0%,
          100% 15px,
          100% calc(100% - 15px),
          calc(100% - 15px) 100%,
          15px 100%,
          0% calc(100% - 15px),
          0% 15px) !important;
      clip-path: polygon(15px 0%,
          calc(100% - 15px) 0%,
          100% 15px,
          100% calc(100% - 15px),
          calc(100% - 15px) 100%,
          15px 100%,
          0% calc(100% - 15px),
          0% 15px) !important;
    }

    .game-filter-btn .tab-wrapper .tab-btn.active,
    .game-filter-btn .tab-wrapper .tab-btn:hover {
      background: var(--theme-color) !important;
      color: var(--title-color) !important;
    }

    .tab-wrapper {
      position: relative;
    }

    .tab-btn {
      padding: 10px 18px;
      background-color: transparent;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 15px;
      cursor: pointer;
    }

    .dropdown {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
      width: 100%;
      flex: 1 1 100%;
      padding: 0 7px;
      margin: 4px auto;
    }

    .tab-wrapper:hover .dropdown {
      max-height: max-content;
      border-radius: 19px;
      -webkit-clip-path: polygon(15px 0%, calc(100% - 15px) 0%, 100% 15px, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0% calc(100% - 15px), 0% 15px);
      clip-path: polygon(15px 0%, calc(100% - 15px) 0%, 100% 15px, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0% calc(100% - 15px), 0% 15px);
      border: 0.175rem solid var(--theme-color);

      /* adjust as needed */
    }

    /* Optional dropdown styling */
    .dropdown ul {
      margin: 0;
      padding: 10px 0;
      list-style: none;
      /* background: var(--black-color2); */
      /* background-color: gray; */
      border-radius: 0 0 6px 6px;
    }

    .dropdown li {
      padding: 8px 16px;
    }

    .dropdown li a {
      color: var(--white-color);
      text-decoration: none;
      display: block;
    }


    .dropdown li:hover {
      color: var(--black-color) !important;
      font-weight: 500;
      /* color: var(--black-color); */
      /*font-family: var(--title-font);
       letter-spacing: 0.1em;
      padding: 15px 45px; */
      background: var(--theme-color);
      -webkit-clip-path: polygon(15px 0%, calc(100% - 15px) 0%, 100% 15px, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0% calc(100% - 15px), 0% 15px);
      clip-path: polygon(15px 0%, calc(100% - 15px) 0%, 100% 15px, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0% calc(100% - 15px), 0% 15px);
      padding: 8px 16px;

    }

    .filter-menu-active .active {
      color: var(--black-color) !important;
      font-weight: 500;
      /* color: var(--black-color); */
      /*font-family: var(--title-font);
       letter-spacing: 0.1em;
      padding: 15px 45px; */
      background: var(--theme-color);
      -webkit-clip-path: polygon(15px 0%, calc(100% - 15px) 0%, 100% 15px, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0% calc(100% - 15px), 0% 15px);
      clip-path: polygon(15px 0%, calc(100% - 15px) 0%, 100% 15px, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0% calc(100% - 15px), 0% 15px);
      padding: 8px 16px;

    }

    .filter-menu-active li.active a {
      color: var(--black-color) !important;
      font-weight: 500;
    }

    .dropdown li a:hover {
      color: var(--black-color);
      /* font-weight: 500; */
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

  <!-- top hero section  -->
  <div class="th-hero-wrapper hero-2"
    id="hero"
    data-bg-src="assets/img/hero/hero-bg2-1.png">
    <div class="container-fluid">
      <div class="hero-style2">
        <div class="hero-title-thumb">
          <!-- top character 1  -->
          <div class="character">
            <img src="assets/img/hero/CHARACTER.png" alt="img" />
          </div>
          <!-- top img 2  -->
          <div
            class="title-img title-img-1 custom-anim-top wow animated"
            data-wow-duration="1.2s"
            data-wow-delay="0.1s">
            <span
              class="title-img-mask"
              data-mask-src="assets/img/hero/MAD-ALPHA.png"></span>
            <img src="assets/img/hero/MAD-ALPHA.png" alt="img" />
          </div>
        </div>
        <div
          class="btn-group custom-anim-top wow animated"
          data-wow-duration="1.2s"
          data-wow-delay="0.5s">
          <a href="contact.html" class="th-btn style-border2"><span class="btn-border">CONTACT US <i class="fa-solid fa-arrow-right ms-2"></i></span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- main section  -->
  <section class="game-area-2 space-top overflow-hidden">
    <div class="container">
      <div
        class="row justify-content-between align-items-center text-lg-start text-center">
        <div class="col-lg-auto">
          <div
            class="title-area custom-anim-left wow animated"
            data-wow-duration="1.5s"
            data-wow-delay="0.2s">
            <h2 class="sec-title">
              OUR RECENT PROJECTS <span class="text-theme">!</span>
            </h2>
            <span class="sub-title style2">Seeking design inpiration?<br />
              Explore our portfolio to delve into our creative journey.</span>
          </div>
        </div>
        <div class="col-lg-auto d-flex justify-content-center">
          <div
            class="sec-btn custom-anim-right wow animated"
            data-wow-duration="1.5s"
            data-wow-delay="0.2s">
            <a href="portfolio.php" class="th-btn">See All <i class="fa-solid fa-arrow-right ms-2"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- projs section  -->
  <section class="game-area-3 overflow-hidden">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-auto">
          <div class="title-area custom-anim-top wow" data-wow-duration="1.5s" data-wow-delay="0.2s">
            <!-- tab buttons -->

            <div class="game-filter-btn filter-menu filter-menu-active custom-anim-top wow">
              <!-- tab-wrappers ...  -->
              <div class="tab-wrapper">
                <button data-filter=".logo" class="tab-btn active" type="button" data-heading="Stream Design">Stream Design</button>
                <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category active" data-filter=".logo" data-heading="Logo designs">
                      <a href="javascript:void(0)">Logo designs</a>
                    </li>
                    <li class="category" data-filter=".web" data-heading="overlay designs">
                      <a href="javascript:void(0)">Overlay designs</a>
                    </li>
                    <li class="category" data-filter=".branding" data-heading="emotes">
                      <a href="javascript:void(0)">Emotes</a>
                    </li>
                    <li class="category" data-filter=".design" data-heading="sub badges">
                      <a href="javascript:void(0)">Sub badges</a>
                    </li>
                    <li class="category" data-filter=".logo" data-heading="banner">
                      <a href="javascript:void(0)">Banner</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-wrapper">
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Vtuber">Vtuber</button>
                <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">2D models</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">3D models</a></li>
                  </ul>
                </div>
              </div>
              <div class="tab-wrapper">
                <button data-filter=".web" class="tab-btn" type="button" data-heading="3D Designs">3D Designs</button>
                <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Printable designs</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Printable designs</a></li>
                  </ul>
                </div>
              </div>
              <div class="tab-wrapper">
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Custom Gaming room">Custom Gaming room</button>
                <!-- <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Printable designs</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Printable designs</a></li>
                  </ul>
                </div> -->
              </div>
              <div class="tab-wrapper">
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Fursuits">Fursuits</button>
                <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Reference sheet</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Physical fursuit</a></li>
                  </ul>
                </div>
              </div>
              <div class="tab-wrapper">
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Ebook">Ebook</button>
                <!-- <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Reference sheet</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Physical fursuit</a></li>
                  </ul>
                </div> -->
              </div>
              <div class="tab-wrapper">
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Websites">Websites</button>
                <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Custom</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Shopify</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Wordpress</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Ui/Ux</a></li>
                  </ul>
                </div>
              </div>
              <div class="tab-wrapper">
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Application">Application</button>
                <!-- <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Reference sheet</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Physical fursuit</a></li>
                  </ul>
                </div> -->
              </div>
              <div class="tab-wrapper">
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Architecture Engineering">Architecture Engineering</button>
                <!-- <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Reference sheet</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Physical fursuit</a></li>
                  </ul>
                </div> -->
              </div>
              <div class="tab-wrapper">
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Animations">Animations</button>
                <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Logo intros</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Custom animations</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Product Animations</a></li>
                  </ul>
                </div>
              </div>
              <!-- tab-wrapper ended ...  -->
            </div>
            <!-- tab-buttons ended ...  -->

            <!-- Add other tab-wrapper blocks similarly -->
            <h2 style=" color :var(--smoke-color);
            letter-spacing: 1px;
            filter: drop-shadow(2px 1px 0.3px var(--theme-color));" class="sec-title main-heading self-center pt-5">Stream Design</h2>
          </div>
        </div>
      </div>
      <div class="row gy-4 filter-active">
        <div class="col-lg-4 col-md-6 filter-item logo" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/1.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item logo" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/2.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item logo" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/3.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item web" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/4.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item web" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/5.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item web" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/1.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item design" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/2.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item design" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/3.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item design" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/4.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item branding" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/5.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item branding" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/3.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item branding" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/1.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- pricing section  -->
  <section
    class="pricing-sec-v2 space-bottom"
    data-bg-src="assets/img/bg/tournament-sec2-bg.png"
    >
    <div class="col-lg-auto">
      <div
        class="title-area custom-anim-left wow animated"
        data-wow-duration="1.5s"
        data-wow-delay="0.2s">
        <h2 class="sec-title">
          PRICING PLAN THAT WORKS FOR EVERYONE
          <span class="text-theme">!</span>
        </h2>
        <span style="padding: 0 1rem 0 1rem;" class="sub-title style2">We, at Mad Alpha Designers, excel in providing impeccable services
          at very competitive rates!<br> Align your needs and jump right in to
          have an experience of a lifetime!</span>
      </div>
    </div>
    <div class="widget-grid">
      <!-- plan boxes  -->

      <!-- STANDARD PLAN  -->
      <div class="widget widget_categories">
        <h3 class="widget_title">
          STANDARD <br />
          <span class="widget_sub_title">Streaming Pack</span>
        </h3>
        <ul>
          <li class="shadow-list"><a href="#">LOGO</a> <span class="quantity">1X</span></li>
          <li class="shadow-list"><a href="#">SCREENS</a> <span class="quantity">3X</span></li>
          <li class="shadow-list"><a href="#">ALERTS</a> <span class="quantity">3X</span></li>
          <li class="shadow-list"><a href="#">PANELS</a> <span class="quantity">4X</span></li>
          <li class="shadow-list"><a href="#">HEADER</a> <span class="quantity">1X</span></li>
          <li class="shadow-list"><a href="#">CAMSCREEN</a> <span class="quantity">1X</span></li>
          <li class="shadow-list"><a href="#">CHATBOX</a> <span class="quantity">1X</span></li>
        </ul>
        <button
          id="tab1-btn"
          class="th-btn style-border"
          style="margin-top: 20px; width: 90%">
          <span class="btn-border get-quote">
            GET QUOTE <i class="fa-solid fa-arrow-right ms-2"></i>
          </span>
        </button>
      </div>

      <!-- SOLID PLAN  -->
      <div class="widget widget_categories">
        <h3 class="widget_title">
          SOLID <br />
          <span class="widget_sub_title">Streaming Pack</span>
        </h3>

        <ul>
          <li class="shadow-list"><a href="#">LOGO</a> <span class="quantity">1X</span></li>
          <li class="shadow-list"><a href="#">SCREENS</a> <span class="quantity">3X</span></li>
          <li class="shadow-list"><a href="#">ALERTS</a> <span class="quantity">3X</span></li>
          <li class="shadow-list"><a href="#">PANELS</a> <span class="quantity">4X</span></li>
          <li class="shadow-list"><a href="#">HEADER</a> <span class="quantity">1X</span></li>
          <li class="shadow-list">
            <a href="#">CAMSCREEN</a> <span class="quantity">1X</span>
          </li>
          <li class="shadow-list"><a href="#">CHATBOX</a> <span class="quantity">1X</span></li>
        </ul>

        <button
          id="tab1-btn"
          class="th-btn style-border"
          style="margin-top: 20px; width: 90%">
          <span class="btn-border get-quote">
            GET QUOTE <i class="fa-solid fa-arrow-right ms-2"></i>
          </span>
        </button>
      </div>
      <!-- BASIC PLAN  -->

      <div class="widget widget_categories">
        <h3 class="widget_title">
          BASIC <br />
          <span class="widget_sub_title">Streaming Pack</span>
        </h3>
        <div class="scrollable-list">
          <ul>
            <li class="shadow-list"><a href="#">LOGO</a> <span class="quantity">1X</span></li>
            <li class="shadow-list"><a href="#">BANNER</a> <span class="quantity">1X</span></li>
            <li class="shadow-list"><a href="#">SCREENS</a> <span class="quantity">3X</span></li>
            <li class="shadow-list"><a href="#">ALERTS</a> <span class="quantity">3X</span></li>
            <li class="shadow-list"><a href="#">PANELS</a> <span class="quantity">4X</span></li>
            <li class="shadow-list"><a href="#">HEADER</a> <span class="quantity">1X</span></li>
            <li class="shadow-list">
              <a href="#">CAMSCREEN</a> <span class="quantity">1X</span>
            </li>
            <li class="shadow-list"><a href="#">CHATBOX</a> <span class="quantity">1X</span></li>
          </ul>
        </div>
        <button
          id="tab1-btn"
          class="th-btn style-border"
          style="margin-top: 20px; width: 90%">
          <span class="btn-border get-quote">
            GET QUOTE <i class="fa-solid fa-arrow-right ms-2"></i>
          </span>
        </button>
      </div>

      <!-- Professional PLAN  -->

      <div class="widget widget_categories">
        <h3 class="widget_title">
          PROFESSIONAL <br />
          <span class="widget_sub_title">Streaming Pack</span>
        </h3>
        <div class="scrollable-list">
          <ul>
            <li class="shadow-list"><a href="#">LOGO</a> <span class="quantity">1X</span></li>
            <li class="shadow-list"><a href="#">BANNER</a> <span class="quantity">3X</span></li>
            <li class="shadow-list"><a href="#">SCREENS</a> <span class="quantity">3X</span></li>
            <li class="shadow-list"><a href="#">ALERTS</a> <span class="quantity">3X</span></li>
            <li class="shadow-list"><a href="#">PANELS</a> <span class="quantity">4X</span></li>
            <li class="shadow-list"><a href="#">HEADER</a> <span class="quantity">1X</span></li>
            <li class="shadow-list">
              <a href="#">CAMSCREEN</a> <span class="quantity">1X</span>
            </li>
            <li class="shadow-list"><a href="#">CHATBOX</a> <span class="quantity">1X</span></li>
            <li class="shadow-list"><a href="#">EMOTES</a> <span class="quantity">3X</span></li>
            <li class="shadow-list"><a href="#">SUB BADGES</a> <span class="quantity">3X</span></li>
            <li class="shadow-list"><a href="#">INTRO</a> <span class="quantity">1X</span></li>
            <li class="shadow-list"><a href="#">ANIMATED OVERLAY</a> <span class="quantity">1X</span></li>
          </ul>
        </div>
        <button
          id="tab1-btn"
          class="th-btn style-border"
          style="margin-top: 20px; width: 90%">
          <span class="btn-border get-quote">
            GET QUOTE <i class="fa-solid fa-arrow-right ms-2"></i>
          </span>
        </button>
      </div>
      <!-- Premium PLAN  -->

      <div class="widget widget_categories">
        <h3 class="widget_title">
          PREMIUM <br />
          <span class="widget_sub_title">Streaming Pack</span>
        </h3>
        <div class="scrollable-list">
          <ul>
            <li class="shadow-list"><a href="#">LOGO</a> <span class="quantity">1X</span></li>
            <li class="shadow-list"><a href="#">BANNER</a> <span class="quantity">1X</span></li>
            <li class="shadow-list"><a href="#">SCREENS</a> <span class="quantity">3X</span></li>
            <li class="shadow-list"><a href="#">ALERTS</a> <span class="quantity">3X</span></li>
            <li class="shadow-list"><a href="#">PANELS</a> <span class="quantity">4X</span></li>
            <li class="shadow-list"><a href="#">HEADER</a> <span class="quantity">1X</span></li>
            <li class="shadow-list">
              <a href="#">CAMSCREEN</a> <span class="quantity">1X</span>
            </li>
            <li class="shadow-list"><a href="#">CHATBOX</a> <span class="quantity">1X</span></li>
            <li class="shadow-list"><a href="#">INTRO</a> <span class="quantity">1X</span></li>
            <li class="shadow-list"><a href="#">OUTRO</a> <span class="quantity">1X</span></li>
            <li class="shadow-list"><a href="#">EMOTES</a> <span class="quantity">3X</span></li>
            <li class="shadow-list"><a href="#">SUB BADGES</a> <span class="quantity">3X</span></li>
            <li class="shadow-list"><a href="#">ANIMATED LOGO</a> <span class="quantity">4X</span></li>
            <li class="shadow-list"><a href="#">ANIMATED BANNER</a> <span class="quantity">4X</span></li>
            <li class="shadow-list"><a href="#">ANIMATED EMOTES</a> <span class="quantity">4X</span></li>
            <li class="shadow-list"><a href="#">ANIMATED OVERLAY</a> <span class="quantity">4X</span></li>
          </ul>
        </div>
        <button
          id="tab1-btn"
          class="th-btn style-border"
          style="margin-top: 20px; width: 90%">
          <span class="btn-border get-quote">
            GET QUOTE <i class="fa-solid fa-arrow-right ms-2"></i>
          </span>
        </button>
      </div>
      <!-- Add more  -->
    </div>
  </section>
  <div
    class="video-area-1 overflow-hidden"
    style="
        background-image: url('assets/img/bg/video-sec2-bg.png');
        background-image: url('assets/img/bg/video-sec2-bg-shape.png');
      ">
    <div class="container">
      <div class="text-center">
        <a
          href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
          class="play-btn style4 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
      </div>
    </div>
  </div>
  <section class="">
    <div class="container z-index-common">
      <div class="cta-wrap2">
        <div
          class="cta-border-shape bg-mask"
          style="
              mask-image: url('assets/img/bg/cta-wrap2-bg-shape2.png');
              /* background-repeat: no-repeat;
              background-size: contain; */
            "></div>
        <div
          class="cta-wrap-content bg-mask"
          style="
              mask-image: url(assets/img/bg/cta-wrap2-bg-shape.png);
              /* background-repeat: no-repeat;
              background-size: contain; */
            "
          data-mask-src="assets/img/bg/cta-wrap2-bg-shape.png">
          <div
            class="cta-border-shape2 background-image"
            data-bg-src="assets/img/theme-img/cta-wrap2-border-shape.svg"></div>
          <div
            class="title-area mb-0 custom-anim-top wow animated"
            data-wow-duration="1.5s"
            data-wow-delay="0.2s">
            <h2 class="sec-title">
              Join Our Discord Community
              <span class="text-theme">!</span>
            </h2>
            <p class="mt-30 mb-30">
              Certainly! When creating an esports and gaming site, it's
              essential to include various elements to cater to the interests
              and needs of the gaming community.
            </p>
            <div class="btn-wrap justify-content-center">
              <a href="javascript:void(0)" class="th-btn">JOIN COMMUNITY <i class="fa-solid fa-arrow-right ms-2"></i></a>
              <!-- <a href="tournament.html" class="th-btn style-border">
                <span class="btn-border">
                  CREATE TOURNAMENT
                  <i class="fa-solid fa-arrow-right ms-2"></i>
                </span>
              </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- insta scrollable sect  -->
  <!-- <section
      class="instagram-area-1 overflow-hidden space-bottom"
      data-pos-for=".blog-area-2"
      data-sec-pos="top-half"
    >
      <div class="container-fluid p-0">
        <div class="text-center">
          <h2
            class="instagram-sec-title custom-anim-top wow animated"
            data-wow-duration="1.5s"
            data-wow-delay="0.2s"
          >
            @instagram
          </h2>
        </div>
        <div class="slider-area">
          <div
            class="swiper th-slider instagram-slider1"
            id="instagramSlider1"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"3"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"5","spaceBetween":"30","autoHeight":"true"},"1500":{"slidesPerView":"5","spaceBetween":"70","autoHeight":"true"}}}'
          >
            <div class="swiper-wrapper">
              <div class="insta-box swiper-slide">
                <img src="assets/img/instagram/1-1.png" alt="Instagram" />
                <a
                  target="_blank"
                  href="https://instagram.com/"
                  class="icon-btn"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </div>
              <div class="insta-box swiper-slide">
                <img src="assets/img/instagram/1-2.png" alt="Instagram" />
                <a
                  target="_blank"
                  href="https://instagram.com/"
                  class="icon-btn"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </div>
              <div class="insta-box swiper-slide">
                <img src="assets/img/instagram/1-3.png" alt="Instagram" />
                <a
                  target="_blank"
                  href="https://instagram.com/"
                  class="icon-btn"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </div>
              <div class="insta-box swiper-slide">
                <img src="assets/img/instagram/1-4.png" alt="Instagram" />
                <a
                  target="_blank"
                  href="https://instagram.com/"
                  class="icon-btn"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </div>
              <div class="insta-box swiper-slide">
                <img src="assets/img/instagram/1-5.png" alt="Instagram" />
                <a
                  target="_blank"
                  href="https://instagram.com/"
                  class="icon-btn"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </div>
              <div class="insta-box swiper-slide">
                <img src="assets/img/instagram/1-1.png" alt="Instagram" />
                <a
                  target="_blank"
                  href="https://instagram.com/"
                  class="icon-btn"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </div>
              <div class="insta-box swiper-slide">
                <img src="assets/img/instagram/1-2.png" alt="Instagram" />
                <a
                  target="_blank"
                  href="https://instagram.com/"
                  class="icon-btn"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </div>
              <div class="insta-box swiper-slide">
                <img src="assets/img/instagram/1-3.png" alt="Instagram" />
                <a
                  target="_blank"
                  href="https://instagram.com/"
                  class="icon-btn"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </div>
              <div class="insta-box swiper-slide">
                <img src="assets/img/instagram/1-4.png" alt="Instagram" />
                <a
                  target="_blank"
                  href="https://instagram.com/"
                  class="icon-btn"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </div>
              <div class="insta-box swiper-slide">
                <img src="assets/img/instagram/1-5.png" alt="Instagram" />
                <a
                  target="_blank"
                  href="https://instagram.com/"
                  class="icon-btn"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <!-- history counts section  -->
  <div
    class="overflow-hidden space position-relative z-index-common"
    data-bg-src="assets/img/bg/about-bg2.png">
    <div class="gr-bg1 overlay"></div>
    <div class="container">
      <div
        class="title-area text-center custom-anim-top wow animated"
        data-wow-duration="1.5s"
        data-wow-delay="0.2s">
        <h2 class="sec-title text-white">
          Over 10 years of experience in the Online design industry
        </h2>
        <span class="sub-title style2">The digital services we offer are extensive, yet at every point our
          work is underpinned by one core aim: <br> to drive relevant consumer
          traffic to your brand or website.</span>
      </div>
    </div>
    <div class="space-botto counter-area-1">
      <div class="container">
        <div class="counter-card-wrap">
          <div class="counter-card">
            <div class="media-body">
              <h2 class="box-number">
                <span class="counter-number">75800</span><span class="text-theme fw-medium">+</span>
              </h2>
              <p class="box-text">Launched Products</p>
            </div>
          </div>
          <div class="counter-card">
            <div class="media-body">
              <h2 class="box-number">
                <span class="counter-number">5678</span>
              </h2>
              <p class="box-text">Satisfied Customers</p>
            </div>
          </div>
          <div class="counter-card">
            <div class="media-body">
              <h2 class="box-number">
                <span class="counter-number">9800</span><span class="text-theme fw-medium">+</span>
              </h2>
              <p class="box-text">Projects Completed</p>
            </div>
          </div>
          <div class="counter-card">
            <div class="media-body">
              <h2 class="box-number">
                <span class="counter-number">1</span>K<span
                  class="text-theme fw-medium">+</span>
              </h2>
              <p class="box-text">Daily Visits</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- feedback section  -->
  <section
    class="testi-sec-1 overflow-hidden space-top"
    id="testi-sec"
    data-opacity="9"
    data-overlay="title"
    data-bg-src="assets/img/bg/testi-sec1-bg.png">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-12">
          <div class="title-area text-center">
            <span class="sub-title style3"><span class="sub-title-shape icon-masking"><span
                  class="mask-icon"
                  data-mask-src="assets/img/bg/section-title-bg.svg"></span> </span>REVIEWS</span>
            <h2 class="sec-title mb-0">Loved by our customer worldwide</h2>
          </div>
          <div class="slider-area testi-slider1">
            <div
              class="swiper th-slider"
              id="testiSlide1"
              data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}},"effect":"slide","loop":false,"thumbs":{"swiper":".testi-grid-thumb"}}'>

              <div class="swiper-wrapper">
                <!-- review cards  -->
                <div class="swiper-slide">
                  <div
                    class="testi-card"
                    data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                    <p style="min-height: 130px;"
                      class="testi-card_text text-center">
                      “Great experience with Jack, I'm really thrilled with
                      the outcome of the project. Well done!”
                    </p>
                    <div class="testi-card_profile">
                      <div class="testi-card_content">
                        <div class="testi-card_avater">
                          <img
                            src="assets/img/testimonial/testi1-1.png"
                            alt="img" />
                        </div>
                        <h3 class="testi-card_name">DEMIAN MARTIN</h3>
                        <!-- <span class="testi-card_desig">Video Gamer</span> -->
                      </div>
                      <div class="quote-icon icon-masking">
                        <span
                          class="mask-icon"
                          data-mask-src="assets/img/icon/quote1-1.svg"></span>
                        <img src="assets/img/icon/quote1-1.svg" alt="icon" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div
                    class="testi-card"
                    data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                    <p style="min-height: 130px;"
                      class="testi-card_text text-center">
                      “Professional and efficient. <br> I will definitely work with
                      them <br> again.”
                    </p>
                    <div class="testi-card_profile">
                      <div class="testi-card_content">
                        <div class="testi-card_avater">
                          <img
                            src="assets/img/testimonial/testi1-2.png"
                            alt="img" />
                        </div>
                        <h3 class="testi-card_name">JOHN SMITH</h3>
                        <!-- <span class="testi-card_desig">Video Gamer</span> -->
                      </div>
                      <div class="quote-icon icon-masking">
                        <span
                          class="mask-icon"
                          data-mask-src="assets/img/icon/quote1-1.svg"></span>
                        <img src="assets/img/icon/quote1-1.svg" alt="icon" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div
                    class="testi-card"
                    data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                    <p style="min-height: 130px;"
                      class="testi-card_text text-center">
                      “Exceptional work and a smooth process from start to finish. Highly recommended!”
                    </p>
                    <div class="testi-card_profile">
                      <div class="testi-card_content">
                        <div class="testi-card_avater">
                          <img
                            src="assets/img/testimonial/testi1-3.png"
                            alt="img" />
                        </div>
                        <h3 class="testi-card_name">JANE DOE</h3>
                        <!-- <span class="testi-card_desig">Video Gamer</span> -->
                      </div>
                      <div class="quote-icon icon-masking">
                        <span
                          class="mask-icon"
                          data-mask-src="assets/img/icon/quote1-1.svg"></span>
                        <img src="assets/img/icon/quote1-1.svg" alt="icon" />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- repeating  -->
                <div class="swiper-slide">
                  <div
                    class="testi-card"
                    data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                    <p style="min-height: 130px;"
                      class="testi-card_text text-center">
                      “Great experience with Jack, I'm really thrilled with
                      the outcome of the project. Well done!”
                    </p>
                    <div class="testi-card_profile">
                      <div class="testi-card_content">
                        <div class="testi-card_avater">
                          <img
                            src="assets/img/testimonial/testi1-1.png"
                            alt="img" />
                        </div>
                        <h3 class="testi-card_name">DEMIAN MARTIN</h3>
                        <!-- <span class="testi-card_desig">Video Gamer</span> -->
                      </div>
                      <div class="quote-icon icon-masking">
                        <span
                          class="mask-icon"
                          data-mask-src="assets/img/icon/quote1-1.svg"></span>
                        <img src="assets/img/icon/quote1-1.svg" alt="icon" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div
                    class="testi-card"
                    data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                    <p style="min-height: 130px;"
                      class="testi-card_text text-center">
                      “Professional and efficient. <br> I will definitely work with
                      them <br> again.”
                    </p>
                    <div class="testi-card_profile">
                      <div class="testi-card_content">
                        <div class="testi-card_avater">
                          <img
                            src="assets/img/testimonial/testi1-2.png"
                            alt="img" />
                        </div>
                        <h3 class="testi-card_name">JOHN SMITH</h3>
                        <!-- <span class="testi-card_desig">Video Gamer</span> -->
                      </div>
                      <div class="quote-icon icon-masking">
                        <span
                          class="mask-icon"
                          data-mask-src="assets/img/icon/quote1-1.svg"></span>
                        <img src="assets/img/icon/quote1-1.svg" alt="icon" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div
                    class="testi-card"
                    data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                    <p style="min-height: 130px;"
                      class="testi-card_text text-center">
                      “Exceptional work and a smooth process from start to finish. Highly recommended!”
                    </p>
                    <div class="testi-card_profile">
                      <div class="testi-card_content">
                        <div class="testi-card_avater">
                          <img
                            src="assets/img/testimonial/testi1-3.png"
                            alt="img" />
                        </div>
                        <h3 class="testi-card_name">JANE DOE</h3>
                        <!-- <span class="testi-card_desig">Video Gamer</span> -->
                      </div>
                      <div class="quote-icon icon-masking">
                        <span
                          class="mask-icon"
                          data-mask-src="assets/img/icon/quote1-1.svg"></span>
                        <img src="assets/img/icon/quote1-1.svg" alt="icon" />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- review cards ended -->
              </div>

              <div class="slider-pagination"></div>
            </div>
            <button
              data-slider-prev="#testiSlide1"
              class="slider-arrow style2 slider-prev">
              <i class="far fa-arrow-left"></i>
            </button>
            <button
              data-slider-next="#testiSlide1"
              class="slider-arrow style2 slider-next">
              <i class="far fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contact section  -->
  <section class="space">
    <div
      class="contact-sec-1 bg-repeat overflow-hidden space"
      data-bg-src="assets/img/bg/jiji-bg2.png">
      <div class="container-fluid p-0">
        <div class="contact-wrap-1">
          <div class="row justify-content-between">
            <div class="col-xxl-5 col-xl-6">
              <div
                class="title-area custom-anim-left wow animated"
                data-wow-duration="1.5s"
                data-wow-delay="0.2s">
                <h2 class="sec-title text-white">
                  READY TO TAKE YOUR STREAMS IN THE RIGHT DIRECTION
                  <span class="text-theme">?</span>
                </h2>
                <span class="sub-title style2">Our design consultants will provide a comprehensive
                  approach to help drive your business success.</span>
              </div>
              <form
                action="https://html.themeholy.com/bame/demo/mail.php"
                method="POST"
                class="ajax-contact pb-xl-0 space-bottom custom-anim-left wow animated"
                data-wow-duration="1.5s"
                data-wow-delay="0.2s">
                <div class="row">
                  <div class="form-group style-border2 col-md-6">
                    <input
                      type="text"
                      class="form-control"
                      name="name"
                      id="name"
                      placeholder="Your Name" />
                    <i class="fal fa-user"></i>
                  </div>
                  <div class="form-group style-border2 col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Email Address" />
                    <i class="fal fa-envelope"></i>
                  </div>
                  <div class="form-group style-border2 col-md-6">
                    <input
                      type="text"
                      class="form-control"
                      name="number"
                      id="number"
                      placeholder="Phone Number" />
                    <i class="fal fa-phone"></i>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group style-border2">
                      <select
                        class="form-select"
                        aria-label="Default select example">
                        <option selected="selected">Subject</option>
                        <option value="1">Esports</option>
                        <option value="2">Tournament</option>
                        <option value="3">Sports</option>
                      </select>
                      <i class="fal fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="col-12 form-group style-border2">
                    <textarea
                      placeholder="Write Massage...."
                      class="form-control"></textarea>
                    <i class="far fa-pencil"></i>
                  </div>
                  <div class="form-btn col-12">
                    <button class="th-btn">
                      Send Message
                      <i class="fa-solid fa-arrow-right ms-2"></i>
                    </button>
                  </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
              </form>
            </div>
            <div class="col-xxl-5 col-xl-6">
              <div
                class="title-area custom-anim-left wow animated"
                data-wow-duration="1.5s"
                data-wow-delay="0.2s">
                <span class="sub-title style2"># Common Questions About Our Company</span>
                <h2 class="sec-title text-white">
                  Frequently Asked Questions About Our Esports & Gaming Site
                  <span class="text-theme">!</span>
                </h2>
              </div>
              <div
                class="accordion custom-anim-left wow animated"
                data-wow-duration="1.5s"
                data-wow-delay="0.2s"
                id="faqAccordion">
                <div class="accordion-card">
                  <div class="accordion-header" id="collapse-item-1">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapse-1"
                      aria-expanded="true"
                      aria-controls="collapse-1">
                      What game are you currently obsessed with, and why?
                    </button>
                  </div>
                  <div
                    id="collapse-1"
                    class="accordion-collapse collapse show"
                    aria-labelledby="collapse-item-1"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      <p class="faq-text">
                        The current meta in [popular game] heavily favors
                        [specific characters/weapons/strategies]. This has led
                        to a shift in gameplay dynamics, with players adapting
                        their strategies to stay competitive.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-card">
                  <div class="accordion-header" id="collapse-item-2">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapse-2"
                      aria-expanded="false"
                      aria-controls="collapse-2">
                      How do professional esports players train for
                      tournaments?
                    </button>
                  </div>
                  <div
                    id="collapse-2"
                    class="accordion-collapse collapse"
                    aria-labelledby="collapse-item-2"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      <p class="faq-text">
                        The current meta in [popular game] heavily favors
                        [specific characters/weapons/strategies]. This has led
                        to a shift in gameplay dynamics, with players adapting
                        their strategies to stay competitive.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-card">
                  <div class="accordion-header" id="collapse-item-3">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapse-3"
                      aria-expanded="false"
                      aria-controls="collapse-3">
                      What distinguishes a successful esports team from the
                      rest?
                    </button>
                  </div>
                  <div
                    id="collapse-3"
                    class="accordion-collapse collapse"
                    aria-labelledby="collapse-item-3"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      <p class="faq-text">
                        The current meta in [popular game] heavily favors
                        [specific characters/weapons/strategies]. This has led
                        to a shift in gameplay dynamics, with players adapting
                        their strategies to stay competitive.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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