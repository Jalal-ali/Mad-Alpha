<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Bame - Esports & Gaming HTML Template - Tournament</title>
  <meta name="author" content="Bame" />
  <meta name="description" content="Bame - Esports & Gaming HTML Template" />
  <meta name="keywords" content="Bame - Esports & Gaming HTML Template" />
  <meta name="robots" content="INDEX,FOLLOW" />
<link rel="icon" href="assets/img/feature/" type="image/png">

  <meta name="msapplication-TileColor" content="#ffffff" />
  <!-- <meta
    name="msapplication-TileImage"
    content="assets/img/favicons/ms-icon-144x144.png" /> -->
  <meta name="theme-color" content="#ffffff" />
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

    .masked-img  {
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

  <footer class="footer-wrapper footer-layout1">
    <div class="container">
      <div class="footer-top text-center">
        <div
          class="footer-logo bg-repeat"
          data-bg-src="assets/img/bg/jiji-bg.png">
          <a href="index.php"><span
              data-mask-src="assets/img/logo.svg"
              class="logo-mask"></span>
            <img src="assets/img/logo.svg" alt="Bame" /></a>
        </div>
        <div class="footer-links">
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="tournament.html">TOURNAMENT</a></li>
            <li><a href="blog.html">BLOG</a></li>
            <li><a href="gallery.html">GALLERY</a></li>
            <li><a href="contact.html">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="widget-area">
        <div class="row justify-content-between">
          <div class="col-md-6 col-lg-auto">
            <div class="widget footer-widget">
              <h3 class="widget_title">
                Office <span class="text-theme">Location:</span>
              </h3>
              <div class="th-widget-contact">
                <div class="info-box">
                  <p class="info-box_text">
                    Floor 2, 4 Naval St, Ancoats, Manchester M4 6EW, United
                    Kingdom
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-auto">
            <div class="widget footer-widget">
              <h3 class="widget_title">
                Contact <span class="text-theme">Information:</span>
              </h3>
              <div class="th-widget-contact">
                <div class="info-box">
                  <p class="info-box_text">
                    <a class="info-box_link" href="tel:163254736587">(+163)-2547-36587</a>
                    <a
                      class="info-box_link"
                      href="mailto:infohelp@bameexample.com">infohelp@bameexample.com</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-auto">
            <div class="widget footer-widget">
              <h3 class="widget_title">
                Follow <span class="text-theme">With Us:</span>
              </h3>
              <div class="th-widget-contact">
                <div class="th-social style-mask">
                  <a class="facebook" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                  <a class="twitter" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                  <a class="instagram" href="https://www.instagram.com/"><i class="fab fa-instagram"></i> </a><a class="linkedin" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                  <a class="google-play" href="https://www.google.com/"><img
                      src="assets/img/icon/google-playstore-icon.svg"
                      alt="icon" /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <form class="newsletter-form">
            <div class="form-group">
              <input
                class="form-control"
                type="email"
                placeholder="Subscribe to Our Newsletter"
                required="" />
              <button type="submit" class="th-btn">
                SUBSCRIBE NOW <i class="far fa-arrow-right ms-2"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div
      class="copyright-wrap text-center bg-repeat"
      data-bg-src="assets/img/bg/jiji-bg.png">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6">
            <p
              class="copyright-text bg-repeat"
              data-bg-src="assets/img/bg/jiji-bg.png">
              <i class="fal fa-copyright"></i> Copyright 2024
              <a href="index.php">Bame.</a> All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
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