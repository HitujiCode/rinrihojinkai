<?php get_header(); ?>

<main class="l-main">

  <?php get_template_part("parts/fv"); ?>

  <div class="p-case-article">
    <article class="p-case-article__top">
      <div class="p-case-article__top-inner l-inner">
        <div class="p-case-article__top-conteiner">
          <div class="p-case-article__top-content">
            <div class="p-case-article__top-body">
              <div class="p-case-article__top-category">
                <span class=" c-category"><?php $category = get_the_category(); ?>
                  <?php if ($category) : ?>
                    <?php echo esc_html($category[0]->name); ?>
                  <?php endif; ?></span>
              </div>
              <h2 class="p-case-article__top-title c-title"><?php the_title(); ?></h2>
              <p class="p-case-article__top-text c-text"><?php the_field('case_textarea1'); ?></p>
            </div>
            <div class="p-case-article__top-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage@2x.webp')); ?>" alt="No Image" width="315" height="210" />
              <?php endif; ?>
            </div>
          </div>
          <div class="p-case-article__top-comment">
            <h2 class="p-case-article__top-title c-title">fiorituraから</h2>
            <p class="p-case-article__top-text c-text"><?php the_field('case_textarea2'); ?></p>
          </div>
        </div>
      </div>
    </article>
    <?php $fields = CFS()->get('case-article-bottom'); ?>
    <?php if (!empty($fields)) : ?>
      <article class="p-case-artcile__bottom">
        <div class="p-case-article__bottom__inner l-inner">
          <ul class="p-case-article__bottom-list">
            <?php $fields = CFS()->get('case-article-bottom'); ?>
            <?php if ($fields) : ?>
              <?php foreach ($fields as $field) : ?>
                <li class="p-case-article__bottom-item">
                  <div class="p-case-article__bottom-body">
                    <h2 class="p-case-article__bottom-title c-title"><?php echo esc_html($field['case-article-bottom_head']); ?></h2>
                    <p class="p-case-article__bottom-text c-text"><?php echo esc_html($field['case-article-bottom_textarea']); ?></p>
                  </div>
                  <div class="p-case-article__bottom-img">
                    <?php
                    $image_url = !empty($field['case-article-bottom_img']) ? $field['case-article-bottom_img'] : get_theme_file_uri('/assets/images/common/noimage@2x.webp');
                    $image_id = get_attachment_id_from_url($image_url);

                    if ($image_url === get_theme_file_uri('/assets/images/common/noimage@2x.webp')) {
                      $image_alt = 'noimage';
                    } else {
                      $image_alt = !empty($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : '';
                    }
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" width="680" height="402" loading="lazy" />
                  </div>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>
      </article>
    <?php endif; ?>
  </div>
  <div class="p-case-article-buttons l-common">
    <?php get_template_part("parts/buttons") ?>
  </div>

  <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>