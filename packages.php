<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from html.themeholy.com/bame/demo/team-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 19:32:39 GMT -->

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="assets/logo/imgi_1_LOGO.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Author Info -->
  <meta name="author" content="Mad Alpha" />
  <!-- <title>Mad-α | Packages</title> -->
  <title>Mad-&#945 | Packages</title>


  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/app.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <style>
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

    .projects-sec-v2 {
      position: relative;
      z-index: 1;
      text-align: center;
      /* padding-top: calc(110px + 20px); */
    }

    .projects-sec-v2:after {
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

    /*----------------------------------- tab buttons dropdown style ----------------------------------------- */
    .game-filter-btnn .tab-wrapper .tab-btn {
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

    .game-filter-btnn {
      background: #afafaf12;
      padding: 12px;
      gap: 12px;
      /* -webkit-clip-path: polygon(18px 0%, calc(100% - 18px) 0%, 100% 18px, 100% calc(100% - 18px), calc(100% - 18px) 100%, 18px 100%, 0% calc(100% - 18px), 0% 18px);
    clip-path: polygon(18px 0%, calc(100% - 18px) 0%, 100% 18px, 100% calc(100% - 18px), calc(100% - 18px) 100%, 18px 100%, 0% calc(100% - 18px), 0% 18px); */
      margin-bottom: 50px;
      z-index: -1;
    }

    .game-filter-btnn .tab-wrapper .tab-btn.active {
      background: var(--theme-color) !important;
      color: var(--title-color) !important;
    }

    .game-filter-btnn .tab-wrapper .tab-btn:hover {
      filter: drop-shadow(2px 2px 3px var(--theme-color));
      position: relative;
      /* Needed for the pseudo-element */
      z-index: 1;
      /* Ensures the stroke appears above other elements */
    }

    /* Add stroke using pseudo-element */
    .game-filter-btnn .tab-wrapper .tab-btn:hover::after {
      content: "";
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      border: 3px solid var(--theme-color);
      border-radius: 29px 0px;
      pointer-events: none;
      /* Allows clicks to pass through */
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
      position: absolute;
      z-index: 4;
      top: 56px;
      max-height: 0;
      overflow: hidden;
      /* transition: max-height 1.3s ease; */
      width: 100%;
      flex: 1 1 100%;
      padding: 0 7px;
      margin: 1px auto;
      backdrop-filter: blur(3px);
      background: #3836364d;
      box-shadow: 0px 0px 13px 20px rgba(0, 0, 0, 0.1);
    }


    .tab-wrapper:hover .dropdown {
      max-height: max-content;
      transition: max-height 0.3s ease;

      border-radius: 19px;
      -webkit-clip-path: polygon(15px 0%, calc(100% - 15px) 0%, 100% 15px, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0% calc(100% - 15px), 0% 15px);
      clip-path: polygon(15px 0%, calc(100% - 15px) 0%, 100% 15px, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0% calc(100% - 15px), 0% 15px);
      border: 0.175rem solid var(--theme-color);
    }

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
      color: #dfdfdf;
      text-decoration: none;
      display: block;
      font-size: 16px;
      font-family: 'Rajdhani';
      font-weight: 600;
    }


    .dropdown li:hover {
      transition-duration: 8ms;
      background: var(--theme-color);
      -webkit-clip-path: polygon(15px 0%, calc(100% - 15px) 0%, 100% 15px, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0% calc(100% - 15px), 0% 15px);
      clip-path: polygon(15px 0%, calc(100% - 15px) 0%, 100% 15px, 100% calc(100% - 15px), calc(100% - 15px) 100%, 15px 100%, 0% calc(100% - 15px), 0% 15px);
      padding: 8px 16px;

    }

    /* style of the anchor when li is hovered */
    .dropdown li:hover a {
      color: var(--black-color2);
      font-weight: bold;
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
      color: var(--black-color2);
      font-weight: bold;
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
  <!-- top section  -->
  <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
      <div class="col-lg-auto">
        <div
          class="title-area custom-anim-left wow animated"
          data-wow-duration="1.5s"
          data-wow-delay="0.2s">
          <h2 class="sec-title">Competitive Pricing Plans</h2>
          <span class="sub-title style2">Assisting you with complete brand development services for seed
            sized and monster sized organizations.</span>
          <a 
          href="contact.php"
          id="tab1-btn" class="th-btn style-border">
            <span class="btn-border">
              Talk to our experts <i class="fa-solid fa-arrow-right ms-2"></i>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- main body   -->
  <!-- projs section  -->
  <section class="game-area-3 overflow-hidden projects-sec-v2"
    data-bg-src="assets/img/bg/tournament-sec2-bg.png">
    <!-- <div class="about-bg-img shape-mockup background-image" data-top="0" data-left="0">
        <img src="assets/img/bg/tournament-sec1-bg.png" alt="img" />
      </div> -->
    <div class="container py-20">
      <div class="row justify-content-center text-center">
        <div class="col-lg-auto">
          <div class="mt-30 pb-25 title-area custom-anim-top wow" data-wow-duration="1.5s" data-wow-delay="0.2s">
            <!-- tab buttons -->
            <div class="game-filter-btnn filter-menu filter-menu-active">
              <!-- tab-wrappers ...  -->
              <div class="tab-wrapper">
                <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category active" data-filter=".logo" data-heading="Logo Designs">
                      <a href="javascript:void(0)">Logo Designs</a>
                    </li>
                    <li class="category" data-filter=".web" data-heading="Overlay Designs">
                      <a href="javascript:void(0)">Overlay Designs</a>
                    </li>
                    <li class="category" data-filter=".branding" data-heading="Emotes">
                      <a href="javascript:void(0)">Emotes</a>
                    </li>
                    <li class="category" data-filter=".design" data-heading="Sub Badges">
                      <a href="javascript:void(0)">Sub Badges</a>
                    </li>
                    <li class="category" data-filter=".logo" data-heading="banners">
                      <a href="javascript:void(0)">Banners</a>
                    </li>
                  </ul>
                </div>
                <button data-filter=".logo" class="tab-btn active" type="button">Stream Design</button>
              </div>
              <div class="tab-wrapper">
                <div class="dropdown">

                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="2D Models"><a href="javascript:void(0)">2D Models</a></li>
                    <li class="category " data-filter=".branding" data-heading="3D Models"><a href="javascript:void(0)">3D Models</a></li>
                  </ul>
                </div>
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Vtuber">Vtuber</button>
              </div>
              <div class="tab-wrapper">
                <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="Printable Designs"><a href="javascript:void(0)">Printable Designs</a></li>
                    <li class="category " data-filter=".branding" data-heading="Product Designs"><a href="javascript:void(0)">Product Designs</a></li>
                  </ul>
                </div>
                <button data-filter=".web" class="tab-btn" type="button" data-heading="3D Designs">3D Designs</button>
              </div>
              <div class="tab-wrapper">
                <!-- <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Printable designs</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Printable designs</a></li>
                  </ul>
                </div> -->
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Custom Gaming room">Custom Gaming room</button>
              </div>
              <div class="tab-wrapper">
                <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="Reference Sheet"><a href="javascript:void(0)">Reference Sheet</a></li>
                    <li class="category " data-filter=".branding" data-heading="Physical Fursuit"><a href="javascript:void(0)">Physical Fursuit</a></li>
                  </ul>
                </div>
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Fursuits">Fursuits</button>
              </div>
              <div class="tab-wrapper">
                <!-- <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Reference sheet</a></li>
                    <li class="category " data-filter=".branding" data-heading="models"><a href="javascript:void(0)">Physical fursuit</a></li>
                  </ul>
                </div> -->
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Ebook">Ebook</button>
              </div>
              <div class="tab-wrapper">
                <button data-filter=".web" class="tab-btn" type="button" data-heading="Websites">Websites</button>
                <div class="dropdown">
                  <ul class="filter-menu-active">
                    <li class="category " data-filter=".branding" data-heading="Custom"><a href="javascript:void(0)">Custom</a></li>
                    <li class="category " data-filter=".branding" data-heading="Shopify"><a href="javascript:void(0)">Shopify</a></li>
                    <li class="category " data-filter=".branding" data-heading="Wordpress"><a href="javascript:void(0)">Wordpress</a></li>
                    <li class="category " data-filter=".branding" data-heading="Ui/Ux"><a href="javascript:void(0)">Ui/Ux</a></li>
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
                    <li class="category " data-filter=".branding" data-heading="Logo Intros"><a href="javascript:void(0)">Logo Intros</a></li>
                    <li class="category " data-filter=".branding" data-heading="Custom Animations"><a href="javascript:void(0)">Custom Animations</a></li>
                    <li class="category " data-filter=".branding" data-heading="Product Animations"><a href="javascript:void(0)">Product Animations</a></li>
                  </ul>
                </div>
              </div>
              <!-- tab-wrapper ended ...  -->
            </div>
            <!-- tab-buttons ended ...  -->

            <!-- heading  -->
            <h2 style=" color :var(--smoke-color);
            letter-spacing: 1px;
            filter: drop-shadow(2px 1px 0.3px var(--theme-color));" class="sec-title main-heading self-center pt-5">Packages</h2>
          </div>
        </div>
      </div>
      
    </div>
  </section>
   
 
  <!-- pricing section  -->
  <section
    class="pricing-sec-v2 space-bottom"
    data-bg-src="assets/img/bg/tournament-sec2-bg.png">
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
  <!-- img with content section lft/ryt  -->
  <section class="container  mb-30">
    <div class="row no-gutters gy-80">

      <div class="col-xl-7 self-center">
        <div class="team-about-card custom-anim-left wow animated">
          <div class="title-area mb-0">
            <h2 class="sec-title">
              WE EXCEL AT WHAT WE DO & TAKE PRIDE IN HOW WE DO IT
              <span class="text-theme">!</span>
            </h2>
          </div>
          <p class="about-card_text mt-30 mb-25">
            We are one of US's technology driven company and do our best to
            enable quality
            <span class="text-theme">solutions</span>. Staying ahead of the
            competition is no easy feat. and we have invested years in
            acquiring the <span class="text-theme">knowledge</span> and
            <span class="text-theme">expertise</span> that have enabled us
            to become one of a market kinds.
          </p>
          <a href="contact.php" class="th-btn">
            Talk to our experts<i class="fa-solid fa-arrow-right ms-2"></i></a>

        </div>
      </div>
      <div class="col-xl-5">
        <div class="img ">
          <img class="animated-img" src="assets/img/updated-pics/Layer 4 new.png" alt="team image" />
        </div>
      </div>
    </div>
  </section>

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