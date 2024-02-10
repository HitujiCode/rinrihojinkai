"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  // ハンバーガーメニュー
  $(".js-hamburger").click(function () {
    $(this).toggleClass("is-open");
    if ($(this).hasClass("is-open")) {
      openDrawer();
    } else {
      closeDrawer();
    }
  });
  // backgroundまたはページ内リンクをクリックで閉じる
  $(".js-drawer, .js-drawer a[href]").on("click", function () {
    closeDrawer();
  });
  // resizeイベント
  $(window).on("resize", function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      closeDrawer();
    }
  });

  // Drawerの開閉
  let scrollPosition = 0;
  function openDrawer() {
    scrollPosition = $(window).scrollTop();
    $(".js-drawer").addClass("is-open");
    $(".js-hamburger").addClass("is-open");
    $("body").addClass("is-fixed").css("top", -scrollPosition);
  }

  function closeDrawer() {
    $(".js-drawer").removeClass("is-open");
    $(".js-hamburger").removeClass("is-open");
    $("body").removeClass("is-fixed");
    $(window).scrollTop(scrollPosition);
  }

  // ページトップボタン
  const pageTop = $(".js-pagetop");
  pageTop.hide();
  $(window).scroll(function () {
    var scrollPosition = $(this).scrollTop();
    var windowHeight = $(this).height();
    var bodyHeight = $(document).height();
    var footerHeight = $(".p-footer").outerHeight();
    if (scrollPosition > 70) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
    if (bodyHeight - scrollPosition <= windowHeight + footerHeight) {
      pageTop.css({
        position: "absolute",
        bottom: footerHeight + 6 + "px",
      });
    } else {
      pageTop.css({
        position: "fixed",
        bottom: "20px",
      });
    }
  });
  pageTop.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  // アンカーリンク
  // $(document).ready(function () {
  //   // 別ページからの遷移を考慮して、ページ読み込み時とハッシュ変更時に処理を実行
  //   function adjustAnchor() {
  //     var headerHeight = $(".js-header").outerHeight(); // ヘッダーの動的な高さを取得
  //     var hash = window.location.hash; // 現在のハッシュを取得

  //     if (hash) {
  //       var target = $(hash);
  //       if (target.length) {
  //         var position = target.offset().top - headerHeight; // ヘッダーの高さを考慮した位置を計算
  //         $("html, body").stop().animate(
  //           {
  //             scrollTop: position,
  //           },
  //           600,
  //           "swing"
  //         );
  //       }
  //     }
  //   }

  //   // ページ読み込み時とハッシュが変更された時にアンカー位置調整を実行
  //   $(window).on("load hashchange", function () {
  //     adjustAnchor();
  //   });

  //   // ページ内リンクに対するクリックイベント
  //   $('a[href^="#"]').click(function (e) {
  //     var href = $(this).attr("href");
  //     // 別ページへのアンカーの場合はデフォルトの動作を実行
  //     if (href.startsWith("#") && href.length > 1) {
  //       // ハッシュ変更をトリガーとして位置調整を実行する
  //       window.location.hash = href;
  //       return false; // デフォルトのアンカー動作をキャンセル
  //     }
  //   });
  // });

  // Fvスライダー
  var fvSwiperContainer = document.querySelector(".js-fv-swiper");
  if (fvSwiperContainer) {
    var fvSwiper = new Swiper(fvSwiperContainer, {
      loop: true,
      effect: "fade",
      speed: 3000,
      fadeEffect: {
        crossFade: true,
      },
      autoplay: {
        delay: 2000,
      },
    });
  }

  // SPのみスライダー
  $(document).ready(function () {
    initializeAboutSwiper();
    initializeFlowSwiper1();
    initializeFlowSwiper2();
    initializeFlowSwiper3();
  });

  function initializeAboutSwiper() {
    const aboutSwiper = document.querySelector(".js-about-swiper");
    if (
      aboutSwiper &&
      document.querySelector(".js-about-swiper-next") &&
      document.querySelector(".js-about-swiper-prev")
    ) {
      let swiperInstance = null;

      const createSwiper = function () {
        if (window.innerWidth >= 768) {
          if (swiperInstance) {
            swiperInstance.destroy();
            swiperInstance = null;
          }
          clearSwiperStyles(aboutSwiper);
        } else {
          if (!swiperInstance) {
            swiperInstance = new Swiper(aboutSwiper, {
              loop: true,
              spaceBetween: 45,
              slidesPerView: "auto",
              centeredSlides: true,
              speed: 1000,
              autoplay: {
                disableOnInteraction: false,
              },
              pagination: {
                el: aboutSwiper.querySelector(".swiper-pagination"),
                clickable: true,
              },
              navigation: {
                nextEl: document.querySelector(".js-about-swiper-next"),
                prevEl: document.querySelector(".js-about-swiper-prev"),
              },
            });
          }
        }
      };

      createSwiper();
      $(window).on("resize", createSwiper);
    }
  }

  function initializeFlowSwiper1() {
    const flowSwiper1 = document.querySelector(".js-flow-swiper1");
    if (
      flowSwiper1 &&
      document.querySelector(".js-flow-swiper-next1") &&
      document.querySelector(".js-flow-swiper-prev1")
    ) {
      let swiperInstance1 = null;

      const createSwiper1 = function () {
        if (window.innerWidth >= 768) {
          if (swiperInstance1) {
            swiperInstance1.destroy();
            swiperInstance1 = null;
          }
          clearSwiperStyles(flowSwiper1);
        } else {
          if (!swiperInstance1) {
            swiperInstance1 = new Swiper(flowSwiper1, {
              loop: true,
              spaceBetween: 45,
              slidesPerView: "auto",
              centeredSlides: true,
              pagination: {
                el: flowSwiper1.querySelector(".swiper-pagination"),
                clickable: true,
              },
              navigation: {
                nextEl: document.querySelector(".js-flow-swiper-next1"),
                prevEl: document.querySelector(".js-flow-swiper-prev1"),
              },
              on: {
                init: function () {
                  applyCommonSwiperStyles();
                },
              },
            });
          }
        }
      };

      createSwiper1();
      $(window).on("resize", createSwiper1);
    }
  }

  function initializeFlowSwiper2() {
    const flowSwiper2 = document.querySelector(".js-flow-swiper2");
    if (
      flowSwiper2 &&
      document.querySelector(".js-flow-swiper-next2") &&
      document.querySelector(".js-flow-swiper-prev2")
    ) {
      let swiperInstance2 = null;

      const createSwiper2 = function () {
        if (window.innerWidth >= 768) {
          if (swiperInstance2) {
            swiperInstance2.destroy();
            swiperInstance2 = null;
          }
          clearSwiperStyles(flowSwiper2);
        } else {
          if (!swiperInstance2) {
            swiperInstance2 = new Swiper(flowSwiper2, {
              loop: true,
              spaceBetween: 45,
              slidesPerView: "auto",
              centeredSlides: true,
              pagination: {
                el: flowSwiper2.querySelector(".swiper-pagination"),
                clickable: true,
              },
              navigation: {
                nextEl: document.querySelector(".js-flow-swiper-next2"),
                prevEl: document.querySelector(".js-flow-swiper-prev2"),
              },
              on: {
                init: function () {
                  applyCommonSwiperStyles();
                },
              },
            });
          }
        }
      };

      createSwiper2();
      $(window).on("resize", createSwiper2);
    }
  }

  function initializeFlowSwiper3() {
    const flowSwiper3 = document.querySelector(".js-flow-swiper3");
    if (
      flowSwiper3 &&
      document.querySelector(".js-flow-swiper-next3") &&
      document.querySelector(".js-flow-swiper-prev3")
    ) {
      let swiperInstance3 = null;

      const createSwiper3 = function () {
        if (window.innerWidth >= 768) {
          if (swiperInstance3) {
            swiperInstance3.destroy();
            swiperInstance3 = null;
          }
          clearSwiperStyles(flowSwiper3);
        } else {
          if (!swiperInstance3) {
            swiperInstance3 = new Swiper(flowSwiper3, {
              loop: true,
              spaceBetween: 45,
              slidesPerView: "auto",
              centeredSlides: true,
              pagination: {
                el: flowSwiper3.querySelector(".swiper-pagination"),
                clickable: true,
              },
              navigation: {
                nextEl: document.querySelector(".js-flow-swiper-next3"),
                prevEl: document.querySelector(".js-flow-swiper-prev3"),
              },
              on: {
                init: function () {
                  applyCommonSwiperStyles();
                },
              },
            });
          }
        }
      };

      createSwiper3();
      $(window).on("resize", createSwiper3);
    }
  }

  function clearSwiperStyles(container) {
    if (!container) return;
    container.style = ""; // Swiperコンテナのスタイルをクリア
    var pagination = container.querySelector(".swiper-pagination");
    if (pagination) pagination.style = ""; // ページネーションのスタイルをクリア
    var prevButton = container.querySelector(".js-flow-swiper-prev"); // 前へボタンのスタイルをクリア
    if (prevButton) prevButton.style = "";
    var nextButton = container.querySelector(".js-flow-swiper-next"); // 次へボタンのスタイルをクリア
    if (nextButton) nextButton.style = "";
  }

  function applyCommonSwiperStyles() {
    const flows = document.querySelectorAll(".p-sub-flow");
    flows.forEach(function (flow) {
      flow.style.opacity = 1;
      flow.style.visibility = "visible";
    });
  }
});

