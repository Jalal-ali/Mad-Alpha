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
  <script>
    $(document).ready(function() {
      $('.filter-active').isotope({
        filter: '*', // Make sure nothing is shown initially
        hiddenStyle: {
          opacity: 0 // or display: 'none' depending on your needs
        }
      });

      // Then apply the filter to show only the logos
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

    .game-filter-btnn .tab-wrapper .tab-btn.active,
    .game-filter-btnn .tab-wrapper .tab-btn:hover {
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
      position: absolute;
      z-index: 4;
      top: 58px;
      max-height: 0;
      overflow: hidden;
      transition: max-height 1.3s ease;
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
      color: #ebebeb;
      text-decoration: none;
      display: block;
      font-size: 13.5px;
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
          <button id="tab1-btn" class="th-btn style-border">
            <span class="btn-border">
              Get In Touch <i class="fa-solid fa-arrow-right ms-2"></i>
            </span>
          </button>
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
            filter: drop-shadow(2px 1px 0.3px var(--theme-color));" class="sec-title main-heading self-center pt-5">Stream Design</h2>
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

  <section
    class="overflow-hidden position-relative z-index-common"
    data-bg-src="assets/img/bg/about-bg2.png">

    <div class="gr-bg1 space-top">
    </div>
  </section>
  <!-- contact section  -->
  <section class="spac">
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
                <span class="sub-title style2">Our design consultants will provide a comprehensive approach
                  to help drive your business success.</span>
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
                      Send Message <i class="fa-solid fa-arrow-right ms-2"></i>
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
                      How do professional esports players train for tournaments?
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