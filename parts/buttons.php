<?php
$pageSettings = [
  "single" => [
    "link" => "case",
  ],
  "single-works" => [
    "link" => "works",
  ],
  "consultation" => [
    "link" => "plan",
  ],
  "photograph" => [
    "link" => "plan",
  ],
];

/* リンクの初期設定 */
// デフォルトのリンク
$link = '/';
// 戻るボタンのonClickイベント
$backButtonOnClick = '';

if (is_singular('post') || is_singular('works')) {
  // 1つ前のページに戻るようにJavaScriptのonClickイベントを設定
  $backButtonOnClick = 'onclick="window.history.back(); return false;"';
} elseif (is_page()) {
  // 現在のページのスラッグを取得
  $slug = get_post_field('post_name', get_post());
  if (array_key_exists($slug, $pageSettings)) {
    $link = $pageSettings[$slug]['link'];
  }
}
?>

<div class="p-buttons">
  <?php if ($backButtonOnClick) : ?>
    <div class="p-buttons__button"><a href="#" <?php echo $backButtonOnClick; ?> class="c-button">back</a></div>
  <?php else : ?>
    <div class="p-buttons__button"><a href="<?php echo esc_url(home_url($link)); ?>" class="c-button">back</a></div>
  <?php endif; ?>
  <div class="p-buttons__button"><a href="<?php echo esc_url(home_url()); ?>" class="c-button">top</a></div>
</div>