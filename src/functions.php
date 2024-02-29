<?php

/* 基本設定 */
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

/* wordpressバージョン情報の削除 */
remove_action("wp_head", "wp_generator");

/* 投稿者一覧ページを自動で生成されないようにする */
function disable_author_archive()
{
  if (preg_match('#/author/.+#', $_SERVER['REQUEST_URI'])) {
    wp_redirect(esc_url(home_url('/404.php')));
    exit;
  }
}
add_action('init', 'disable_author_archive');

/* script、style設定 */
function my_script_init()
{
  // WordPressに含まれているjquery.jsを読み込まない
  wp_deregister_script('jquery');

  // フォント
  wp_enqueue_style('google-fonts-preconnect', 'https://fonts.googleapis.com', array(), null);
  wp_enqueue_style('gstatic-fonts-preconnect', 'https://fonts.gstatic.com', array(), null, 'crossorigin');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Noto+Sans+JP:wght@100..900&display=swap', array(), null);

  // swiper
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.7.1.min.js', array(), '1.0.1');
  wp_enqueue_script('slider-js', '//unpkg.com/swiper@11/swiper-bundle.min.js', array(), '', true);
  wp_enqueue_style('slider-css', '//unpkg.com/swiper@11/swiper-bundle.min.css', array(), '', 'all');

  // JavaScript
  wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);

  // css
  wp_enqueue_style('my-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all');
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * wp_enqueue_scriptで読み込むjsにdeferを付ける
 */
add_filter('script_loader_tag', 'add_defer', 10, 2);
function add_defer($tag, $handle)
{
  if ($handle !== 'my-script') {
    return $tag;
  }
  return str_replace(' src=', ' defer src=', $tag);
}

/* Contact Form 7で自動挿入されるPタグ、brタグを削除 */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

// 絵文字設定の削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// RSDの削除
remove_action('wp_head', 'rsd_link');
