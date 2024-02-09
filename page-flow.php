<?php get_header(); ?>

<main class="l-main">

  <?php get_template_part("parts/fv"); ?>

  <!-- 通常の撮影の流れ -->
  <section class="p-sub-flow l-common">
    <?php $flowItems1 = [
      [
        'num' => '01',
        'title' => 'ご予約',
        'text' => '撮影のご予約やお問合せ、インタビューのご予約は、お電話やWEB予約からお願いします。相談、要望をお伺いします。',
      ],
      [
        'num' => '02',
        'title' => 'カウンセリング',
        'text' => 'ロケーション決めや衣装選びなど、ご要望をお聞きし最適なご提案をいたします。一緒に素敵な撮影にしましょう！',
      ],
      [
        'num' => '03',
        'title' => '撮影当日',
        'text' => '支度場所にお越しいただき、ヘアメイク・着付けをさせて頂いた後、撮影場所へのご移動(ヘアメイク同伴)となります。',
      ],
      [
        'num' => '04',
        'title' => 'お振込',
        'text' => 'ご請求書をメールにてお送りしますので、撮影から2週間以内に指定の口座にお振込をお願いします。',
      ],
      [
        'num' => '05',
        'title' => '納品',
        'text' => 'データはDVDにて約3週間以内、アルバムは2ヶ月以内にお届けいたします。早めの納品も対応できますのでご相談ください。',
      ],
    ] ?>
    <div class="p-sub-flow__inner l-inner">
      <div class="p-sub-flow__head">
        <div class="c-head">
          <h2 class="c-head__main">通常の撮影の流れ</h2>
          <span class="c-head__sub">（同性、エイジング、再婚、ソロ、2次元、ロケーション）</span>
        </div>
      </div>
      <div class="p-sub-flow__swiper-wrap">
        <div class="p-sub-flow__swiper swiper js-flow-swiper1">
          <ol class="p-sub-flow__list p-flow-list swiper-wrapper">
            <?php foreach ($flowItems1 as $item) : ?>
              <li class="p-flow-list__item swiper-slide">
                <div class="p-flow-list__item-number"><span data-num="<?php echo esc_html($item['num']); ?>">step</span></div>
                <h3 class="p-flow-list__item-title"><?php echo esc_html($item['title']); ?></h3>
                <p class="p-flow-list__item-text"><?php echo esc_html($item['text']); ?></p>
              </li>
            <?php endforeach; ?>
          </ol>
          <!-- ページネーション -->
          <div class="p-sub-flow__pagination swiper-pagination"></div>
        </div>
        <!-- 前後の矢印 -->
        <div class="p-sub-flow__button-prev swiper-button-prev js-flow-swiper-prev1"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-prev.svg')); ?>" alt="前へ" width="27" height="27" /></div>
        <div class="p-sub-flow__button-next swiper-button-next js-flow-swiper-next1"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-next.svg')); ?>" alt="次へ" width="27" height="27" /></div>
      </div>
    </div>
  </section>

  <!-- 十三詣りの撮影の流れ -->
  <section class="p-sub-flow l-common">
    <?php $flowItems1 = [
      [
        'num' => '01',
        'title' => 'ご予約',
        'text' => '撮影のご予約やお問合せ、インタビューのご予約は、お電話やWEB予約からお願いします。相談、要望をお伺いします。',
      ],
      [
        'num' => '02',
        'title' => 'カウンセリング',
        'text' => 'ロケーション決めや衣装選びなど、ご要望をお聞きし最適なご提案をいたします。一緒に素敵な撮影にしましょう！',
      ],
      [
        'num' => '03',
        'title' => '撮影当日',
        'text' => '支度場所にお越しいただき、ヘアメイク・着付けをさせて頂いた後、撮影場所へのご移動(ヘアメイク同伴)となります。',
      ],
      [
        'num' => '04',
        'title' => 'お振込',
        'text' => 'ご請求書をメールにてお送りしますので、撮影から2週間以内に指定の口座にお振込をお願いします。',
      ],
      [
        'num' => '05',
        'title' => '納品',
        'text' => 'データはDVDにて約3週間以内、アルバムは2ヶ月以内にお届けいたします。早めの納品も対応できますのでご相談ください。',
      ],
    ] ?>
    <div class="p-sub-flow__inner l-inner">
      <div class="p-sub-flow__head">
        <div class="c-head">
          <h2 class="c-head__main">十三詣りの撮影の流れ</h2>
        </div>
      </div>
      <div class="p-sub-flow__swiper-wrap">
        <div class="p-sub-flow__swiper swiper js-flow-swiper2">
          <ol class="p-sub-flow__list p-flow-list swiper-wrapper">
            <?php foreach ($flowItems1 as $item) : ?>
              <li class="p-flow-list__item swiper-slide">
                <div class="p-flow-list__item-number"><span data-num="<?php echo esc_html($item['num']); ?>">step</span></div>
                <h3 class="p-flow-list__item-title"><?php echo esc_html($item['title']); ?></h3>
                <p class="p-flow-list__item-text"><?php echo esc_html($item['text']); ?></p>
              </li>
            <?php endforeach; ?>
          </ol>

          <!-- ページネーション -->
          <div class="p-sub-flow__pagination swiper-pagination"></div>
        </div>
        <!-- 前後の矢印 -->
        <div class="p-sub-flow__button-prev swiper-button-prev js-flow-swiper-prev2"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-prev.svg')); ?>" alt="前へ" width="27" height="27" /></div>
        <div class="p-sub-flow__button-next swiper-button-next js-flow-swiper-next2"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-next.svg')); ?>" alt="次へ" width="27" height="27" /></div>
      </div>
      <p class="p-sub-flow__info c-text">
        ※衣装に関しましては、お着物などお持ちであればご持参いただき、お持ちでない場合は貸衣装の手配ができますので、ご相談ください。
      </p>
    </div>
  </section>

  <!-- ドローン撮影の流れ -->
  <section class="p-sub-flow l-common">
    <?php $flowItems3 = [
      [
        'num' => '01',
        'title' => 'お問合せ',
        'text' => 'お電話またはお問合せフォームからお気軽にお問合せください。',
      ],
      [
        'num' => '02',
        'title' => 'カウンセリング',
        'text' => 'ご希望に合わせた形でお見積もりをさせていただき、撮影機材や撮影スケジュールなどもご提案させていただきます。',
      ],
      [
        'num' => '03',
        'title' => 'ロケハン',
        'text' => '現地にて撮影ポイントや危険個所のチェックを行いながら、お打ち合わせをさせていただきます。',
      ],
      [
        'num' => '04',
        'title' => '撮影当日',
        'text' => '現地にて映像撮影や写真撮影を行います。モニターにてリアルタイムで撮影映像をご確認していただくことが可能です。',
      ],
      [
        'num' => '05',
        'title' => 'お振込',
        'text' => 'ご請求書をメールにてお送りしますので、撮影から2週間以内に指定の口座にお振込をお願いします。',
      ],
      [
        'num' => '06',
        'title' => '編集・加工',
        'text' => '映像編集ソフトや画像加工ソフトなどを使い、編集作業を行います。ご希望に応じてBGMやナレーションを映像に挿入いたします。',
      ],
      [
        'num' => '07',
        'title' => '納品',
        'text' => 'ご希望に沿ったメディアや出力形式で納品致します。BGMやナレーション挿入などの場合は、別途納期をお知らせいたします。',
      ],
    ] ?>
    <div class="p-sub-flow__inner l-inner">
      <div class="p-sub-flow__head">
        <div class="c-head">
          <h2 class="c-head__main">ドローン撮影の流れ</h2>
        </div>
      </div>
      <div class="p-sub-flow__swiper-wrap">
        <div class="p-sub-flow__swiper swiper js-flow-swiper3">
          <ol class="p-sub-flow__list p-flow-list swiper-wrapper">
            <?php foreach ($flowItems3 as $item) : ?>
              <li class="p-flow-list__item swiper-slide">
                <div class="p-flow-list__item-number"><span data-num="<?php echo esc_html($item['num']); ?>">step</span></div>
                <h3 class="p-flow-list__item-title"><?php echo esc_html($item['title']); ?></h3>
                <p class="p-flow-list__item-text"><?php echo esc_html($item['text']); ?></p>
              </li>
            <?php endforeach; ?>
          </ol>
          <!-- ページネーション -->
          <div class="p-sub-flow__pagination swiper-pagination"></div>
        </div>
        <!-- 前後の矢印 -->
        <div class="p-sub-flow__button-prev swiper-button-prev js-flow-swiper-prev3"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-prev.svg')); ?>" alt="前へ" width="27" height="27" /></div>
        <div class="p-sub-flow__button-next swiper-button-next js-flow-swiper-next3"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-next.svg')); ?>" alt="次へ" width="27" height="27" /></div>
      </div>
      <div class="p-sub-flow__button">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-button">top</a>
      </div>
    </div>
  </section>

  <?php get_template_part("parts/contact") ?>
</main>

<?php get_footer(); ?>