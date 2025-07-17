<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <!-- Mirrored from html.themeholy.com/bame/demo/game-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 19:32:41 GMT -->
  <head>
      <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="assets/logo/imgi_1_LOGO.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Author Info -->
  <meta name="author" content="Mad Alpha" />
  <title>Mad-&#945 | Policy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Rajdhani:wght@300;400;500;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/app.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
      .policy-list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        gap: 12px;
      }

      .policy-list li {
        position: relative;
        padding-left: 24px;
        font-size: 16px;
        line-height: 1.5;
        color: rgb(146, 143, 143);
        font: var(--title-font);
        font-weight: 300;
      }

      .policy-list li::before {
        content: "";
        position: absolute;
        top: 0.5em;
        left: 0;
        width: 10px;
        height: 10px;
        border: 2px solid var(--theme-color);
        border-radius: 50%;
        background: transparent;
      }

      /* Responsive: 2 per row on tablet */
      @media (max-width: 1024px) {
        .policy-list li {
          flex: 1 1 calc(50% - 40px);
        }
      }

      /* Responsive: 1 per row on mobile */
      @media (max-width: 600px) {
        .policy-list li {
          flex: 1 1 100%;
        }
      }
      .alt_title {
        color: var(--theme-color);
        font-family: var(--title-font);
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
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">PRIVACY POLICY</h1>
        </div>
      </div>
    </div>

    <!-- Main section  -->
    <section class="space">
      <div class="container">
        <!-- OUR PRIVACY POLICY section  -->
        <div class="team-about-card">
          <div class="title-area mb-0">
            <h2 class="sec-title" style="margin-bottom: 10px !important">
              OUR PRIVACY POLICY
            </h2>
          </div>
          <ul class="policy-list">
            <li>
              Only image references, text references, and design commissions of
              the to-be-drawn characters will be accepted at this time.
            </li>
            <li>
              You as the commissioner are responsible for the quality of your
              references. Please make sure your requests and references are
              up-to-date, clear, and concise, or you might not receive an
              accurate depiction of your character.
            </li>
            <li>
              We, the artist, have not started your request, you can amend the
              request by submitting the provided form again with all the
              required information. You, as the commissioner, are responsible
              for providing all of the information for your request in one form.
            </li>
            <li>
              Completed commissions are not permitted to be edited or colored by
              another artist, including the commissioner. Cropping for profile
              pictures is allowed as the one exception.
            </li>
            <li>
              We, the artist, will not be held accountable to correct or adjust
              commissions due to unclear or undefined information provided by
              the commissioner in the order form. We, the artist, will be
              accountable to correct or adjust commissions where we have failed
              to follow provided reference material and requests.
            </li>
            <li>
              If artwork needs additional edits and the fault lies in the
              provided reference material by the commissioner, edits may be
              requested without an additional fee.
            </li>
          </ul>
        </div>
        <!-- disclaimer section  -->
        <div style="margin-top: 5rem" class="team-about-card">
          <div class="title-area mb-0">
            <h2 class="sec-title" style="margin-bottom: 10px !important">
              DISCLAIMER
            </h2>
          </div>
          <ul class="policy-list">
            <li>
              We reserve the right to refund a commission at any time if we feel
              we are unable to complete the request.
            </li>
            <li>
              We reserve the right to update or clarify any of these conditions
              at any time or as needed to better protect myself as the artist
              and you as the commissioner from misunderstanding or wrongful
              harm.
            </li>
          </ul>
        </div>
        <!-- Payment section  -->
        <div style="margin-top: 5rem" class="team-about-card">
          <div class="title-area mb-0">
            <h2 class="sec-title" style="margin-bottom: 10px !important">
              PAYMENT
            </h2>
            <h4 class="alt_title">USD CURRENCY</h4>
          </div>
          <ul class="policy-list">
            <li>
              We, the artist, require payment of
              <span class="text-theme">30%</span> upfront before we start
              drawing.
            </li>
            <li>
              If we, the artist, have not started your request, you can amend
              the request by submitting the provided form again with all the
              required information. You, as the commissioner, are responsible
              for providing all of the information for your request in one form.
            </li>
            <li>
              If you make a payment below <span class="text-theme">30%</span>,
              the prices will increase; if you make more than
              <span class="text-theme">50%</span> payment, you will get an
              additional discount.
            </li>
            <li>
              Even though we are a SFW artist, all commissioned work must be
              ordered by persons who are <span class="text-theme">18+</span> and
              can legally agree to these terms.
            </li>
          </ul>
        </div>
        <!-- invoice section  -->
        <div style="margin-top: 5rem" class="team-about-card">
          <div class="title-area mb-0">
            <h2 class="sec-title" style="margin-bottom: 10px !important">
              INVOICE CONTRACT
            </h2>
          </div>
          <ul class="policy-list">
            <li>
              You are agreeing to pay the price for the artist to perform a
              service to produce your request.
            </li>
            <li>
              Once you pay the invoice, you agree to all terms and conditions
              listed here, and the work is bound by contract refunds and time
              frame.
            </li>
            <li>Refunds are not offered for contracted work.</li>
            <li>
              If we, the artist, are unable to complete the request, a refund
              will be provided.
            </li>
            <li>
              The time frame for completion is between
              <span class="text-theme">2 to 6</span> weeks.
            </li>
            <li>
              If 8 weeks pass and no work has been completed by the artist, this
              is a breach of contract. The client can ask for a full refund at
              this time or continue to wait for the art of their choice.
            </li>
          </ul>
        </div>
        <!-- WIPS section  -->
        <div style="margin-top: 5rem" class="team-about-card">
          <div class="title-area mb-0">
            <h2 class="sec-title" style="margin-bottom: 10px !important">
              WIPS <span class="alt_title">(WORK IN PROGRESS SCREEN-CAPS)</span>
            </h2>
          </div>
          <div class="checklist list-two-column">
            <ul>
              <li>
                <i class="far fa-shield-check"></i>You will be provided with a
                WIP preview at every stage of the project.
              </li>
            </ul>
          </div>
        </div>
        <!-- ART AND ARTISTIC section  -->
        <div style="margin-top: 5rem" class="team-about-card">
          <div class="title-area mb-0">
            <h2 class="sec-title" style="margin-bottom: 10px !important">
              ART AND ARTISTIC RIGHTS
            </h2>
          </div>
          <ul class="policy-list">
            <li>
              We, the artist, reserve all artistic rights to commissioned work.
              We, the artist, may use artwork in online or physical galleries,
              portfolios, printed material, any form of publication, or
              distribution with credit to the commissioner for commission
              credits unless the commission is purchased as a work for hire at
              the time of the initial order.
            </li>
            <li>
              You, as the commissioner, may use commissioned work for personal
              display, pending artist credits/gallery links are posted with the
              display back to the artist. (i.e., online icons, online
              signatures, layouts, wallpapers, social sites, etc.)
            </li>
            <li>
              We, as the artist, will deliver the final product of the
              commission to the person who purchased the artwork when it is
              completed. Public posts of the artwork by the artist will credit
              the commissioner and whom the piece depicts.
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- contact section  -->
    <section class="space">
      <div
        class="contact-sec-1 bg-repeat overflow-hidden space"
        data-bg-src="assets/img/bg/jiji-bg2.png"
      >
        <div class="container-fluid p-0">
          <div class="contact-wrap-1">
            <div class="row justify-content-between">
              <div class="col-xxl-5 col-xl-6">
                <div
                  class="title-area custom-anim-left wow animated"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.2s"
                >
                  <h2 class="sec-title text-white">
                    READY TO TAKE YOUR STREAMS IN THE RIGHT DIRECTION
                    <span class="text-theme">?</span>
                  </h2>
                  <span class="sub-title style2"
                    >Our design consultants will provide a comprehensive
                    approach to help drive your business success.</span
                  >
                </div>
                <form
                  action="https://html.themeholy.com/bame/demo/mail.php"
                  method="POST"
                  class="ajax-contact pb-xl-0 space-bottom custom-anim-left wow animated"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.2s"
                >
                  <div class="row">
                    <div class="form-group style-border2 col-md-6">
                      <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        placeholder="Your Name"
                      />
                      <i class="fal fa-user"></i>
                    </div>
                    <div class="form-group style-border2 col-md-6">
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder="Email Address"
                      />
                      <i class="fal fa-envelope"></i>
                    </div>
                    <div class="form-group style-border2 col-md-6">
                      <input
                        type="text"
                        class="form-control"
                        name="number"
                        id="number"
                        placeholder="Phone Number"
                      />
                      <i class="fal fa-phone"></i>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group style-border2">
                        <select
                          class="form-select"
                          aria-label="Default select example"
                        >
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
                        class="form-control"
                      ></textarea>
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
                  data-wow-delay="0.2s"
                >
                  <span class="sub-title style2"
                    ># Common Questions About Our Company</span
                  >
                  <h2 class="sec-title text-white">
                    Frequently Asked Questions About Our Esports & Gaming Site
                    <span class="text-theme">!</span>
                  </h2>
                </div>
                <div
                  class="accordion custom-anim-left wow animated"
                  data-wow-duration="1.5s"
                  data-wow-delay="0.2s"
                  id="faqAccordion"
                >
                  <div class="accordion-card">
                    <div class="accordion-header" id="collapse-item-1">
                      <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse-1"
                        aria-expanded="true"
                        aria-controls="collapse-1"
                      >
                        What game are you currently obsessed with, and why?
                      </button>
                    </div>
                    <div
                      id="collapse-1"
                      class="accordion-collapse collapse show"
                      aria-labelledby="collapse-item-1"
                      data-bs-parent="#faqAccordion"
                    >
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
                        aria-controls="collapse-2"
                      >
                        How do professional esports players train for
                        tournaments?
                      </button>
                    </div>
                    <div
                      id="collapse-2"
                      class="accordion-collapse collapse"
                      aria-labelledby="collapse-item-2"
                      data-bs-parent="#faqAccordion"
                    >
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
                        aria-controls="collapse-3"
                      >
                        What distinguishes a successful esports team from the
                        rest?
                      </button>
                    </div>
                    <div
                      id="collapse-3"
                      class="accordion-collapse collapse"
                      aria-labelledby="collapse-item-3"
                      data-bs-parent="#faqAccordion"
                    >
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
        viewBox="-1 -1 102 102"
      >
        <path
          d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
          style="
            transition: stroke-dashoffset 10ms linear 0s;
            stroke-dasharray: 307.919, 307.919;
            stroke-dashoffset: 307.919;
          "
        ></path>
      </svg>
    </div>
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
  <!-- Mirrored from html.themeholy.com/bame/demo/game-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 19:32:42 GMT -->
</html>
