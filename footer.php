  <button class="c-pagetop js-pagetop">
    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-next.svg')); ?>" alt="トップへ戻る" />
  </button>

  <footer class="p-footer <?php echo is_front_page() ? 'l-footer' : ''; ?>">
    <div class="p-footer__inner l-inner">
      <div class="p-footer__wrap">
        <div class="p-footer__logo">
          <a href="#">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/icon-logo.svg')); ?>" alt="Logo" width="80" height="74" />
          </a>
        </div>
        <div class="p-footer__info">
          <address class="p-footer__address">
            〒951-8067<br>
            新潟市中央区本町通6番町1141番地1<br>
            ストークスビル 新潟一番館 3階313号室<br>
            Tel：090-3233-2023<br>
            営業時間：平日 10時～18時 /<br class="u-tab">
            土日祝日 10時～19時 / 定休日：月火
          </address>
          <div class="p-footer__info-text">
            LGBTs専用サポートデスクにて、結婚式のサポートと準備をお手伝い致します。安心してお問合せください。<br>
            ささいなことでもお気軽に無料相談会を開催しています。
          </div>
        </div>
        <div class="p-footer__nav p-global-nav ">
          <ul class="p-global-nav__items">
            <li class="p-global-nav__item">
              <a class="p-global-nav__link" href="<?php echo esc_url(home_url("/plan")) ?>"><span>plan</span></a>
            </li>
            <li class="p-global-nav__item">
              <a class="p-global-nav__link" href="<?php echo esc_url(home_url("/case")) ?>"><span>case</span></a>
            </li>
            <li class="p-global-nav__item">
              <a class="p-global-nav__link" href="<?php echo esc_url(home_url("/works-overview")) ?>"><span>works</span></a>
            </li>
            <li class="p-global-nav__item">
              <a class="p-global-nav__link" href="<?php echo esc_url(home_url("/flow")) ?>"><span>flow</span></a>
            </li>
          </ul>
          <ul class="p-global-nav__icons p-sns-icons--white">
            <li class="p-sns-icons__item">
              <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/instagram.svg')); ?>" alt="Instagram" width="16" height="16" /></a>
            </li>
            <li class="p-sns-icons__item">
              <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/x.svg')); ?>" alt="X" width="16" height="16" /></a>
            </li>
            <li class="p-sns-icons__item">
              <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/facebook.svg')); ?>" alt="Facebook" width="16" height="16" /></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="p-footer__text-wrap">
        <p class="p-footer__text">
          This site is protected by reCAPTCHA and the Google<br class="u-mobile"> Privacy Policy and Terms of Service
          apply.
        </p>
        <div class="p-footer__copyright">
          <small>
            © <?php echo wp_date("Y"); ?> fioritura
          </small>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  </body>

  </html>