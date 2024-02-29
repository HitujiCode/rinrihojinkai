<?php get_header(); ?>

<main class="layout-main">
  <div class="mv">
    <div class="mv__inner">
      <div class="mv__side">
        <div class="mv__copyright copyright">
          <small>© Rinri-niigata, All Rights Reserved.</small>
        </div>
        <div class="mv__scroll-down"></div>
      </div>
      <div class="mv__container">
        <div class="mv__img">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/mv@2x.jpg')); ?>" alt="" width="916" height="717" class="change-image" />
        </div>
        <div class="mv__title-wrap">
          <h2 class="mv__title-main">rinri<br>
            hojinkai<br>
            niigata</h2>
          <p class="mv__title-sub">あなたの変化で会社を変える</p>
        </div>
      </div>
    </div>
  </div>

  <section class="guide layout-guide">
    <div class="guide__inner">
      <div class="guide__items">
        <div class="guide__item">
          <a href="#" class="guide__item-link">
            <div class="guide__item-title section-head">
              <p class="section-head__en">Beginner’s Guide</p>
              <h2 class="section-head__ja">はじめての方へ</h2>
            </div>
            <div class="guide__item-icon">
              <?php echo get_template_part("parts/icon-arrow-svg") ?>
            </div>
          </a>
        </div>
        <div class="guide__item">
          <a href="#" class="guide__item-link">
            <div class="guide__item-title section-head">
              <p class="section-head__en">Member</p>
              <h2 class="section-head__ja">会員の方へ</h2>
            </div>
            <div class="guide__item-icon">
              <?php echo get_template_part("parts/icon-arrow-svg") ?>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="intro layout-intro">
    <div class="intro__inner inner">
      <div class="intro__container">
        <div class="intro__img">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/intro@2x.jpg')); ?>" alt="" width="598" height="717" loading="lazy" />
        </div>
        <div class="intro__body">
          <div class="intro__title title">倫理法人会って<br>
            どんなところ？</div>
          <div class="intro__text-wrap">
            <p class="intro__head title-small">経営者が人としての立ち振る舞いを学び、<br>
              組織の活力を高めていくための場所です</p>
            <p class="intro__text text">当サイトをご覧になっている方の中には、<br>
              倫理法人会に対して、<br>
              「宗教なのか？」「怖い人がいるのでは？」<br>
              「強引な勧誘をされたらどうしよう」<br>
              などなど、さまざまな不安を感じている方もいると思います。<br>
              実際の会場の雰囲気や活動内容、加入されているメンバーのこと、
              ありのままをお伝えします。</p>
          </div>
          <div class="intro__button">
            <a href="#" class="button">Read more
              <div class="button__icon">
                <?php echo get_template_part("parts/icon-arrow-svg") ?>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="activity layout-activity">
    <div class="activity__inner inner">
      <div class="activity__container">
        <div class="activity__head">
          <div class="section-head">
            <p class="section-head__en">Activity</p>
            <h2 class="section-head__ja">倫理法人会の活動</h2>
          </div>
        </div>
        <div class="activity__list">
          <ol class="activity-cards">
            <li class="activity-cards__card activity-card">
              <div class="activity-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/activity1@2x.jpg')); ?>" alt="" width="384" height="270" loading="lazy">
              </div>
              <div class="activity-card__body">
                <h3 class="activity-card__head">
                  <span class="activity-card__number">#0</span>
                  <span class="activity-card__title">モーニングセミナー</span>
                </h3>
                <p class="activity-card__text text">経営者モーニングセミナーは、地元で活躍している方々の講話等を通し、企業のトップとして自らの生き方や会社のあり方を真剣に考えるための場所です。早朝の爽やかな空気を味わいながら明るい一日をスタートさせませんか。</p>
                <div class="activity-card__button">
                  <a href="#" class="button--red">Read more<div class="button__icon">
                      <?php echo get_template_part("parts/icon-arrow-svg") ?>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li class="activity-cards__card  activity-card--blue">
              <div class="activity-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/activity2@2x.jpg')); ?>" alt="" width="384" height="270" loading="lazy">
              </div>
              <div class="activity-card__body">
                <h3 class="activity-card__head">
                  <span class="activity-card__number">#0</span>
                  <span class="activity-card__title">各種講演会・イベント</span>
                </h3>
                <p class="activity-card__text text">月に一度夕方より地域の経営者同士が共に学び、語り合う異業種交流の場です。その折々のテーマで講師を招いての講演会、勉強会、フォーラム、交流会を行います。</p>
                <div class="activity-card__button">
                  <a href="#" class="button--blue">Read more<div class="button__icon">
                      <?php echo get_template_part("parts/icon-arrow-svg") ?>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li class="activity-cards__card activity-card--green">
              <div class="activity-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/activity3@2x.jpg')); ?>" alt="" width="384" height="270" loading="lazy">
              </div>
              <div class="activity-card__body">
                <h3 class="activity-card__head">
                  <span class="activity-card__number">#0</span>
                  <span class="activity-card__title">人材育成</span>
                </h3>
                <p class="activity-card__text text">倫理法人会では、経営者自身の内面的な成長だけでなく、各種モーニングセミナーや後継者倫理塾などの活動を通じて、企業の未来を担う将来の経営者の養成に力を注いでいます。</p>
                <div class="activity-card__button">
                  <a href="#" class="button--green">Read more<div class="button__icon">
                      <?php echo get_template_part("parts/icon-arrow-svg") ?>
                    </div>
                  </a>
                </div>
              </div>
            </li>

          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="member layout-member">
    <div class="member__inner inner">
      <div class="member__container">
        <div class="member__head">
          <div class="section-head">
            <p class="section-head__en">Member</p>
            <h2 class="section-head__ja">参加している方々</h2>
          </div>
        </div>
        <div class="member__text">
          <p class="text">倫理法人会に参加している方々をご紹介。<br>
            中小企業だけでなく、あなたもよく知る大企業の経営者も同じ場所で学んでいます。</p>
        </div>
        <div class="member__list">
          <div class="member__swiper swiper js-member-swiper">
            <ul class="member-cards swiper-wrapper">
              <li class="member-card swiper-slide">
                <div class="member-card__img-wrap">
                  <div class="member-card__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/member1@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                  </div>
                  <p class="member-card__company">株式会社◯◯◯◯◯</p>
                </div>
                <div class="member-card__body">
                  <p class="member-card__name">代表取締役　〇〇〇〇</p>
                  <p class="member-card__text text">ここに会社の紹介が入ります。この文章はダミーです。ここに会社の紹介が入ります。</p>
                </div>
              </li>
              <li class="member-card swiper-slide">
                <div class="member-card__img-wrap">
                  <div class="member-card__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/member2@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                  </div>
                  <p class="member-card__company">株式会社◯◯◯◯◯</p>
                </div>
                <div class="member-card__body">
                  <p class="member-card__name">代表取締役　〇〇〇〇</p>
                  <p class="member-card__text text">ここに会社の紹介が入ります。この文章はダミーです。ここに会社の紹介が入ります。</p>
                </div>
              </li>
              <li class="member-card swiper-slide">
                <div class="member-card__img-wrap">
                  <div class="member-card__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/member3@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                  </div>
                  <p class="member-card__company">株式会社◯◯◯◯◯</p>
                </div>
                <div class="member-card__body">
                  <p class="member-card__name">代表取締役　〇〇〇〇</p>
                  <p class="member-card__text text">ここに会社の紹介が入ります。この文章はダミーです。ここに会社の紹介が入ります。</p>
                </div>
              </li>
              <li class="member-card swiper-slide">
                <div class="member-card__img-wrap">
                  <div class="member-card__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/member4@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                  </div>
                  <p class="member-card__company">株式会社◯◯◯◯◯</p>
                </div>
                <div class="member-card__body">
                  <p class="member-card__name">代表取締役　〇〇〇〇</p>
                  <p class="member-card__text text">ここに会社の紹介が入ります。この文章はダミーです。ここに会社の紹介が入ります。</p>
                </div>
              </li>
              <li class="member-card swiper-slide">
                <div class="member-card__img-wrap">
                  <div class="member-card__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/member1@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                  </div>
                  <p class="member-card__company">株式会社◯◯◯◯◯</p>
                </div>
                <div class="member-card__body">
                  <p class="member-card__name">代表取締役　〇〇〇〇</p>
                  <p class="member-card__text text">ここに会社の紹介が入ります。この文章はダミーです。ここに会社の紹介が入ります。</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="member__swiper-ui js-member-swiper-ui">
            <div class="member__swiper-ui-prev swiper-button-prev"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/icon-prev.svg')); ?>" alt="前へ" width="40" height="40" loading="lazy" /></div>
            <div class="member__swiper-ui-next swiper-button-next"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/icon-next.svg')); ?>" alt="次へ" width="40" height="40" loading="lazy" /></div>
            <div class="member__swiper-ui-scrollbar swiper-scrollbar"></div>
          </div>
        </div>
        <div class="member__button">
          <a href="#" class="button">Read more
            <div class="button__icon">
              <?php echo get_template_part("parts/icon-arrow-svg") ?>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="infomation layout-infomation">
    <div class="infomation__inner inner">
      <div class="infomation__container">
        <div class="infomation__aside">
          <div class="infomation__head">
            <div class="section-head--small">
              <p class="section-head__en">Infomation</p>
              <h2 class="section-head__ja">活動報告</h2>
            </div>
          </div>
          <ul class="infomation__tab-menu">
            <li class="infomation__tab-menu-item label-category--white js-tab-menu is-active" data-number="tab01">カテゴリ</li>
            <li class="infomation__tab-menu-item label-category--white js-tab-menu" data-number="tab02">カテゴリ</li>
            <li class="infomation__tab-menu-item label-category--white js-tab-menu" data-number="tab03">カテゴリ</li>
            <li class="infomation__tab-menu-item label-category--white js-tab-menu" data-number="tab04">カテゴリ</li>
          </ul>
          <div class="infomation__button">
            <a href="#" class="button">Read more
              <div class="button__icon">
                <?php echo get_template_part("parts/icon-arrow-svg") ?>
              </div>
            </a>
          </div>
        </div>
        <div class="infomation__tab-content-wrap">
          <ul id="tab01" class="infomation__tab-content info-cards js-tab-content is-active">
            <li class="info-card">
              <a class="info-card__link" href="#">
                <div class="info-card__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/info1@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                </div>
                <h3 class="info-card__title">ここに活動報告のタイトルが入ります。ダミーです。</h3>
                <div class="info-card__meta">
                  <time class="info-card__date" datetime="2024-01-04">2024.01.04</time>
                  <span class="info-card__category label-category">カテゴリ</span>
                </div>
              </a>
            </li>
            <li class="info-card">
              <a class="info-card__link" href="#">
                <div class="info-card__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/info2@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                </div>
                <h3 class="info-card__title">ここに活動報告のタイトルが入ります。ダミーです。</h3>
                <div class="info-card__meta">
                  <time class="info-card__date" datetime="2024-01-04">2024.01.04</time>
                  <span class="info-card__category label-category">カテゴリ</span>
                </div>
              </a>
            </li>
            <li class="info-card">
              <a class="info-card__link" href="#">
                <div class="info-card__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/about1@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                </div>
                <h3 class="info-card__title">ここに活動報告のタイトルが入ります。ダミーです。</h3>
                <div class="info-card__meta">
                  <time class="info-card__date" datetime="2024-01-04">2024.01.04</time>
                  <span class="info-card__category label-category">カテゴリ</span>
                </div>
              </a>
            </li>
          </ul>
          <ul id="tab02" class="infomation__tab-content info-cards js-tab-content">
            <li class="info-card">
              <a class="info-card__link" href="#">
                <div class="info-card__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/info2@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                </div>
                <h3 class="info-card__title">ここに活動報告のタイトルが入ります。ダミーです。</h3>
                <div class="info-card__meta">
                  <time class="info-card__date" datetime="2024-01-04">2024.01.04</time>
                  <span class="info-card__category label-category">カテゴリ</span>
                </div>
              </a>
            </li>
          </ul>
          <ul id="tab03" class="infomation__tab-content info-cards js-tab-content">
            <li class="info-card">
              <a class="info-card__link" href="#">
                <div class="info-card__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/about1@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                </div>
                <h3 class="info-card__title">ここに活動報告のタイトルが入ります。ダミーです。</h3>
                <div class="info-card__meta">
                  <time class="info-card__date" datetime="2024-01-04">2024.01.04</time>
                  <span class="info-card__category label-category">カテゴリ</span>
                </div>
              </a>
            </li>
          </ul>
          <ul id="tab04" class="infomation__tab-content info-cards js-tab-content">
            <li class="info-card">
              <a class="info-card__link" href="#">
                <div class="info-card__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/mv@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                </div>
                <h3 class="info-card__title">ここに活動報告のタイトルが入ります。ダミーです。</h3>
                <div class="info-card__meta">
                  <time class="info-card__date" datetime="2024-01-04">2024.01.04</time>
                  <span class="info-card__category label-category">カテゴリ</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="seminar layout-seminar">
    <div class="seminar__inner inner">
      <div class="seminar__container">
        <div class="seminar__head">
          <div class="section-head">
            <p class="section-head__en">Morning seminar</p>
            <h2 class="section-head__ja">初めての方におすすめ！モーニングセミナー</h2>
          </div>
        </div>
        <div class="seminar__list">
          <div class="seminar__swiper swiper js-seminar-swiper">
            <ul class="seminar-cards swiper-wrapper">
              <li class="seminar-card swiper-slide">
                <a class="seminar-card__link" href="#">
                  <div class="seminar-card__head">
                    <div class="seminar-card__title-wrap">
                      <h3 class="seminar-card__title">
                        <span class="seminar-card__title-number">第100回</span><span class="seminar-card__title-text">人生は倫理</span>
                      </h3>
                    </div>
                    <div class="seminar-card__img">
                      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/seminar1@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                    </div>
                  </div>
                  <dl class="seminar-card__info">
                    <div class="seminar-card__info-wrap">
                      <dt class="seminar-card__info-term">日時</dt>
                      <dd class="seminar-card__info-description">12月19日（火）</dd>
                    </div>
                    <div class="seminar-card__info-wrap">
                      <dt class="seminar-card__info-term">会場</dt>
                      <dd class="seminar-card__info-description">下越北倫理法人会</dd>
                    </div>
                    <div class="seminar-card__info-wrap">
                      <dt class="seminar-card__info-term">講師</dt>
                      <dd class="seminar-card__info-description">田村 征司／新潟県倫理法人会 相談役／(株)トゥルーワークス 会長</dd>
                    </div>
                  </dl>
                </a>
              </li>
              <li class="seminar-card swiper-slide">
                <a class="seminar-card__link" href="#">
                  <div class="seminar-card__head">
                    <div class="seminar-card__title-wrap">
                      <h3 class="seminar-card__title">
                        <span class="seminar-card__title-number">第1033回</span><span class="seminar-card__title-text">三条凧合戦と凧屋について</span>
                      </h3>
                    </div>
                    <div class="seminar-card__img">
                      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/seminar2@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                    </div>
                  </div>
                  <dl class="seminar-card__info">
                    <div class="seminar-card__info-wrap">
                      <dt class="seminar-card__info-term">日時</dt>
                      <dd class="seminar-card__info-description">12月19日（火）</dd>
                    </div>
                    <div class="seminar-card__info-wrap">
                      <dt class="seminar-card__info-term">会場</dt>
                      <dd class="seminar-card__info-description">新潟万代倫理法人会</dd>
                    </div>
                    <div class="seminar-card__info-wrap">
                      <dt class="seminar-card__info-term">講師</dt>
                      <dd class="seminar-card__info-description">須藤 謙一／三条南倫理法人会 ＭＳ委員／須藤凧屋 代表</dd>
                    </div>
                  </dl>
                </a>
              </li>
              <li class="seminar-card swiper-slide">
                <a class="seminar-card__link" href="#">
                  <div class="seminar-card__head">
                    <div class="seminar-card__title-wrap">
                      <h3 class="seminar-card__title">
                        <span class="seminar-card__title-number">第100回</span><span class="seminar-card__title-text">人生は倫理</span>
                      </h3>
                    </div>
                    <div class="seminar-card__img">
                      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/seminar1@2x.jpg')); ?>" alt="" width="278" height="196" loading="lazy">
                    </div>
                  </div>
                  <dl class="seminar-card__info">
                    <div class="seminar-card__info-wrap">
                      <dt class="seminar-card__info-term">日時</dt>
                      <dd class="seminar-card__info-description">12月19日（火）</dd>
                    </div>
                    <div class="seminar-card__info-wrap">
                      <dt class="seminar-card__info-term">会場</dt>
                      <dd class="seminar-card__info-description">下越北倫理法人会</dd>
                    </div>
                    <div class="seminar-card__info-wrap">
                      <dt class="seminar-card__info-term">講師</dt>
                      <dd class="seminar-card__info-description">田村 征司／新潟県倫理法人会 相談役／(株)トゥルーワークス 会長</dd>
                    </div>
                  </dl>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="seminar__swiper-ui js-seminar-swiper-ui">
          <div class="seminar__swiper-ui-prev swiper-button-prev"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/icon-prev.svg')); ?>" alt="前へ" width="40" height="40" loading="lazy" /></div>
          <div class="seminar__swiper-ui-next swiper-button-next"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/icon-next.svg')); ?>" alt="次へ" width="40" height="40" loading="lazy" /></div>
          <div class="seminar__swiper-ui-scrollbar swiper-scrollbar"></div>
        </div>
      </div>
      <div class="seminar__button">
        <a href="#" class="button">Read more
          <div class="button__icon">
            <?php echo get_template_part("parts/icon-arrow-svg") ?>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="about layout-about">
    <div class="about__inner inner">
      <div class="about__head">
        <div class="section-head">
          <p class="section-head__en">About us</p>
          <h2 class="section-head__ja">倫理法人会について</h2>
        </div>
      </div>
      <div class="about__container">
        <div class="about__text">
          <p class="text">倫理法人会は、経営者自身の人となりを見つめ直すきっかけを作ることで自己革新を促し、所属企業の発展あるいは地域社会に貢献することを目的としています。新潟県倫理法人会は、1985年に設立され、現在は県内26法人会に所属する3,000を超える会員数を持つ団体です。</p>
        </div>
        <div class="about__body">
          <ul class="about-list">
            <li class="about-item">
              <a class="about-item__link" href="#">
                <h3 class="about-item__title">会場一覧（単会情報）</h3>
                <div class="about-item__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/about1@2x.jpg')); ?>" alt="" width="300" height="212" loading="lazy" />
                </div>
                <div class="about-item__icon">
                  <?php echo get_template_part("parts/icon-arrow-svg") ?>
                </div>
              </a>
            </li>
            <li class="about-item">
              <a class="about-item__link" href="#">
                <h3 class="about-item__title">組織・役員</h3>
                <div class="about-item__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/about1@2x.jpg')); ?>" alt="" width="300" height="212" loading="lazy" />
                </div>
                <div class="about-item__icon">
                  <?php echo get_template_part("parts/icon-arrow-svg") ?>
                </div>
              </a>
            </li>
            <li class="about-item">
              <a class="about-item__link" href="#">
                <h3 class="about-item__title">委員会</h3>
                <div class="about-item__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/about1@2x.jpg')); ?>" alt="" width="300" height="212" loading="lazy" />
                </div>
                <div class="about-item__icon">
                  <?php echo get_template_part("parts/icon-arrow-svg") ?>
                </div>
              </a>
            </li>
            <li class="about-item">
              <a class="about-item__link" href="#">
                <h3 class="about-item__title">事務局</h3>
                <div class="about-item__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/about1@2x.jpg')); ?>" alt="" width="300" height="212" loading="lazy" />
                </div>
                <div class="about-item__icon">
                  <?php echo get_template_part("parts/icon-arrow-svg") ?>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="about__schedule">
        <div class="about__schedule-head">
          <div class="section-head--delta">
            <p class="section-head__en">Seminar schedule</p>
            <h2 class="section-head__ja">セミナー予定表</h2>
          </div>
        </div>
        <div class="about__schedule-body">
          <table class="schedule-date js-schedule-date">
            <tbody>
              <tr>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
              </tr>
              <tr>
                <td class="schedule-date__blue">新潟万代</td>
                <td class="schedule-date__blue">新潟万代</td>
                <td class="schedule-date__blue">新潟万代</td>
                <td class="schedule-date__blue">新潟万代</td>
                <td class="schedule-date__blue">新潟万代</td>
              </tr>
              <tr>
                <td class="schedule-date__blue">新潟西</td>
                <td class="schedule-date__blue">新潟西</td>
                <td class="schedule-date__blue">新潟西</td>
                <td class="schedule-date__blue">新潟西</td>
                <td class="schedule-date__blue">新潟西</td>
              </tr>
              <tr>
                <td class="schedule-date__darkblue">下越北</td>
                <td class="schedule-date__darkblue">下越北</td>
                <td class="schedule-date__darkblue">下越北</td>
                <td class="schedule-date__darkblue">下越北</td>
                <td class="schedule-date__darkblue">下越北</td>
              </tr>
              <tr>
                <td class="schedule-date__yellow">三条南</td>
                <td class="schedule-date__yellow">三条南</td>
                <td class="schedule-date__yellow">三条南</td>
                <td class="schedule-date__yellow">三条南</td>
                <td class="schedule-date__yellow">三条南</td>
              </tr>
              <tr>
                <td class="schedule-date__yellow">燕中央</td>
                <td class="schedule-date__yellow">燕中央</td>
                <td class="schedule-date__yellow">燕中央</td>
                <td class="schedule-date__yellow">燕中央</td>
                <td class="schedule-date__yellow">燕中央</td>
              </tr>
              <tr>
                <td class="schedule-date__purple">長岡市</td>
                <td class="schedule-date__purple">長岡市</td>
                <td class="schedule-date__purple">長岡市</td>
                <td class="schedule-date__purple">長岡市</td>
                <td class="schedule-date__purple">長岡市</td>
              </tr>
              <tr>
                <td class="schedule-date__violet">十日町市</td>
                <td class="schedule-date__violet">十日町市</td>
                <td class="schedule-date__violet">十日町市</td>
                <td class="schedule-date__violet">十日町市</td>
                <td class="schedule-date__violet">十日町市</td>
              </tr>
              <tr>
                <td class="schedule-date__limegreen">妙高市</td>
                <td class="schedule-date__limegreen">妙高市</td>
                <td class="schedule-date__limegreen">妙高市</td>
                <td class="schedule-date__limegreen">妙高市</td>
                <td class="schedule-date__limegreen">妙高市</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <?php echo get_template_part("parts/join") ?>

  <?php echo get_template_part("parts/contact") ?>

</main>

<?php get_footer(); ?>