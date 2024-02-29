<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta property="og:title" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />

  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url("")); ?>" class="logo">
          <div class="logo__icon">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/logo.svg')); ?>" alt="Logo" width="40" height="40">
          </div>
          <p class="logo__title">新潟県倫理法人会</p>
        </a>
      </h1>
      <nav class="header__nav">
        <ul class="header__nav-items">
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url("/first")); ?>"><span>はじめての方へ</span></a>
          </li>
          <li class="header__nav-item header__nav-item--noicon">
            <a href="<?php echo esc_url(home_url("/membership")); ?>"><span>入会案内</span></a>
          </li>
          <li class="header__nav-item">
            <a href="#"><span>会員の方へ</span></a>
          </li>
          <li class="header__nav-item">
            <a href="#"><span>倫理法人会について</span></a>
          </li>
          <li class="header__nav-item header__nav-item--contact">
            <a href="#">お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <button class="header__hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="header__drawer js-drawer">
        <nav class="header__drawer-nav">
          <ul class="header__drawer-items">
            <li class="header__drawer-item">
              <a href="<?php echo esc_url(home_url("/first")); ?>"><span>はじめての方へ</span></a>
            </li>
            <li class="header__drawer-item">
              <a href="<?php echo esc_url(home_url("/membership")); ?>"><span>入会案内</span></a>
            </li>
            <li class="header__drawer-item">
              <a href="#"><span>会員の方へ</span></a>
            </li>
            <li class="header__drawer-item">
              <a href="#"><span>倫理法人会につ</span>いて</a>
            </li>
            <li class="header__drawer-item header__drawer-item--contact">
              <a href="#" target="_blank" rel="noopener"><span>お問い合わせ</span></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>