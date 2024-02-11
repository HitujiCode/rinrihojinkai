<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="FIORITURA" />
  <meta property="og:description" content="" />
  <?php if (is_404()) : ?>
    <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body>
  <header class="p-header js-header">
    <div class="p-header__inner">
      <?php if (is_front_page()) :
      ?>
        <a href="<?php echo esc_url(home_url()); ?>" class="p-header__logo c-logo">
          <h1 class="c-logo__img">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/logo.svg')); ?>" alt="Logo" width="171" height="38" />
          </h1>
        <?php else : ?>
          <a href="<?php echo esc_url(home_url()); ?>" class="p-header__logo c-logo">
            <div class="c-logo__img">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/logo.svg')); ?>" alt="Logo" width="171" height="38" />
            </div>
          <?php endif; ?>
          </a>
          <nav class="p-header__nav">
            <ul class="p-header__nav-items">
              <li class="p-header__nav-item">
                <a class="p-header__nav-link" href="<?php echo esc_url(home_url("/plan")) ?>"><span>plan</span></a>
              </li>
              <li class="p-header__nav-item">
                <a class="p-header__nav-link" href="<?php echo esc_url(home_url("/case")) ?>"><span>case</span></a>
              </li>
              <li class="p-header__nav-item">
                <a class="p-header__nav-link" href="<?php echo esc_url(home_url("/works")) ?>"><span>works</span></a>
              </li>
              <li class="p-header__nav-item">
                <a class="p-header__nav-link" href="<?php echo esc_url(home_url("/flow")) ?>"><span>flow</span></a>
              </li>
            </ul>
            <ul class="p-header__sns-icons p-sns-icons">
              <li class="p-sns-icons__item">
                <a href="" target="_blank" rel="noopener noreferrer">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/instagram.svg')); ?>" alt="Instagram" width="16" height="16" /></a>
              </li>
              <li class="p-sns-icons__item">
                <a href="" target="_blank" rel="noopener noreferrer">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/x.svg')); ?>" alt="X" width="16" height="16" /></a>
              </li>
              <li class="p-sns-icons__item">
                <a href="" target="_blank" rel="noopener noreferrer">
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/facebook.svg')); ?>" alt="Facebook" width="16" height="16" /></a>
              </li>
            </ul>
          </nav>
          <button class="p-header__hamburger js-hamburger">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="p-header__drawer js-drawer">
            <div class="p-header__drawer-wrap">
              <nav class="p-header__drawer-nav p-global-nav">
                <ul class="p-global-nav__items">
                  <li class="p-global-nav__item">
                    <a class="p-global-nav__link" href="<?php echo esc_url(home_url("/plan")) ?>"><span>plan</span></a>
                  </li>
                  <li class="p-global-nav__item">
                    <a class="p-global-nav__link" href="<?php echo esc_url(home_url("/case")) ?>"><span>case</span></a>
                  </li>
                  <li class="p-global-nav__item">
                    <a class="p-global-nav__link" href="<?php echo esc_url(home_url("/works")) ?>"><span>works</span></a>
                  </li>
                  <li class="p-global-nav__item">
                    <a class="p-global-nav__link" href="<?php echo esc_url(home_url("/flow")) ?>"><span>flow</span></a>
                  </li>
                </ul>
                <ul class="p-global-nav__icons p-sns-icons--white">
                  <li class="p-sns-icons__item">
                    <a href="" target="_blank" rel="noopener noreferrer">
                      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/instagram.svg')); ?>" alt="Instagram" width="16" height="16" /></a>
                  </li>
                  <li class="p-sns-icons__item">
                    <a href="" target="_blank" rel="noopener noreferrer">
                      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/x.svg')); ?>" alt="X" width="16" height="16" /></a>
                  </li>
                  <li class="p-sns-icons__item">
                    <a href="" target="_blank" rel="noopener noreferrer">
                      <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/facebook.svg')); ?>" alt="Facebook" width="16" height="16" /></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
    </div>
  </header>