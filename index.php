<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="assets/logo/imgi_1_LOGO.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Author Info -->
  <meta name="author" content="Mad Alpha" />
  <title>Mad-&#945 | Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/app.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>



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

    .faded-sec {
      position: relative;
      z-index: 1;
      text-align: center;
      /* padding-top: calc(110px + 20px); */
    }

    .faded-sec:after {
      content: "";
      position: absolute;
      inset: 0;
      background: -webkit-linear-gradient(bottom,
          #0b0e13 0%,
          rgba(11, 14, 19, 0.94) 46.17%,
          #0b0e13 100%);
      background: linear-gradient(0deg,
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


    /* ----------------------------3d character anim -----------------  */
    /* .character {
      text-align: center;
      transform-style: preserve-3d;
      perspective: 1200px;

    }

    .rotatable-image {
      width: 48rem;
      height: max-content;
      object-fit: cover;
      cursor: grab;
      transition: transform 0.1s ease-out;
      user-select: none;
      -webkit-user-drag: none;
      animation: flip 4s ease-in-out forwards;
    } */
    .character {
      position: relative;
      /* width: 300px; */
      height: auto;
      perspective: 1900px;
      animation: flip 4s ease-in-out forwards;
    }

    /* .rotatable-image {
            width: 50rem;
            height: 100%;
            object-fit: contain;
            transform-style: preserve-3d;
            transition: transform 0.1s linear;
            will-change: transform;
        } */

    /* Keyframes for the flip animation */
    @keyframes flip {
      0% {
        transform: rotateY(0deg);
      }

      25% {
        transform: rotateY(90deg);
      }

      50% {
        transform: rotateY(180deg);
      }

      75% {
        transform: rotateY(270deg);
      }

      100% {
        transform: rotateY(360deg);
      }
    }

    /* ----------------------------------intro video --------------------------- */
    video::-webkit-media-controls {
      display: none !important;
      /* Hides the default controls for WebKit browsers */
    }

    /* video {
      width: 100%;
      max-width: 600px;
      display: block;
    } */

    .video-wrapper {
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }
  

    .video-wrapper video {
    width: 100%;
    height: 80vh;
    object-fit: cover;
    display: block;
}
  </style>
  <script>
    $(document).ready(function() {
      // Open popup
      $('.open-review-popup').on('click', function() {
        $('.review-popup-overlay').fadeIn();
      });

      // Close popup
      $('.close-review-popup').on('click', function() {
        $('.review-popup-overlay').fadeOut();
      });

      // Optional: close when clicking outside popup-content
      $('.review-popup-overlay').on('click', function(e) {
        if ($(e.target).is('.review-popup-overlay')) {
          $(this).fadeOut();
        }
      });

      // Optional: Handle form submission
      $('#popupForm').on('submit', function(e) {
        e.preventDefault();
        alert('Form submitted!');
        $('.review-popup-overlay').fadeOut();
        // Add SMTP or AJAX code here
      });
    });
  </script>
</head>

<body>
  <!-- Floating Action Button  -->
  <div class="fab-wrapper">
    <div class="fab-icon main-fab">
      <i class="fas fa-plus"></i>
    </div>
    <!-- twitter-X  -->
    <div class="fab-icon child-fab">
      <a href="https://x.com/madalphadesigns?lang=en">
        <svg width="22" height="22" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
          <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
        </svg>
      </a>
    </div>
    <!-- freelancer  -->
    <div class="fab-icon child-fab">
      <a href="https://www.freelancer.com/u/madalphadesigns">
        <svg id="Layer_1" data-name="Layer 1" width="22" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 91.38">
          <defs>
            <style>
              .cls-1 {
                fill: #29b2fe;
              }
            </style>
          </defs>
          <title>freelancer</title>
          <path class="cls-1" d="M72.19,0l8.37,11.74L122.88,0Zm-44,91.38L51.08,69,37.3,54.19,28.18,91.38ZM68.7,0,56.46,11l20.59.77L68.7,0ZM21.11,0l4.42,9,24.23,1.51L21.11,0Zm13,46.73L52,13.33,0,10.52,34.09,46.73Zm2.08,2.11L53.08,67,71.73,48.72l5.79-34L54.79,13.51,36.17,48.84Zm0,0Z" />
        </svg>
      </a>
    </div>
  </div>
  <!-- Floating Action Button ended -->


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
          <!-- top character img  -->
          <!-- <div class="character">
            <img id="rotatable" src="assets/img/hero/CHARACTER.png" alt="Rotatable Image">
          </div> -->
          <!-- top img 2  -->
          <div
            class="title-img title-img-1 custom-anim-top wow animated"
            data-wow-duration="1.2s"
            data-wow-delay="0.1s">
            <span
              class="title-img-mask"
              data-mask-src="assets/img/hero/MAD-ALPHA.png"></span>
            <img src="assets/3d animation/mad-alpha-banner.png" alt="img" />
          </div>
        </div>
        <div
          class="btn-group custom-anim-top wow animated"
          data-wow-duration="1.2s"
          data-wow-delay="0.5s">
          <a href="contact.php" class="th-btn style-border2"><span class="btn-border">CONTACT US <i class="fa-solid fa-arrow-right ms-2"></i></span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- project content section  -->
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
              <img src="assets/img/Projects/1.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg logo" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/2.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg logo" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/3.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg web" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/4.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg web" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/5.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg web" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/1.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg design" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/2.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg design" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/3.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg design" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/4.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg branding" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/5.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg branding" style="display: block;">
          <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
            <div>
              <img src="assets/img/Projects/3.png" alt="game image" class="masked-img " />
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 filter-item shadow-bg branding" style="display: block;">
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
    class="pricing-sec-v2 space-bottom faded-sec"
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

  <!-- ------------------video section ---------------  -->
   <div class="video-wrapper">
  <video autoplay muted loop playsinline>
    <source src="assets/img/video/Mad-Alpha-Intro.mp4" type="video/mp4">
      <source src="movie.ogg" type="video/ogg">
    Your browser does not support the video tag.
  </video>
</div>


  <!-- old  -->
  <!-- <div
    class="video-area-1 overflow-hidden "
    style="
        background-image: url('assets/img/bg/video-sec2-bg.png');
        background-image: url('assets/img/bg/video-sec2-bg-shape.png');
      ">
    <video style="
    max-width: 100%;
    height: auto;
    justify-self: center;
    align-self: center;
    display: flex;
" width="500" height="240" loop autoplay muted>
      <source src="assets/img/video/Mad-Alpha-Intro.mp4" type="video/mp4">
      <source src="movie.ogg" type="video/ogg">
      Your browser does not support the video tag.
    </video> -->
    <!-- <div class="container">
      <div class="text-center">
        <a
          href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
          class="play-btn style4 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
      </div>
    </div> -->
  </div>
  <!-- discord community section  -->
  <section class="my-5">
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
              <a style="z-index: 30;" href="https://discord.gg/QbgRmkeu" class="th-btn">JOIN COMMUNITY <i class="fa-solid fa-arrow-right ms-2"></i></a>
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
  <!-------------------------------- feedback section  ---------------------------------------------------->
  <!-- add review Popup Modal -->
  <!-- Modal -->
  <div id="customModal" class="custom-modal-overlay">
    <div class="custom-modal-content">
      <span class="custom-modal-close">&times;</span>

      <form id="customModalForm">
        <h3 class="widget_title text-center mb-5">Add Your Review</h3>

        <input type="text" name="name" placeholder="Your Name" required /><br /><br />
        <textarea name="message" placeholder="Your Message" required></textarea><br /><br />
        <input
          type="file"
          accept="image/*"
          class="form-control file-input items-center"
          id="image-upload" /><br />
        <div class="btn-wrap justify-content-center">
          <button class="th-btn open-review-popup items-center" type="submit">Add Review</button>
        </div>
      </form>
    </div>
  </div>


  <!-- main feedback cards  -->
  <section
    class="testi-sec-1 overflow-hidden space-top faded-sec"
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
            <div class="btn-wrap justify-content-center my-5">
              <a href="javascript:void(0)" id="openModalBtn" class="th-btn open-review-popup">ADD REVIEW <i style="margin-bottom:3px;" class="fa-solid fa-plus ms-2"></i></a>
            </div>
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
                          <svg style=" fill: var(--theme-color)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 
                            13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                          </svg>
                          <!-- <img
                            src="assets/img/icon/review-user.svg"
                            alt="img" /> -->
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
                          <svg style=" fill: var(--theme-color)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 
                            13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                          </svg>
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
                          <svg style=" fill: var(--theme-color)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 
                            13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                          </svg>
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
                          <svg style=" fill: var(--theme-color)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 
                            13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                          </svg>
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
                          <svg style=" fill: var(--theme-color)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 
                            13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                          </svg>
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
                          <svg style=" fill: var(--theme-color)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 
                            13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                          </svg>
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
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const modal = document.getElementById("customModal");
      const openBtn = document.getElementById("openModalBtn");
      const closeBtn = document.querySelector(".custom-modal-close");

      // Open modal
      openBtn.addEventListener("click", () => {
        modal.classList.add("active");
      });

      // Close on "X"
      closeBtn.addEventListener("click", () => {
        modal.classList.remove("active");
      });

      // Close on outside click
      window.addEventListener("click", (e) => {
        if (e.target === modal) {
          modal.classList.remove("active");
        }
      });

      // Close on ESC key
      window.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
          modal.classList.remove("active");
        }
      });

      // Optional: handle form submit
      const form = document.getElementById("customModalForm");
      form.addEventListener("submit", function(e) {
        e.preventDefault();
        alert("Review submitted!");
        modal.classList.remove("active");
        form.reset();
      });
    });
  </script>

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

  <!-- <script>
    document.addEventListener('DOMContentLoaded', () => {
      const character = document.querySelector('.character');
      const image = document.getElementById('rotatable');
      const loading = document.querySelector('.loading');

      // Remove loading text when image loads
      image.onload = () => {
        loading.style.display = 'none';
      };

      // Fallback in case image fails to load
      setTimeout(() => {
        loading.style.display = 'none';
      }, 3000);

      // 3D effect parameters
      const maxRotation = 160; // Maximum tilt angle
      const perspectiveDepth = 1900; // Strength of 3D effect
      const movementFactor = 0.1; // How much the image follows cursor
      const scaleAmount = 1.03; // Hover scale effect

      // Get character center position
      const getCenter = () => {
        const rect = character.getBoundingClientRect();
        return {
          x: rect.left + rect.width / 2,
          y: rect.top + rect.height / 2
        };
      };

      // Mouse move handler
      const handleMouseMove = (e) => {
        const center = getCenter();
        const x = e.clientX - center.x;
        const y = e.clientY - center.y;

        // Calculate rotation based on mouse position
        const rotateY = (x / (character.offsetWidth / 2)) * maxRotation;
        const rotateX = -(y / (character.offsetHeight / 2)) * maxRotation;

        // Apply 3D transformation
        image.style.transform = `
                    perspective(${perspectiveDepth}px)
                    rotateX(${rotateX}deg)
                    rotateY(${rotateY}deg)
                    scale(${scaleAmount})
                `;

        // Parallax effect for depth
        const parallaxX = x * movementFactor * 0.1;
        const parallaxY = y * movementFactor * 0.1;
        image.style.transform += `translateX(${parallaxX}px) translateY(${parallaxY}px)`;
      };

      // Reset on mouse leave
      const handleMouseLeave = () => {
        image.style.transform = `
                    perspective(${perspectiveDepth}px)
                    rotateX(0)
                    rotateY(0)
                    scale(1)
                `;
      };

      // Event listeners
      character.addEventListener('mousemove', handleMouseMove);
      character.addEventListener('mouseleave', handleMouseLeave);

      // Handle window resize
      window.addEventListener('resize', () => {
        // Recalculate center position on resize
        getCenter();
      });
    });
  </script> -->
  <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>