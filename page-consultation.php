<?php get_header(); ?>

<main class="l-main">

  <?php get_template_part("parts/fv"); ?>

  <section class="p-sub-consultation l-common">
    <div class="p-sub-consultation__inner l-inner">
      <div class="p-feature">
        <div class="p-feature__head">
          <h2 class="p-feature__head-main">個々のアイデンティティを尊重し、真摯に向き合うカウンセリング</h2>
          <span class="p-feature__head-sub">（自己同一性、存在証明、同性愛など）</span>
        </div>
        <div class="p-feature__inner l-inner">
          <div class="p-feature__content">
            <div class="p-feature__img">
              <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/consultation/consultation_pc@2x.webp')); ?>" media="(min-width:768px)" width="760" height="396" />
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/consultation/consultation@2x.webp')); ?>" alt="カウンセリングの様子" width="315" height="164" />
              </picture>
            </div>
            <p class="p-feature__text c-text">
              未来の幸せの形はさまざまです。私たちはそれを祝福致します。<br>
              全ての幸せへの尊重を表現し、受け入れ、推奨する世界を一緒に創りたいと考えています。<br>
              ご自身のパートナーのことや恋愛対象、なかなか家族や友人に相談できないことなどお気軽にご相談ください。<br>
              スタッフ一同、サポートいたします。
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-sub-access l-common">
    <div class="p-sub-access__inner l-inner">
      <div class="p-sub-access__head">
        <div class="c-section-title">
          <span class="c-section-title__en">access</span>
          <h2 class="c-section-title__ja">アクセス</h2>
        </div>
      </div>
      <div class="p-sub-access__content">
        <div class="p-sub-access__body">
          <p class="p-sub-access__text">〒951-8067<br>
            新潟市中央区本町通6番町1141番地1<br>
            ストークスビル 新潟一番館 3階313号室
          </p>
          <p class="p-sub-access__text">
            新潟駅前万代口バスターミナルの「7番線」又は「8番線」よりご乗車いただき、「本町」バス停にて降車してください。</p>
          <p class="p-sub-access__text"> Tel：090-3233-2023<br>
            営業時間：平日 10時～18時 /<br class="u-mobile">
            土日祝日 10時～19時 / 定休日：月火</p>
        </div>
        <div class="p-sub-access__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1573.699948122157!2d139.04587358236319!3d37.921087239308626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff4c9edfd8d38f1%3A0x9efef5cf5a793428!2z44CSOTUxLTgwNjcg5paw5r2f55yM5paw5r2f5biC5Lit5aSu5Yy65pys55S66YCa77yW55Wq55S677yR77yR77yU77yR4oiS77yRIOOCueODiOODvOOCr-ODk-ODq-aWsOa9n-S4gOeVqumkqA!5e0!3m2!1sja!2sjp!4v1706878570031!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>

  <section class="p-case l-common">
    <div class="p-case__inner l-inner">
      <div class="p-case__title">
        <div class="c-section-title">
          <span class="c-section-title__en">case</span>
          <h2 class="c-section-title__ja">ご相談事例</h2>
        </div>
      </div>
      <div class="p-case__content">
        <ul class="p-cards">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
          );
          $the_query = new WP_Query($args);

          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <li class="p-cards__item">
                <a href="<?php the_permalink(); ?>" class="p-card">
                  <div class="p-card__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="サムネイル画像" width="" height="" loading="lazy" />
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage@2x.webp')); ?>" alt="NoImage" width="315" height="178" loading="lazy" />
                    <?php endif; ?>
                  </div>
                  <div class="p-card__category">
                    <?php
                    $categories = get_the_category();
                    $display_categories = array_slice($categories, 0, 2);

                    foreach ($display_categories as $category) {
                      echo '<span class="c-category">' . esc_html($category->name) . '</span>';
                    }
                    ?>
                  </div>
                  <p class="p-card__title"><?php the_title(); ?></p>
                </a>
              </li>
            <?php
            endwhile;
            wp_reset_postdata(); // クエリのリセット
          else :
            ?>
            <p>最新の投稿はありません。</p>
          <?php
          endif;
          ?>
        </ul>
        <div class="p-case__button">
          <a class="c-button" href="<?php echo esc_url(home_url("/case")) ?>"><span>view all</span></a>
        </div>
      </div>
      <div class="p-case__buttons l-common">
        <?php get_template_part("parts/buttons") ?>
      </div>
    </div>
  </section>
  </div>

  <?php get_template_part("parts/contact") ?>

</main>

<?php get_footer(); ?>