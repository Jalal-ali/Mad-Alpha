<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="assets/logo/imgi_1_LOGO.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Author Info -->
  <meta name="author" content="Mad Alpha" />
  <title>Mad-&#945 | Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/app.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  
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
      <div class="col-lg-auto">
        <div
          class="title-area custom-anim-left wow animated"
          data-wow-duration="1.5s"
          data-wow-delay="0.2s">
          <h2 class="sec-title">
            Our portfolio design at its best <span class="text-theme">!</span>
          </h2>
          <span class="sub-title style2">Looking for design inspiration? Browse our portfolio to see our
            creative grind.</span>
          <a 
          href="contact.php"
          id="tab1-btn" class="th-btn style-border">
            <span class="btn-border">
              Get In Touch <i class="fa-solid fa-arrow-right ms-2"></i>
            </span>
          </a>
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
        <!-- <div class="col-lg-auto d-flex justify-content-center">
          <div
            class="sec-btn custom-anim-right wow animated"
            data-wow-duration="1.5s"
            data-wow-delay="0.2s">
            <a href="portfolio.php" class="th-btn">See All <i class="fa-solid fa-arrow-right ms-2"></i></a>
          </div>
        </div> -->
      </div>
    </div>
  </section>
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
            filter: drop-shadow(2px 1px 0.3px var(--theme-color));" class="sec-title main-heading self-center pt-5">Logo Designs</h2>
          </div>
        </div>
      </div>
      <!-- project images section  -->
      <div class="row gy-4 filter-active">
        <div class="col-lg-4 col-md-6 filter-item logo shadow-bg" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/1.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg logo" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/2.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg logo" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/3.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg web" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/4.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg web" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/5.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg web" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/1.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg design" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/2.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg design" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/3.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg design" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/4.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg branding" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/5.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg branding" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/3.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg branding" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/1.png" alt="game image" class="masked-img popup-trigger" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- Popup Modal -->
      <div id="image-popup" class="image-popup-overlay" style="display: none;">
        <span class="close-img-popup">&times;</span>
        <img style="filter: drop-shadow(0 2px 6px #1e1e1e9e);
        box-shadow: 0 0 0px rgba(0, 0, 0, 0) !important;" class="popup-img" src="" alt="Popup Image" />
      </div>
  

  <section
    class="overflow-hidden position-relative z-index-common"
    data-bg-src="assets/img/bg/about-bg2.png">

    <div class="gr-bg1 space-top">
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