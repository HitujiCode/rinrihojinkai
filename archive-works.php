<?php get_header(); ?>

<main class="l-main">

  <?php get_template_part("parts/fv"); ?>

  <div class="p-archive-works l-common">
    <div class="p-archive-works__inner l-inner">
      <div class="p-archive-works__content">
        <ul class="p-cards">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <li class="p-cards__item">
                <a href="<?php the_permalink(); ?>" class="p-card">
                  <div class="p-card__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <!-- サムネイルがない場合の処理 -->
                      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage@2x.webp')); ?>" alt="No Image">
                    <?php endif; ?>
                  </div>
                  <div class="p-card__category">
                    <?php $terms = get_the_terms(get_the_ID(), 'genre'); ?>
                    <?php if ($terms && !is_wp_error($terms)) : ?>
                      <?php foreach ($terms as $term) : ?>
                        <span class="c-category"><?php echo esc_html($term->name); ?></span>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                  <h2 class="p-card__title"><?php the_title(); ?></h2>
                </a>
              </li>
            <?php endwhile; ?>
          <?php else : ?>
            <p>記事が投稿されていません</p>
          <?php endif; ?>
        </ul>
      </div>

      <!-- ページャー -->
      <div class="p-archive-works__paginaition">
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </div>

      <div class="p-archive-works__button">
        <a href="<?php echo esc_url(get_post_type_archive_link('/')); ?>" class="c-button">top</a>
      </div>
    </div>
  </div>

  <?php get_template_part("parts/contact") ?>

</main>

<?php get_footer(); ?>