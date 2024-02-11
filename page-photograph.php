<?php get_header(); ?>

<main class="l-main">

  <?php get_template_part("parts/fv"); ?>

  <section class="p-sub-photo l-common">
    <div class="p-sub-photo__inner l-inner">
      <div class="p-sub-photo__feature p-feature--delta">
        <div class="p-feature__head">
          <h2 class="p-feature__head-main">かけがえのない思い出になる撮影</h2>
          <span class="p-feature__head-sub">（ロケーションの提案、ヘアメイク、小道具貸出）</span>
        </div>
        <div class="p-feature__inner l-inner">
          <div class="p-feature__content">
            <div class="p-feature__img">
              <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/photo/photo1_pc@2x.webp')); ?>" media="(min-width:768px)" width="790" height="396" />
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/photo/photo1@2x.webp')); ?>" alt="カメラの写真" width="315" height="164" />
              </picture>
            </div>
            <p class="p-feature__text c-text--delta">
              特別な流れの中にいるような撮影でも、日常の流れのようにその日をお過ごし頂き、<br class="u-desktop">その光る瞬間を一枚の写真に収めたいと私たちは願っています。<br>
              「時は一瞬」そして「時は永遠」をモットーに私たちはウエディングフォトという記録を通じて、<br class="u-desktop">お一人ずつの特別な想いを受け取り、永遠の瞬間に導くことを目指していきます。<br>
              ご提供する記録の形はさまざまですが、ご要望に応じてパッケージにはメイクアップアーティスト・<br class="u-desktop">編集加工入り静止画・動画・パーティープランのご提案などさまざまなご用意があります。</p>
          </div>
        </div>
      </div>

      <?php $photoItems = [
        [
          'main' => '通常の撮影',
          'sub' => '（同性、エイジング、再婚、ソロ、2次元、ロケーション）',
          'img' => 'assets/images/photo/photo2@2x.webp',
          'text' => '年齢、性別、独身、既婚、職歴、環境的背景、趣味、趣向、使途など多様な方々向けの撮影をいたします。結婚式を自由で大胆な形で演出する、今までにない高付加価値の体験撮影会です。',
          'text2' => "【ロケーションフォト】\n８８,０００円～から承っております。\nお気軽にご相談ください。",
        ],
        [
          'main' => '十三詣り',
          'sub' => '',
          'img' => 'assets/images/photo/photo3@2x.webp',
          'text' => '京都・関西圏ではポピュラーな12・13歳の子どもたちに、保護者の意向でなく本人の意思で晴れ着を選ばせ、生まれ育った地域で地元宮司の祝詞を受けながら橋を歩き一度も振り返らず歩く行事。現実から、未来を開き将来の願い事を叶えていく一歩として定める風流な様子を撮影いたします。',
        ],
        [
          'main' => 'ドローン',
          'sub' => '',
          'img' => 'assets/images/photo/photo4@2x.webp',
          'text' => '主に商用利用向けのドローン撮影のサービスです。通常のカメラでは難しいの空撮が可能なので、高度感や広がり感が出て迫力ある映像を撮影することができます。撮影場所やどのような映像を撮りたいかなどご相談し、企業様のより良いPRにつなげられるよう尽力して参ります。',
        ],
      ] ?>
      <ul class="p-sub-photo__menu l-sub-photo__menu">
        <?php foreach ($photoItems as $item) : ?>
          <li class="p-sub-photo__menu-item p-photo-item">
            <div class="p-photo-item__content">
              <div class="p-photo-item__body">
                <div class="p-photo-item__head">
                  <h3 class="p-photo-item__head-main">
                    <?php echo esc_html($item['main']); ?>
                  </h3>
                  <?php if (!empty($item['sub'])) : ?>
                    <span class="p-photo-item__head-sub"> <?php echo esc_html($item['sub']); ?>
                    </span>
                  <?php endif; ?>
                </div>
                <p class="p-photo-item__text"><?php echo esc_html($item['text']); ?></p>
                <?php if (isset($item['text2'])) : ?>
                  <p class="p-photo-item__text"><?php echo nl2br(htmlspecialchars($item['text2'], ENT_QUOTES, 'UTF-8')); ?></p>
                <?php endif; ?>

              </div>
              <div class="p-photo-item__img">
                <img src="<?php echo esc_url(get_theme_file_uri($item['img'])); ?>" alt="イメージ写真" width="315" height="210" loading="lazy" />
              </div>
            </div>
            <div class="p-photo-item__buttons">
              <div class="p-photo-item__button"> <a href="<?php echo esc_url(home_url('/flow')); ?>" class="c-button">flow</a></div>
              <div class="p-photo-item__button"><a href="<?php echo esc_url(home_url("/works")); ?>" class="c-button">works</a></div>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="p-sub-photo__buttons l-common">
        <?php get_template_part("parts/buttons") ?>
      </div>
    </div>
  </section>
  <?php get_template_part("parts/contact") ?>
</main>
<?php get_footer(); ?>