!(function (t) {
  "use strict";
  function e(e) {
    t(e).length > 0 &&
      t(e).each(function () {
        var e = t(this).find("a");
        t(this)
          .find(e)
          .each(function () {
            t(this).on("click", function () {
              var e = t(this.getAttribute("href"));
              e.length &&
                (event.preventDefault(),
                t("html, body")
                  .stop()
                  .animate({ scrollTop: e.offset().top - 10 }, 1e3));
            });
          });
      });
  }
  if (
    (t(window).on("load", function () {
      t(".preloader").fadeOut(),
        new WOW({
          boxClass: "wow",
          animateClass: "animated",
          offset: 0,
          mobile: !1,
          live: !0,
        }).init();
    }),
    t(".preloader").length > 0 &&
      t(".preloaderCls").each(function () {
        t(this).on("click", function (e) {
          e.preventDefault(), t(".preloader").css("display", "none");
        });
      }),
    (t.fn.thmobilemenu = function (e) {
      var a = t.extend(
        {
          menuToggleBtn: ".th-menu-toggle",
          bodyToggleClass: "th-body-visible",
          subMenuClass: "th-submenu",
          subMenuParent: "menu-item-has-children",
          thSubMenuParent: "th-item-has-children",
          subMenuParentToggle: "th-active",
          meanExpandClass: "th-mean-expand",
          appendElement: '<span class="th-mean-expand"></span>',
          subMenuToggleClass: "th-open",
          toggleSpeed: 400,
        },
        e
      );
      return this.each(function () {
        var e = t(this);
        function n() {
          e.toggleClass(a.bodyToggleClass);
          var n = "." + a.subMenuClass;
          t(n).each(function () {
            t(this).hasClass(a.subMenuToggleClass) &&
              (t(this).removeClass(a.subMenuToggleClass),
              t(this).css("display", "none"),
              t(this).parent().removeClass(a.subMenuParentToggle));
          });
        }
        e.find("." + a.subMenuParent).each(function () {
          var e = t(this).find("ul");
          e.addClass(a.subMenuClass),
            e.css("display", "none"),
            t(this).addClass(a.subMenuParent),
            t(this).addClass(a.thSubMenuParent),
            t(this).children("a").append(a.appendElement);
        });
        var s = "." + a.thSubMenuParent + " > a";
        t(s).each(function () {
          t(this).on("click", function (e) {
            var n, s;
            e.preventDefault(),
              (n = t(this).parent()),
              (s = n.children("ul")).length > 0 &&
                (n.toggleClass(a.subMenuParentToggle),
                s.slideToggle(a.toggleSpeed),
                s.toggleClass(a.subMenuToggleClass));
          });
        }),
          t(a.menuToggleBtn).each(function () {
            t(this).on("click", function () {
              n();
            });
          }),
          e.on("click", function (t) {
            t.stopPropagation(), n();
          }),
          e.find("div").on("click", function (t) {
            t.stopPropagation();
          });
      });
    }),
    t(".th-menu-wrapper").thmobilemenu(),
    t(window).scroll(function () {
      t(this).scrollTop() > 500
        ? (t(".sticky-wrapper").addClass("sticky"),
          t(".category-menu").addClass("close-category"))
        : (t(".sticky-wrapper").removeClass("sticky"),
          t(".category-menu").removeClass("close-category"));
    }),
    t(".menu-expand").each(function () {
      t(this).on("click", function (e) {
        e.preventDefault(), t(".category-menu").toggleClass("open-category");
      });
    }),
    e(".onepage-nav"),
    e(".scroll-down"),
    t(window).on("load resize", function () {
      t("body").height() < t(window).height()
        ? t(".footer-layout1").addClass("sticky-footer")
        : t(".footer-layout1").removeClass("sticky-footer");
    }),
    t(".scroll-top").length > 0)
  ) {
    var a = document.querySelector(".scroll-top"),
      n = document.querySelector(".scroll-top path"),
      s = n.getTotalLength();
    (n.style.transition = n.style.WebkitTransition = "none"),
      (n.style.strokeDasharray = s + " " + s),
      (n.style.strokeDashoffset = s),
      n.getBoundingClientRect(),
      (n.style.transition = n.style.WebkitTransition =
        "stroke-dashoffset 10ms linear");
    var i = function () {
      var e = t(window).scrollTop(),
        a = t(document).height() - t(window).height(),
        i = s - (e * s) / a;
      n.style.strokeDashoffset = i;
    };
    i(), t(window).scroll(i);
    jQuery(window).on("scroll", function () {
      jQuery(this).scrollTop() > 50
        ? jQuery(a).addClass("show")
        : jQuery(a).removeClass("show");
    }),
      jQuery(a).on("click", function (t) {
        return (
          t.preventDefault(),
          jQuery("html, body").animate({ scrollTop: 0 }, 750),
          !1
        );
      });
  }
  t("[data-bg-src]").length > 0 &&
    t("[data-bg-src]").each(function () {
      var e = t(this).attr("data-bg-src");
      t(this).css("background-image", "url(" + e + ")"),
        t(this).removeAttr("data-bg-src").addClass("background-image");
    }),
    t("[data-bg-color]").length > 0 &&
      t("[data-bg-color]").each(function () {
        var e = t(this).attr("data-bg-color");
        t(this).css("background-color", e), t(this).removeAttr("data-bg-color");
      }),
    t("[data-border]").each(function () {
      var e = t(this).data("border");
      t(this).css("--th-border-color", e);
    }),
    t("[data-mask-src]").length > 0 &&
      t("[data-mask-src]").each(function () {
        var e = t(this).attr("data-mask-src");
        t(this).css({
          "mask-image": "url(" + e + ")",
          "-webkit-mask-image": "url(" + e + ")",
        }),
          t(this).addClass("bg-mask"),
          t(this).removeAttr("data-mask-src");
      }),
    t(".th-slider").each(function () {
      var e = t(this),
        a = t(this).data("slider-options"),
        n = e.find(".slider-prev"),
        s = e.find(".slider-next"),
        i = e.find(".slider-pagination"),
        o = a.autoplay,
        r = {
          slidesPerView: 1,
          spaceBetween: a.spaceBetween ? a.spaceBetween : 24,
          loop: 0 != a.loop,
          speed: a.speed ? a.speed : 1e3,
          autoplay: o || { delay: 6e3, disableOnInteraction: !1 },
          navigation: { nextEl: s.get(0), prevEl: n.get(0) },
          pagination: {
            el: i.get(0),
            clickable: !0,
            renderBullet: function (t, e) {
              return (
                '<span class="' +
                e +
                '" aria-label="Go to Slide ' +
                (t + 1) +
                '"></span>'
              );
            },
          },
        },
        c = JSON.parse(e.attr("data-slider-options"));
      c = t.extend({}, r, c);
      new Swiper(e.get(0), c);
      t(".slider-area").length > 0 &&
        t(".slider-area").closest(".container").parent().addClass("arrow-wrap");
    }),
    t("[data-ani]").each(function () {
      var e = t(this).data("ani");
      t(this).addClass(e);
    }),
    t("[data-ani-delay]").each(function () {
      var e = t(this).data("ani-delay");
      t(this).css("animation-delay", e);
    }),
    t("[data-slider-prev], [data-slider-next]").on("click", function () {
      var e = t(this).data("slider-prev") || t(this).data("slider-next"),
        a = t(e);
      if (a.length) {
        var n = a[0].swiper;
        n && (t(this).data("slider-prev") ? n.slidePrev() : n.slideNext());
      }
    }),
    (t.fn.activateSliderThumbs = function (e) {
      var a = t.extend({ sliderTab: !1, tabButton: ".tab-btn" }, e);
      return this.each(function () {
        var e = t(this),
          n = e.find(a.tabButton),
          s = t('<span class="indicator"></span>').appendTo(e),
          i = e.data("slider-tab"),
          o = t(i)[0].swiper;
        if (
          (n.on("click", function (e) {
            e.preventDefault();
            var n = t(this);
            if (
              (n.addClass("active").siblings().removeClass("active"),
              l(n),
              a.sliderTab)
            ) {
              var s = n.index();
              o.slideTo(s);
            }
          }),
          a.sliderTab)
        ) {
          o.on("slideChange", function () {
            var t = o.realIndex,
              e = n.eq(t);
            e.addClass("active").siblings().removeClass("active"), l(e);
          });
          var r = o.activeIndex,
            c = n.eq(r);
          c.addClass("active").siblings().removeClass("active"), l(c);
        }
        function l(t) {
          var e = t.position(),
            a = parseInt(t.css("margin-top")) || 0,
            n = parseInt(t.css("margin-left")) || 0;
          s.css("--height-set", t.outerHeight() + "px"),
            s.css("--width-set", t.outerWidth() + "px"),
            s.css("--pos-y", e.top + a + "px"),
            s.css("--pos-x", e.left + n + "px");
        }
      });
    }),
    t(".hero-thumb").length &&
      t(".hero-thumb").activateSliderThumbs({
        sliderTab: !0,
        tabButton: ".tab-btn",
      });
  var o,
    r,
    c,
    l = ".ajax-contact",
    d = '[name="email"]',
    u = t(".form-messages");
  function h() {
    var e = t(l).serialize();
    (function () {
      var e,
        a = !0;
      function n(n) {
        n = n.split(",");
        for (var s = 0; s < n.length; s++)
          (e = l + " " + n[s]),
            t(e).val()
              ? (t(e).removeClass("is-invalid"), (a = !0))
              : (t(e).addClass("is-invalid"), (a = !1));
      }
      n(
        '[name="name"],[name="email"],[name="subject"],[name="number"],[name="message"]'
      ),
        t(d).val() &&
        t(d)
          .val()
          .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
          ? (t(d).removeClass("is-invalid"), (a = !0))
          : (t(d).addClass("is-invalid"), (a = !1));
      return a;
    })() &&
      jQuery
        .ajax({ url: t(l).attr("action"), data: e, type: "POST" })
        .done(function (e) {
          u.removeClass("error"),
            u.addClass("success"),
            u.text(e),
            t(l + ' input:not([type="submit"]),' + l + " textarea").val("");
        })
        .fail(function (t) {
          u.removeClass("success"),
            u.addClass("error"),
            "" !== t.responseText
              ? u.html(t.responseText)
              : u.html(
                  "Oops! An error occured and your message could not be sent."
                );
        });
  }
  function p(e, a, n, s) {
    t(a).on("click", function (a) {
      a.preventDefault(), t(e).addClass(s);
    }),
      t(e).on("click", function (a) {
        a.stopPropagation(), t(e).removeClass(s);
      }),
      t(e + " > div").on("click", function (a) {
        a.stopPropagation(), t(e).addClass(s);
      }),
      t(n).on("click", function (a) {
        a.preventDefault(), a.stopPropagation(), t(e).removeClass(s);
      });
  }
  function f(t) {
    return parseInt(t, 10);
  }
  t(l).on("submit", function (t) {
    t.preventDefault(), h();
  }),
    (o = ".popup-search-box"),
    (r = ".searchClose"),
    (c = "show"),
    t(".searchBoxToggler").on("click", function (e) {
      e.preventDefault(), t(o).addClass(c);
    }),
    t(o).on("click", function (e) {
      e.stopPropagation(), t(o).removeClass(c);
    }),
    t(o)
      .find("form")
      .on("click", function (e) {
        e.stopPropagation(), t(o).addClass(c);
      }),
    t(r).on("click", function (e) {
      e.preventDefault(), e.stopPropagation(), t(o).removeClass(c);
    }),
    p(".sidemenu-cart", ".sideMenuToggler", ".sideMenuCls", "show"),
    p(".sidemenu-info", ".sideMenuInfo", ".sideMenuCls", "show"),
    t(".popup-image").magnificPopup({
      type: "image",
      mainClass: "mfp-zoom-in",
      removalDelay: 260,
      gallery: { enabled: !0 },
    }),
    t(".popup-video").magnificPopup({
      type: "iframe",
      mainClass: "mfp-zoom-in",
      removalDelay: 260,
    }),
    t(".popup-content").magnificPopup({ type: "inline", midClick: !0 }),
    (t.fn.sectionPosition = function (e, a) {
      t(this).each(function () {
        var n,
          s,
          i,
          o,
          r,
          c = t(this);
        (n = Math.floor(c.height() / 2)),
          (s = c.attr(e)),
          (i = c.attr(a)),
          (o = f(t(i).css("padding-top"))),
          (r = f(t(i).css("padding-bottom"))),
          "top-half" === s
            ? (t(i).css("padding-bottom", r + n + "px"),
              c.css("margin-top", "-" + n + "px"))
            : "bottom-half" === s &&
              (t(i).css("padding-top", o + n + "px"),
              c.css("margin-bottom", "-" + n + "px"));
      });
    });
  t("[data-sec-pos]").length &&
    t("[data-sec-pos]").imagesLoaded(function () {
      t("[data-sec-pos]").sectionPosition("data-sec-pos", "data-pos-for");
    }),
    t(".filter-active").imagesLoaded(function () {
      if (t(".filter-active").length > 0) {
        var e = t(".filter-active").isotope({
          itemSelector: ".filter-item",
          filter: "*",
          masonry: {},
        });
            t(".filter-menu-active").on("click", "button", function (ev) {
      ev.preventDefault();

      var $this = t(this);
      var filter = $this.attr("data-filter");

      // Filter isotope items
      e.isotope({ filter: filter });

      // Remove 'active' from all, then add to clicked button
      t(".filter-menu-active button").removeClass("active");
      $this.addClass("active");
    });

      }
    }),
    t(".masonary-active, .woocommerce-Reviews .comment-list").imagesLoaded(
      function () {
        var e = ".masonary-active, .woocommerce-Reviews .comment-list";
        t(e).length > 0 &&
          t(e).isotope({
            itemSelector: ".filter-item, .woocommerce-Reviews .comment-list li",
            filter: "*",
            masonry: { columnWidth: 1 },
          }),
          t('[data-bs-toggle="tab"]').on("shown.bs.tab", function (a) {
            t(e).isotope({ filter: "*" });
          });
      }
    ),
    t(".filter-active-cat1").imagesLoaded(function () {
      if (t(".filter-active-cat1").length > 0) {
        var e = t(".filter-active-cat1").isotope({
          itemSelector: ".filter-item",
          filter: ".cat1",
          masonry: { columnWidth: 1 },
        });
        t(".filter-menu-cat-active").on("click", "button", function () {
          var a = t(this).attr("data-filter");
          e.isotope({ filter: a });
        }),
          t(".filter-menu-cat-active").on("click", "button", function (e) {
            e.preventDefault(),
              t(this).addClass("active"),
              t(this).siblings(".active").removeClass("active");
          });
      }
    }),
    t(".counter-number").counterUp({ delay: 10, time: 1e3 }),
    (t.fn.shapeMockup = function () {
      t(this).each(function () {
        var e = t(this),
          a = e.data("top"),
          n = e.data("right"),
          s = e.data("bottom"),
          i = e.data("left");
        e.css({ top: a, right: n, bottom: s, left: i })
          .removeAttr("data-top")
          .removeAttr("data-right")
          .removeAttr("data-bottom")
          .removeAttr("data-left")
          .parent()
          .addClass("shape-mockup-wrap");
      });
    }),
    t(".shape-mockup") && t(".shape-mockup").shapeMockup(),
    t(".progress-bar").waypoint(
      function () {
        t(".progress-bar").css({
          animation: "animate-positive 1.8s",
          opacity: "1",
        });
      },
      { offset: "75%" }
    ),
    (t.fn.countdown = function () {
      t(this).each(function () {
        var e = t(this),
          a = new Date(e.data("offer-date")).getTime();
        function n(t) {
          return e.find(t);
        }
        var s = setInterval(function () {
          var t = new Date().getTime(),
            i = a - t,
            o = Math.floor(i / 864e5),
            r = Math.floor((i % 864e5) / 36e5),
            c = Math.floor((i % 36e5) / 6e4),
            l = Math.floor((i % 6e4) / 1e3);
          o < 10 && (o = "0" + o),
            r < 10 && (r = "0" + r),
            c < 10 && (c = "0" + c),
            l < 10 && (l = "0" + l),
            i < 0
              ? (clearInterval(s),
                e.addClass("expired"),
                e.find(".message").css("display", "block"))
              : (n(".day").html(o),
                n(".hour").html(r),
                n(".minute").html(c),
                n(".seconds").html(l));
        }, 1e3);
      });
    }),
    t(".counter-list").length && t(".counter-list").countdown();
  const m = {};
  function g() {
    const e = t(this),
      a = e.attr("src");
    if (!m[a]) {
      const e = t.Deferred();
      t.get(a, (a) => {
        e.resolve(t(a).find("svg"));
      }),
        (m[a] = e.promise());
    }
    m[a].then((a) => {
      const n = t(a).clone();
      e.attr("id") && n.attr("id", e.attr("id")),
        e.attr("class") && n.attr("class", e.attr("class")),
        e.attr("style") && n.attr("style", e.attr("style")),
        e.attr("width") &&
          (n.attr("width", e.attr("width")),
          e.attr("height") || n.removeAttr("height")),
        e.attr("height") &&
          (n.attr("height", e.attr("height")),
          e.attr("width") || n.removeAttr("width")),
        n.insertAfter(e),
        e.trigger("svgInlined", n[0]),
        e.remove();
    });
  }
  function v(e, a, n, s) {
    var i = e.text().split(a),
      o = "";
    i.length &&
      (t(i).each(function (t, e) {
        o += '<span class="' + n + (t + 1) + '">' + e + "</span>" + s;
      }),
      e.empty().append(o));
  }
  (t.fn.inlineSvg = function () {
    return this.each(g), this;
  }),
    t(".svg-img").inlineSvg(),
    t("#ship-to-different-address-checkbox").on("change", function () {
      t(this).is(":checked")
        ? t("#ship-to-different-address").next(".shipping_address").slideDown()
        : t("#ship-to-different-address").next(".shipping_address").slideUp();
    }),
    t(".woocommerce-form-login-toggle a").on("click", function (e) {
      e.preventDefault(), t(".woocommerce-form-login").slideToggle();
    }),
    t(".woocommerce-form-coupon-toggle a").on("click", function (e) {
      e.preventDefault(), t(".woocommerce-form-coupon").slideToggle();
    }),
    t(".shipping-calculator-button").on("click", function (e) {
      e.preventDefault(),
        t(this).next(".shipping-calculator-form").slideToggle();
    }),
    t('.wc_payment_methods input[type="radio"]:checked')
      .siblings(".payment_box")
      .show(),
    t('.wc_payment_methods input[type="radio"]').each(function () {
      t(this).on("change", function () {
        t(".payment_box").slideUp(),
          t(this).siblings(".payment_box").slideDown();
      });
    }),
    t(".rating-select .stars a").each(function () {
      t(this).on("click", function (e) {
        e.preventDefault(),
          t(this).siblings().removeClass("active"),
          t(this).parent().parent().addClass("selected"),
          t(this).addClass("active");
      });
    }),
    t(".quantity-plus").each(function () {
      t(this).on("click", function (e) {
        e.preventDefault();
        var a = t(this).siblings(".qty-input"),
          n = parseInt(a.val(), 10);
        isNaN(n) || a.val(n + 1);
      });
    }),
    t(".quantity-minus").each(function () {
      t(this).on("click", function (e) {
        e.preventDefault();
        var a = t(this).siblings(".qty-input"),
          n = parseInt(a.val(), 10);
        !isNaN(n) && n > 1 && a.val(n - 1);
      });
    }),
    t(".color-switch-btns button").each(function () {
      const e = t(this),
        a = e.data("color");
      e.css("--theme-color", a),
        e.on("click", function () {
          const e = t(this).data("color");
          t(":root").css("--theme-color", e);
        });
    }),
    t(document).on("click", ".switchIcon", function () {
      t(".color-scheme-wrap").toggleClass("active");
    });
  var b = {
    init: function () {
      return this.each(function () {
        v(t(this), "", "char", "");
      });
    },
    words: function () {
      return this.each(function () {
        v(t(this), " ", "word", " ");
      });
    },
    lines: function () {
      return this.each(function () {
        var e = "eefec303079ad17405c889e092e105b0";
        v(t(this).children("br").replaceWith(e).end(), e, "line", "");
      });
    },
  };
  if (
    ((t.fn.lettering = function (e) {
      return e && b[e]
        ? b[e].apply(this, [].slice.call(arguments, 1))
        : "letters" !== e && e
        ? (t.error("Method " + e + " does not exist on jQuery.lettering"), this)
        : b.init.apply(this, [].slice.call(arguments, 0));
    }),
    t(".circle-title-anime").lettering(),
    t(".cursor-animation").length > 0)
  ) {
    var y = t(".cursor-animation"),
      C = 0,
      w = 0,
      k = 0,
      x = 0;
    TweenMax.to({}, 0.016, {
      repeat: -1,
      onRepeat: function () {
        (C += (k - C) / 9),
          (w += (x - w) / 9),
          TweenMax.set(y, { css: { left: C - 12, top: w - 12 } });
      },
    }),
      t(document).on("mousemove", function (t) {
        (k = t.clientX), (x = t.clientY);
      }),
      t(".btn").on("mouseenter", function () {
        cursor.addClass("active"), y.addClass("active");
      }),
      t(".btn").on("mouseleave", function () {
        cursor.removeClass("active"), y.removeClass("active");
      });
  }
  window.gsap.registerPlugin(window.TweenMax),
    t(window).on("scroll", function () {
      t(".menu-section-link").each(function () {
        t(this.hash).length &&
          t(this.hash).offset().top - 90 <= t(window).scrollTop() &&
          (t(this).parent().addClass("active"),
          t(this).parent().siblings().removeClass("active"));
      });
    }),
    t(function () {
      t('a.menu-section-link[href*="#"]:not([href="#"])').on(
        "click",
        function () {
          if (
            location.pathname.replace(/^\//, "") ==
              this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
          ) {
            var e = t(this.hash);
            if (
              (e = e.length ? e : t("[name=" + this.hash.slice(1) + "]")).length
            )
              return (
                t("html, body").animate(
                  { scrollTop: e.offset().top - 80 },
                  1e3
                ),
                !1
              );
          }
        }
      );
    }),
    window.addEventListener(
      "contextmenu",
      function (t) {
        t.preventDefault();
      },
      !1
    ),
    (document.onkeydown = function (t) {
      return (
        123 != event.keyCode &&
        (!t.ctrlKey || !t.shiftKey || t.keyCode != "I".charCodeAt(0)) &&
        (!t.ctrlKey || !t.shiftKey || t.keyCode != "C".charCodeAt(0)) &&
        (!t.ctrlKey || !t.shiftKey || t.keyCode != "J".charCodeAt(0)) &&
        (!t.ctrlKey || t.keyCode != "U".charCodeAt(0)) &&
        void 0
      );
    });

    // list filtering 
    t(".filter-active").imagesLoaded(function () {
  if (t(".filter-active").length > 0) {
    var e = t(".filter-active").isotope({
      itemSelector: ".filter-item",
      filter: "*",
      masonry: {},
    });

    // Combined click handler for both buttons and category links
    t(".filter-menu-active, ul").on("click", "[data-filter]", function (ev) {
      ev.preventDefault();

      var $this = t(this);
      var filter = $this.attr("data-filter");

      // Apply Isotope filter
      e.isotope({ filter: filter });

      // Remove active class from all filter triggers, then set on clicked one
      t("[data-filter]").removeClass("active");
      $this.addClass("active");
    });
  }
});
// filter styling 
// t(".filter-active").imagesLoaded(function () {
//   if (t(".filter-active").length > 0) {
//     var e = t(".filter-active").isotope({
//       itemSelector: ".filter-item",
//       filter: "*",
//       masonry: {},
//     });

//     // Combined filter for both buttons and dropdown items
//     t(".filter-menu-active, ul").on("click", "[data-filter]", function (ev) {
//       ev.preventDefault();

//       var $this = t(this);
//       var filter = $this.attr("data-filter");

//       // Apply Isotope filter
//       e.isotope({ filter: filter });

//       // Remove .active from all filter triggers
//       t(".filter-menu-active button, ul .category, ul li.category").removeClass("active");

//       // Add .active to clicked one
//       $this.addClass("active");

//       // If the click target is inside a <li>, also add active to the <li>
//       if ($this.closest("li").length) {
//         $this.closest("li").addClass("active");
//       }
//     });
//   }
// });
// newww................................
t(".filter-active").imagesLoaded(function () {
  if (t(".filter-active").length > 0) {
    // 🟡 Get initial active filter from the first active button or li
    var $initialActive = t(".filter-menu-active .active[data-filter]").first();
    var initialFilter = $initialActive.attr("data-filter") || "*";

    // 🟢 Initialize Isotope with the active filter
    var e = t(".filter-active").isotope({
      itemSelector: ".filter-item",
      filter: initialFilter,
      masonry: {},
    });

    // 🔵 Click event for filters
    t(".filter-menu-active, ul").on("click", "[data-filter]", function (ev) {
      ev.preventDefault();

      var $this = t(this);
      var filter = $this.attr("data-filter");

      // Apply Isotope filter
      e.isotope({ filter: filter });

      // Remove all previous active classes
      t(".filter-menu-active button, ul .category, ul li.category, .tab-btn").removeClass("active");

      // Add active class to clicked element
      if ($this.closest("li").length) {
        $this.closest("li").addClass("active");
      } else {
        $this.addClass("active");
      }

      // If inside .tab-wrapper, activate related .tab-btn too
      var $tabWrapper = $this.closest(".tab-wrapper");
      if ($tabWrapper.length) {
        $tabWrapper.find(".tab-btn").addClass("active");
      }
    });
  }
});


// packages filter 
$(document).ready(function () {
  // Wait until all images in .filter-active are loaded
  $(".filter-active").imagesLoaded(function () {
    if ($(".filter-active").length > 0) {
      // Get the initial active filter from the button with 'active' class
      var $initialActive = $(".game-filter-btnn .tab-btn.active, .game-filter-btnn .category.active");
      var initialFilter = $initialActive.attr("data-filter") || "*";

      // Initialize Isotope with the active filter
      var $iso = $(".filter-active").isotope({
        itemSelector: ".filter-item",
        filter: initialFilter,
        masonry: {},
      });

      // Set initial heading
      var initHeading = $initialActive.data("heading");
      if (initHeading) {
        $(".main-heading").text(initHeading);
      }

      // Filter buttons click handler
      $(".game-filter-btnn").on("click", "[data-filter]", function (e) {
        e.preventDefault();

        var $this = $(this);
        var filter = $this.attr("data-filter");

        // Apply Isotope filter
        $iso.isotope({ filter: filter });

        // Toggle active class
        $(".game-filter-btnn .tab-btn, .game-filter-btnn .category").removeClass("active");
        $this.addClass("active");

        // Update heading
        var newHeading = $this.data("heading");
        if (newHeading) {
          $(".main-heading").text(newHeading);
        }
      });
    }
  });
});


// packages filter ended 


})(jQuery);

// floating button func 
  $(document).ready(function () {
    $('.main-fab').on('click', function () {
      $('.fab-wrapper').toggleClass('open');
      $('.child-fab').each(function (index) {
        $(this).delay(index * 100).animate({
          opacity: 1,
          bottom: '+=20'
        }, 200).css('transform', 'translateY(0)');
      });

      if (!$('.fab-wrapper').hasClass('open')) {
        $('.child-fab').stop().animate({
          opacity: 0
        }, 100).css('transform', 'translateY(0)');
      }
    });
  });


