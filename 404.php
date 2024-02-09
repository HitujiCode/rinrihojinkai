<?php get_header(); ?>

<main class="l-main l-grid">

  <?php get_template_part("parts/fv"); ?>

  <section class="p-404 l-common">
    <div class="p-404__inner l-inner">
      <div class="p-404__wrap">
        <p class="p-404__text c-text">お探しのページが見つかりませんでした。<br>
          申し訳ありませんが、お探しのページは存在しないか、別の場所に移動した可能性があります。<br>
          3秒後に自動的にトップページに遷移します。
        </p>
        <div class="p-404__button">
          <a class="c-button" href="<?php echo esc_url(home_url('/')); ?>"><span>top</span></a>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part("parts/contact") ?>

</main>

<?php get_footer(); ?>