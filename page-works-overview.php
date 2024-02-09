<?php get_header(); ?>

<main class="l-main">

  <?php get_template_part("parts/fv"); ?>

  <div class="p-works-overview l-common">
    <div class="p-works-overview__inner l-inner">

      <!-- 通常の撮影 -->
      <section class="p-works-overview__section p-archive-works">
        <div class="p-archive-works__title">
          <div class="c-head">
            <h2 class="c-head__main">通常の撮影</h2>
            <span class="c-head__sub">（同性、エイジング、再婚、ソロ、2次元、ロケーション）</span>
          </div>
        </div>
        <div class="p-archive-works__content">
          <ul class="p-cards">
            <?php
            $args = array(
              'post_type' => 'works',
              'posts_per_page' => 3,
              'tax_query' => array(
                array(
                  'taxonomy' => 'genre',
                  'field'    => 'slug',
                  'terms'    => array('jusan-mairi', 'drone'),
                  'operator' => 'NOT IN',
                ),
              ),
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            ?>
                <li class="p-cards__item">
                  <a href="<?php the_permalink(); ?>" class="p-card">
                    <div class="p-card__img">
                      <?php
                      // サムネイルがあるかどうかをチェック
                      if (has_post_thumbnail()) :
                        the_post_thumbnail();
                      else :
                        // CFSで指定された画像があるかどうかをチェック
                        $works_gallery = CFS()->get('works_gallery');
                        $cfs_image_url = !empty($works_gallery) ? $works_gallery[0]['works_img'] : '';

                        // CFSで指定された画像がある場合、そのIDを取得しようとする
                        if (!empty($cfs_image_url)) :
                          $image_id = get_attachment_id_from_url($cfs_image_url);
                          if (!empty($image_id)) :
                            echo wp_get_attachment_image($image_id, 'full');
                          else :
                            // CFSの画像URLからIDが取得できなかった場合、直接URLを使用して表示
                            echo '<img src="' . esc_url($cfs_image_url) . '" alt="' . get_the_title_attribute() . '">';
                          endif;
                        else :
                          // サムネイルもCFSの画像もない場合、'No Image' 画像を表示
                          echo '<img src="' . esc_url(get_theme_file_uri('/assets/images/common/noimage@2x.webp')) . '" alt="No Image">';
                        endif;
                      endif;
                      ?>
                    </div>
                    <div class="p-card__category">
                      <?php
                      $terms = get_the_terms(get_the_ID(), 'genre');
                      if ($terms && !is_wp_error($terms)) :
                        foreach ($terms as $term) {
                          echo '<span class="c-category">' . esc_html($term->name) . '</span>';
                        }
                      endif;
                      ?>
                    </div>
                    <p class="p-card__title"><?php the_title(); ?></p>
                  </a>
                </li>
              <?php endwhile; ?>
            <?php else : ?>
              <p>記事が投稿されていません</p>
            <?php endif;
            wp_reset_postdata(); ?>
          </ul>
        </div>
        <div class="p-archive-works__button">
          <a href="<?php echo esc_url(home_url('/works')); ?>" class="c-button">view all</a>
        </div>
      </section>
      <!-- 十三詣り -->
      <section class="p-works-overview__section p-archive-works l-common">
        <div class="p-archive-works__title">
          <div class="c-head">
            <h2 class="c-head__main">十三詣り</h2>
          </div>
        </div>
        <div class="p-archive-works__content">
          <ul class="p-cards">
            <?php
            $jusan_mairi_args = array(
              'post_type' => 'works',
              'posts_per_page' => 3,
              'tax_query' => array(
                array(
                  'taxonomy' => 'genre',
                  'field'    => 'slug',
                  'terms'    => 'jusan-mairi',
                ),
              ),
            );
            $jusan_mairi_query = new WP_Query($jusan_mairi_args);

            if ($jusan_mairi_query->have_posts()) : while ($jusan_mairi_query->have_posts()) : $jusan_mairi_query->the_post();
            ?>
                <li class="p-cards__item">
                  <a href="<?php the_permalink(); ?>" class="p-card">
                    <div class="p-card__img">
                      <?php
                      // サムネイルがあるかどうかをチェック
                      if (has_post_thumbnail()) :
                        the_post_thumbnail();
                      else :
                        // CFSで指定された画像があるかどうかをチェック
                        $works_gallery = CFS()->get('works_gallery');
                        $cfs_image_url = !empty($works_gallery) ? $works_gallery[0]['works_img'] : '';

                        // CFSで指定された画像がある場合、そのIDを取得しようとする
                        if (!empty($cfs_image_url)) :
                          $image_id = get_attachment_id_from_url($cfs_image_url);
                          if (!empty($image_id)) :
                            echo wp_get_attachment_image($image_id, 'full');
                          else :
                            // CFSの画像URLからIDが取得できなかった場合、直接URLを使用して表示
                            echo '<img src="' . esc_url($cfs_image_url) . '" alt="' . get_the_title_attribute() . '">';
                          endif;
                        else :
                          // サムネイルもCFSの画像もない場合、'No Image' 画像を表示
                          echo '<img src="' . esc_url(get_theme_file_uri('/assets/images/common/noimage@2x.webp')) . '" alt="No Image">';
                        endif;
                      endif;
                      ?>
                    </div>
                    <div class="p-card__category">
                      <?php
                      $terms = get_the_terms(get_the_ID(), 'genre');
                      if ($terms && !is_wp_error($terms)) :
                        foreach ($terms as $term) {
                          echo '<span class="c-category">' . esc_html($term->name) . '</span>';
                        }
                      endif;
                      ?>
                    </div>
                    <p class="p-card__title"><?php the_title(); ?></p>
                  </a>
                </li>
              <?php endwhile; ?>
            <?php else : ?>
              <p>記事が投稿されていません</p>
            <?php endif;
            wp_reset_postdata(); ?>
          </ul>
        </div>
        <div class="p-archive-works__button">
          <a href="<?php echo esc_url(home_url('/works')); ?>" class="c-button">view all</a>
        </div>
      </section>
      <!-- ドローン -->
      <?php
      $drone_arg = array(
        'post_type' => 'works',
        'posts_per_page' => 3,
        'tax_query' => array(
          array(
            'taxonomy' => 'genre',
            'field'    => 'slug',
            'terms'    => 'drone', // 表示したいタームのスラッグ
          ),
        ),
      );
      $drone_query = new WP_Query($drone_arg);

      if ($drone_query->have_posts()) : ?>
        <section class="p-works-overview__section p-archive-works l-common">
          <div class="p-archive-works__title">
            <div class="c-head">
              <h2 class="c-head__main">ドローン</h2>
            </div>
          </div>
          <div class="p-archive-works__content">
            <ul class="p-cards">
              <?php while ($drone_query->have_posts()) : $drone_query->the_post();
              ?>
                <li class="p-cards__item">
                  <a href="<?php the_permalink(); ?>" class="p-card">
                    <div class="p-card__img">
                      <?php
                      // サムネイルがあるかどうかをチェック
                      if (has_post_thumbnail()) :
                        the_post_thumbnail();
                      else :
                        // CFSで指定された画像があるかどうかをチェック
                        $works_gallery = CFS()->get('works_gallery');
                        $cfs_image_url = !empty($works_gallery) ? $works_gallery[0]['works_img'] : '';

                        // CFSで指定された画像がある場合、そのIDを取得しようとする
                        if (!empty($cfs_image_url)) :
                          $image_id = get_attachment_id_from_url($cfs_image_url);
                          if (!empty($image_id)) :
                            echo wp_get_attachment_image($image_id, 'full');
                          else :
                            // CFSの画像URLからIDが取得できなかった場合、直接URLを使用して表示
                            echo '<img src="' . esc_url($cfs_image_url) . '" alt="' . get_the_title_attribute() . '">';
                          endif;
                        else :
                          // サムネイルもCFSの画像もない場合、'No Image' 画像を表示
                          echo '<img src="' . esc_url(get_theme_file_uri('/assets/images/common/noimage@2x.webp')) . '" alt="No Image">';
                        endif;
                      endif;
                      ?>
                    </div>
                    <div class="p-card__category">
                      <?php
                      $terms = get_the_terms(get_the_ID(), 'genre');
                      if ($terms && !is_wp_error($terms)) :
                        foreach ($terms as $term) {
                          echo '<span class="c-category">' . esc_html($term->name) . '</span>';
                        }
                      endif;
                      ?>
                    </div>

                    <p class="p-card__title"><?php the_title(); ?></p>
                  </a>
                </li>
            </ul>
          </div>
          <div class="p-archive-works__button">
            <a href="<?php echo esc_url(home_url('/works')); ?>" class="c-button">view all</a>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif;
      wp_reset_postdata(); ?>

    <div class="p-archive-works__button-top l-common">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="c-button">top</a>
    </div>
    </div>
  </div>
  <?php get_template_part("parts/contact") ?>
</main>

<?php get_footer(); ?>