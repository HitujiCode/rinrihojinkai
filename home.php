<?php get_header(); ?>

<main class="l-main">

  <?php get_template_part("parts/fv"); ?>

  <section class="p-case l-common">
    <div class="p-case__inner l-inner">
      <div class="p-case__content">
        <ul class="p-cards">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <li class="p-cards__item">

                <a href="<?php the_permalink(); ?>" class="p-card">
                  <div class="p-card__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage@2x.webp')); ?>" alt="No Image" width="300" height="169" />
                    <?php endif; ?>
                  </div>
                  <div class="p-card__category">
                    <?php
                    $categories = get_the_category();

                    foreach ($categories as $category) {
                      echo '<span class="c-category">' . esc_html($category->name) . '</span>';
                    }
                    ?>
                  </div>
                  <p class="p-card__title"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <p>記事が投稿されていません</p>
      <?php endif; ?>
      </div>
      <div class="p-case__pagenavi">
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </div>
      <div class="p-case__button">
        <a class="c-button" href="<?php echo esc_url(home_url("/")) ?>"><span>top</span></a>
      </div>
    </div>
  </section>

  <?php get_template_part('parts/contact'); ?>
</main>

<?php get_footer(); ?>