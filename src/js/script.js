jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  // ハンバーガーメニュー
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
    $("body").removeClass("is-fixed").css("top", "");
    $(window).scrollTop(scrollPosition);
  }

  $(".js-hamburger").click(function () {
    $(this).toggleClass("is-open");
    if ($(this).hasClass("is-open")) {
      openDrawer();
    } else {
      closeDrawer();
    }
  });

  $(".js-drawer, .js-drawer a[href]").on("click", function () {
    closeDrawer();
  });

  $(window).on("resize", function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      closeDrawer();
    }
  });

  // ページトップボタン
  const pageTop = $(".js-pagetop");
  pageTop.hide();

  $(window).scroll(function () {
    var scrollPosition = $(this).scrollTop();
    var windowHeight = $(this).height();
    var bodyHeight = $(document).height();
    var footerHeight = $(".footer").outerHeight();

    // スクロール位置が70を超えた場合にページトップへ戻るボタンを表示
    if (scrollPosition > 70) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }

    // フッターに入ったらsrc内のprevをnextに変更、それ以外の場合はnextをprevに変更
    const pageTopImg = $(".js-pagetop-img");
    let currentSrc = pageTopImg.attr("src");
    if (bodyHeight - scrollPosition <= windowHeight + footerHeight) {
      // フッターに到達したらprevをnextに変更
      let newSrc = currentSrc.replace("prev", "next");
      pageTopImg.attr("src", newSrc);
      pageTop.addClass("is-reverse");
    } else {
      // フッターから離れたらnextをprevに戻す
      let newSrc = currentSrc.replace("next", "prev");
      pageTopImg.attr("src", newSrc);
      pageTop.removeClass("is-reverse");
    }
  });

  // ページトップへ戻るボタンのクリックイベント
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

  // memberSwiper
  const memberSwiper = new Swiper(".js-member-swiper", {
    slidesPerView: "auto",
    spaceBetween: 30,

    breakpoints: {
      768: {
        spaceBetween: 40,
      },
    },

    navigation: {
      nextEl: ".js-member-swiper-ui .swiper-button-next",
      prevEl: ".js-member-swiper-ui .swiper-button-prev",
    },

    scrollbar: {
      el: ".js-member-swiper-ui .swiper-scrollbar",
      hide: false,
    },
  });

  // seminarSwiper
  const seminarSwiper = new Swiper(".js-seminar-swiper", {
    slidesPerView: "auto",
    spaceBetween: 30,

    breakpoints: {
      768: {
        spaceBetween: 40,
      },
    },

    navigation: {
      nextEl: ".js-seminar-swiper-ui .swiper-button-next",
      prevEl: ".js-seminar-swiper-ui .swiper-button-prev",
    },

    scrollbar: {
      el: ".js-seminar-swiper-ui .swiper-scrollbar",
      hide: false,
    },
  });

  // infomationTab
  $(".js-tab-menu").click(function () {
    $(".js-tab-menu").removeClass("is-active");
    $(this).addClass("is-active");
    $(".js-tab-content").removeClass("is-active");
    const index = $(this).index();
    $(".js-tab-content").eq(index).addClass("is-active");
  });
});

// テキストに応じてテーブルの色を変える場合
// document.addEventListener("DOMContentLoaded", function () {
//   const cells = document.querySelectorAll(".js-schedule-date td");

//   cells.forEach(function (cell) {
//     switch (cell.textContent) {
//       case "新潟万代":
//         cell.classList.add("schedule-date__blue");
//         break;
//     }
//   });
// });

// 画像にSPのとき_spをつけて出し分けする
const changeImages = $(".change-image");
const changeImage = function () {
  changeImages.each(function (index, el) {
    let src = $(el).attr("src");

    src = src.replace(/_sp(@2x)/, "$1");

    if ($(window).width() <= 767) {
      // 767px以下の場合、@2xの前に_spを追加
      src = src.replace(/(@2x)/, "_sp$1");
    }

    $(el).attr("src", src);
  });
};

$(window).on({
  load: changeImage,
  resize: changeImage,
});
