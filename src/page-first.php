<?php get_header(); ?>

<main class="layout-main">
  <section class="sub-fv">
    <div class="sub-fv__inner">
      <div class="sub-fv__container">
        <div class="sub-fv__img">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sub/fv@2x.jpg')); ?>" alt="" width="916" height="335" />
        </div>
        <h2 class="sub-fv__title">はじめての方へ</h2>
      </div>
    </div>
    <div class="sub-fv__breadcrumb">
      <?php if (function_exists('bcn_display')) { ?>
        <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </div>
      <?php } ?>
    </div>
    <div class="sub-fv__copyright copyright">
      <small>© Rinri-niigata, All Rights Reserved.</small>
    </div>
  </section>

  <section class="sub-intro layout-sub-intro">
    <div class="sub-intro__faq-single inner--small">
      <div class="faq-intro__faq-single-block">
        <div class="faq--large">
          <div class="faq__img">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sub/icon-face3.svg')); ?>" alt="" role="presentation" width="130" height="129" />
          </div>
          <h3 class="faq__head title-small">知人から倫理法人会へ誘われた<br>
            でも、<span class="text-accent">怖いところ</span>だったらどうしよう…</h3>
          <div class="faq__text">
            <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="sub-intro__intro">
      <div class="intro--delta">
        <div class="intro__inner inner">
          <div class="intro__container">
            <div class="intro__img">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/intro@2x.jpg')); ?>" alt="" width="598" height="717" loading="lazy" />
            </div>
            <div class="intro__body">
              <h3 class="intro__title title">倫理法人会って<br>
                どんなところ？</h3>
              <div class="intro__text">
                <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sub-intro__faq">
      <div class="sub-intro__faq-inner inner--small">
        <div class="sub-intro__faq-block">
          <div class="faq-block">
            <div class="faq-block__question faq">
              <div class="faq__img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sub/icon-face1.svg')); ?>" alt="" role="presentation" width="80" height="80" />
              </div>
              <div class="faq__head">
                <p class="title-small">「怪しい団体」という噂を聞いたんですが…</p>
              </div>
            </div>
            <div class="faq-block__answer faq--ivory">
              <div class="faq__img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sub/icon-face2.svg')); ?>" alt="" role="presentation" width="80" height="80" />
              </div>
              <div class="faq__text">
                <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sub-activity layout-sub-activity">
    <div class="sub-activity__inner inner">
      <div class="sub-activity__container">
        <div class="sub-activity__head-wrap">
          <h3 class="sub-activity__head title--medium">倫理法人会の活動内容は？</h3>
          <div class="sub-activity__text">
            <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。<br>
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </div>
        <div class="sub-activity__list">
          <ol class="activity-cards">
            <li class="activity-cards__card">
              <a class="activity-card--delta" href="#">
                <div class="activity-card__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/activity1@2x.jpg')); ?>" alt="" width="384" height="270" loading="lazy">
                </div>
                <div class="activity-card__body">
                  <h4 class="activity-card__head">
                    <span class="activity-card__number">#0</span>
                    <span class="activity-card__title">モーニングセミナー</span>
                  </h4>
                  <p class="activity-card__text text">経営者モーニングセミナーは、地元で活躍している方々の講話等を通し、企業のトップとして自らの生き方や会社のあり方を真剣に考えるための場所です。早朝の爽やかな空気を味わいながら明るい一日をスタートさせませんか。</p>
                </div>
              </a>
            </li>
            <li class="activity-cards__card">
              <a class="activity-card--blue-delta" href="#">
                <div class="activity-card__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/activity2@2x.jpg')); ?>" alt="" width="384" height="270" loading="lazy">
                </div>
                <div class="activity-card__body">
                  <h4 class="activity-card__head">
                    <span class="activity-card__number">#0</span>
                    <span class="activity-card__title">各種講演会・イベント</span>
                  </h4>
                  <p class="activity-card__text text">月に一度夕方より地域の経営者同士が共に学び、語り合う異業種交流の場です。その折々のテーマで講師を招いての講演会、勉強会、フォーラム、交流会を行います。</p>
                </div>
              </a>
            </li>
            <li class="activity-cards__card">
              <a class="activity-card--green-delta" href="#">
                <div class="activity-card__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/activity3@2x.jpg')); ?>" alt="" width="384" height="270" loading="lazy">
                </div>
                <div class="activity-card__body">
                  <h4 class="activity-card__head">
                    <span class="activity-card__number">#0</span>
                    <span class="activity-card__title">活力朝礼</span>
                  </h4>
                  <p class="activity-card__text text">一日の始まりは元気な朝礼から<br>
                    企業の活性化は朝のスタートが大切です。<br>
                    明るく朗らかな挨拶で社員の気持ちを高め、心をひとつにして元気に明るく仕事に臨みたいものです。</p>
                </div>
              </a>
            </li>
          </ol>
        </div>
        <div class="sub-activity__faq">
          <div class="sub-activity__faq-inner inner--small">
            <div class="sub-activity__faq-block">
              <div class="faq-block">
                <div class="faq-block__question faq--white">
                  <div class="faq__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sub/icon-face1.svg')); ?>" alt="" role="presentation" width="80" height="80" />
                  </div>
                  <div class="faq__head">
                    <p class="title-small">早朝から集まったりするんですよね…？</p>
                  </div>
                </div>
                <div class="faq-block__answer faq--beige">
                  <div class="faq__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sub/icon-face2.svg')); ?>" alt="" role="presentation" width="80" height="80" />
                  </div>
                  <div class="faq__text">
                    <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sub-member layout-sub-member">
    <div class="sub-member__intro">
      <div class="intro--reverse">
        <div class="intro__inner inner">
          <div class="intro__container">
            <div class="intro__img">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/mv@2x.jpg')); ?>" alt="" width="598" height="717" loading="lazy" />
            </div>
            <div class="intro__body">
              <h3 class="intro__title title--medium">どんな人がいるの？</h3>
              <div class="intro__text">
                <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              </div>
              <div class="intro__button">
                <a href="#" class="button">会員企業一覧を見る
                  <div class="button__icon">
                    <?php echo get_template_part("parts/icon-arrow-svg") ?>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sub-member__faq">
      <div class="sub-member__faq-inner inner--small">
        <div class="sub-member__faq-block">
          <div class="faq-block">
            <div class="faq-block__question faq">
              <div class="faq__img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sub/icon-face1.svg')); ?>" alt="" role="presentation" width="80" height="80" />
              </div>
              <div class="faq__head">
                <p class="title-small">しつこい勧誘があったら嫌だな…</p>
              </div>
            </div>
            <div class="faq-block__answer faq--beige">
              <div class="faq__img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sub/icon-face2.svg')); ?>" alt="" role="presentation" width="80" height="80" />
              </div>
              <div class="faq__text">
                <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="sub-cta layout-sub-cta">
    <div class="sub-cta__block">
      <div class="sub-cta__inner inner">
        <div class="sub-cta__container">
          <div class="sub-cta__head">
            <h3 class="title--medium">「行ってみよう」と思った方は</h3>
          </div>
          <div class="sub-cta__text">
            <p class="text">
              テキストが入ります。テキストが入ります。テキストが入ります。<br>
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
          <div class="sub-cta__button">
            <a href="#" class="button">モーニングセミナー一覧へ
              <div class="button__icon">
                <?php echo get_template_part("parts/icon-arrow-svg") ?>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="sub-cta__img">
      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sub/bg-cta@2x.jpg')); ?>" alt="" role="presentation" width="1440" height="560" loading="lazy" />
    </div>
  </div>

  <?php echo get_template_part("parts/join") ?>

  <?php echo get_template_part("parts/contact") ?>

</main>

<?php get_footer(); ?>