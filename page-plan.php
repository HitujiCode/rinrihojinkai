<?php get_header(); ?>

<main class="l-main">

  <?php get_template_part("parts/fv"); ?>

  <section class="p-sub-plan l-common">
    <div class="p-sub-plan__inner l-inner">
      <div class="p-sub-plan__content">
        <ul class="p-sub-list">
          <li class="p-sub-list__item">
            <a class="p-sub-list__item-link" href="<?php echo esc_url(home_url("/consultation")) ?>">
              <div class="p-sub-list__item-img">
                <picture>
                  <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/plan/plan1_pc@2x.webp')); ?>" media="(min-width:768px)" width="464" height="261" />
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/plan/plan1@2x.webp')); ?>" alt="カウンセリングの様子" width="315" height="177" />
                </picture>
              </div>
              <div class="p-sub-list__item-body">
                <div class="p-sub-list__item-head">
                  <h2 class="p-sub-list__item-head-main">個々のアイデンティティを尊重し、真摯に向き合うカウンセリング</h2>
                  <span class="p-sub-list__head-sub">（自己同一性、存在証明、同性愛など）</span>
                </div>
                <p class="p-sub-list__item-text">未来の幸せの形はさまざまです。私たちはそれを祝福致します。全ての幸せへの尊重を表現し、受け入れ、推奨する世界を一緒に創りたいと考えています。
                </p>
              </div>
            </a>
          </li>
          <li class="p-sub-list__item">
            <a class="p-sub-list__item-link" href="<?php echo esc_url(home_url("/photograph")) ?>">
              <div class="p-sub-list__item-img">
                <picture>
                  <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/plan/plan2_pc@2x.webp')); ?>" media="(min-width:768px)" width="464" height="261" />
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/plan/plan2@2x.webp')); ?>" alt="撮影の様子" width="315" height="177" />
                </picture>
              </div>
              <div class="p-sub-list__item-body">
                <div class="p-sub-list__item-head">
                  <h2 class="p-sub-list__item-head-main">かけがえのない思い出になる<br class="u-desktop">記念撮影</h2>
                  <span class="p-sub-list__head-sub">（ロケーションの提案、ヘアメイク、小道具貸出など）</span>
                </div>
                <p class="p-sub-list__item-text">
                  同性、年齢、未婚や既婚問わず、ご自身の「今」を残す撮影をいたします。ロケーションの提案、ヘアメイクや小道具の貸出も承っております。一緒に思い出を作りましょう！
                </p>
              </div>
            </a>
          </li>
        </ul>
        <div class="p-plan__button">
          <a class="c-button" href="<?php echo esc_url(home_url('')); ?>"><span>top</span></a>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part("parts/contact") ?>
</main>

<?php get_footer(); ?>