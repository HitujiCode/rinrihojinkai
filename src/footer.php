  <button class="pagetop js-pagetop">
    <img class="js-pagetop-img" src="<?php echo esc_url(get_theme_file_uri('assets/images/common/icon-prev.svg')); ?>" alt="トップへ戻る" width="40" height="40" loading="lazy" />
  </button>

  <footer class="footer">
    <div class="footer__inner inner">
      <div class="footer__wrapper">
        <div class="footer__left">
          <div class="footer__logo">
            <a href="#" class="logo">
              <div class="logo__icon">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/logo.svg')); ?>" alt="Logo" width="40" height="40" loading="lazy">
              </div>
              <p class="logo__title">新潟県倫理法人会</p>
            </a>
          </div>
          <address class="footer__address text">
            〒955-0092<br>
            新潟県三条市須頃2丁目13番地<br>
            パークハイツ須頃　202号室
          </address>
          <dl class="footer__info text">
            <div class="footer__info-wrap">
              <dt class="footer__info-term">tel</dt>
              <dd class="footer__info-description"><a class="nolink">0256-35-4466</a></dd>
            </div>
            <div class="footer__info-wrap">
              <dt class="footer__info-term">fax</dt>
              <dd class="footer__info-description"><a class="nolink">0256-47-1023</a></dd>
            </div>
            <div class="footer__info-wrap--delta">
              <dt class="footer__info-term">E-mail</dt>
              <dd class="footer__info-description"><a class="nolink">rinri-ken@tiara.ocn.ne.jp</a></dd>
            </div>
          </dl>
        </div>
        <div class="footer__right">
          <div class="footer__nav">
            <ul class="footer__nav-lists">
              <li class="footer__nav-list">はじめての方へ
                <ul class="footer__nav-items">
                  <li class="footer__nav-item"><a href="#"><span>倫理法人会ってどんなところ？</span></a></li>
                  <li class="footer__nav-item"><a href="#"><span>活動内容</span></a>
                  </li>
                  <li class="footer__nav-item"><a href="#"><span>会員紹介</span></a>
                  </li>
                </ul>
              </li>
              <li class="footer__nav-list">会員の方へ
                <ul class="footer__nav-items text">
                  <li class="footer__nav-item"><a href="#"><span>お知らせ一覧</span></a></li>
                  <li class="footer__nav-item"><a href="#"><span>セミナー案内</span></a>
                  </li>
                  <li class="footer__nav-item"><a href="#"><span>会報</span></a>
                  </li>
                </ul>
              </li>
              <li class="footer__nav-list">倫理法人会について
                <ul class="footer__nav-items text">
                  <li class="footer__nav-item"><a href="#"><span>会場一覧</span></a>
                  </li>
                  <li class="footer__nav-item"><a href="#"><span>組織・役員</span></a>
                  </li>
                  <li class="footer__nav-item"><a href="#"><span>委員会</span></a>
                  </li>
                  <li class="footer__nav-item"><a href="#"><span>事務局</span></a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="footer__buttons">
            <div class="footer__button">
              <a href="#" class="button--white">入会のご案内<div class="button__icon">
                  <?php echo get_template_part("parts/icon-arrow-svg") ?>
                </div>
              </a>
            </div>
            <div class="footer__button">
              <a href="#" class="button--ocher">お問い合わせ<div class="button__icon">
                  <?php echo get_template_part("parts/icon-arrow-svg") ?>
                </div>
              </a>
            </div>
          </div>
          <div class="footer__links text">
            <a href="#" class="footer__link">プライバシーポリシー</a>
            <a href="#" class="footer__link">リンク集</a>
          </div>
        </div>
        <div class="footer__copyright copyright">
          <small>© Rinri-niigata, All Rights Reserved.</small>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  </body>

  </html>