// modal
document.addEventListener("DOMContentLoaded", function () {
  var modal = document.querySelector(".js-modal");

  // `modal` 要素が存在する場合のみ処理を実行
  if (modal) {
    var openModal = function openModal(imgSrc) {
      if (modalImg) {
        modalImg.src = imgSrc;
      }
      modal.classList.add("show");
      if (modalWrap) {
        modalWrap.classList.add("show");
      }
      modal.style.visibility = "visible";
      updateButtonStates();
      document.body.style.overflow = "clip";
    };
    var updateModalImage = function updateModalImage(index) {
      if (modalImg) {
        // 既存のアニメーションクラスをクリア
        modalImg.classList.remove("fadeIn");

        // アニメーションが終了したらクラスを削除
        modalImg.addEventListener(
          "animationend",
          function () {
            modalImg.classList.remove("fadeIn");
          },
          {
            once: true,
          }
        );

        // 新しい画像ソースを設定してアニメーションクラスを追加
        modalImg.src = imageSources[index];
        modalImg.classList.add("fadeIn");
      }
      updateButtonStates();
    };
    var updateButtonStates = function updateButtonStates() {
      if (prevButton) {
        prevButton.classList.toggle("is-disabled", currentIndex <= 0);
      }
      if (nextButton) {
        nextButton.classList.toggle(
          "is-disabled",
          currentIndex >= imageSources.length - 1
        );
      }
    };
    var closeModal = function closeModal() {
      modal.classList.remove("show");
      if (modalWrap) {
        modalWrap.classList.remove("show");
      }
      modal.addEventListener("transitionend", function onTransitionEnd() {
        modal.style.visibility = "hidden";
        modal.removeEventListener("transitionend", onTransitionEnd);
        document.body.style.overflow = "";
      });
    };
    var modalWrap = modal.querySelector(".p-modal__wrap");
    var modalInner = modal.querySelector(".p-modal__inner"); // modal__inner 要素を取得
    var modalImgContainer = modal.querySelector(".p-modal__img");
    var modalImg = modalImgContainer
      ? modalImgContainer.querySelector("img")
      : null;
    var modalClose = document.querySelector(".p-modal__close-button");
    var prevButton = document.querySelector(".p-modal__prev");
    var nextButton = document.querySelector(".p-modal__next");
    var currentIndex = 0;
    var imageSources = [];
    var modalTriggers = document.querySelectorAll(".js-modal-trigger");
    modalTriggers.forEach(function (trigger, index) {
      imageSources.push(trigger.getAttribute("href"));
      trigger.setAttribute("data-index", index);
      trigger.addEventListener("click", function (e) {
        e.preventDefault();
        currentIndex = parseInt(this.getAttribute("data-index"));
        if (modalImg) {
          openModal(this.getAttribute("href"));
        }
      });
    });
    if (prevButton) {
      prevButton.addEventListener("click", function () {
        if (currentIndex > 0) {
          currentIndex--;
          updateModalImage(currentIndex);
        }
      });
    }
    if (nextButton) {
      nextButton.addEventListener("click", function () {
        if (currentIndex < imageSources.length - 1) {
          currentIndex++;
          updateModalImage(currentIndex);
        }
      });
    }
    modal.addEventListener("click", function (e) {
      if (
        e.target === modal ||
        e.target === modalInner ||
        e.target === modalInner
      ) {
        closeModal();
      }
    });

    // modalWrap をクリックした場合にも closeModal を実行
    if (modalWrap) {
      modalWrap.addEventListener("click", function (e) {
        if (e.target === modalWrap) {
          // クリックされた要素が modalWrap 自身である場合のみ
          closeModal();
        }
      });
    }
    if (modalClose) {
      modalClose.addEventListener("click", closeModal);
    }
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" || e.key === "Esc") {
        closeModal();
      }
    });
  }
});
