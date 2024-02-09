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
                      <?php
                      // サムネイルがあるかどうかをチェック
                      if (has_post_thumbnail()) :
                        // サムネイルの HTML を直接出力
                        echo get_the_post_thumbnail(null, 'full');
                      else :
                        // CFSで指定された画像があるかどうかをチェック
                        $works_gallery = CFS()->get('works_gallery');
                        $cfs_image_url = !empty($works_gallery) ? $works_gallery[0]['works_img'] : '';

                        // CFSで指定された画像がある場合、その画像を直接表示
                        if (!empty($cfs_image_url)) :
                          echo '<img src="' . esc_url($cfs_image_url) . '" alt="' . esc_attr(get_the_title()) . '">';
                        else :
                          // サムネイルもCFSの画像もない場合、'No Image' 画像を表示
                          echo '<img src="' . esc_url(get_theme_file_uri('/assets/images/common/noimage@2x.webp')) . '" alt="No Image">';
                        endif;
                      endif;
                      ?>
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