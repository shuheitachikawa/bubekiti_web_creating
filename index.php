<?php get_header(); ?>

  <!-- イントロ -->
  <section class="intro">
    <div class="intro__bg"></div>
    <div class="intro__img">
      <img src="<?php echo get_template_directory_uri() ?>/img/intro.png" alt="手軽に名刺替わりのホームページ制作">
    </div>
    <div class="intro__container">
      <h2 class="intro__title">手軽に名刺替わりのホームページ</h2>
      <div class="intro__exp">
        <ul class="intro__list">
          <li class="intro__item">仕事でホームページが必要になった</li>
          <li class="intro__item">今のホームページを新しくした</li>
          <li class="intro__item">ネットで集客を始めたい</li>
          <li class="intro__item">オリジナルデザインでブログを始めたい</li>
          <li class="intro__item">出来るだけ安く作りたい</li>
        </ul>
        <p class="intro__txt">初心者の方でも分かりやすいよう<br>完成まで親切サポート</p>
        <a class="intro__btn" href="">制作の特徴</a>
      </div>
    </div>
  </section>


  <!-- サービス -->
  <section class="service">
    <div class="service__container">
      <h2 class="service__title">サービス</h2>
      <ul class="service__list">

      <?php
        $service_posts = get_specific_posts('service',null,-1);
        if($service_posts->have_posts()):
          while($service_posts->have_posts()):
            $service_posts->the_post();           
      ?>

        <li class="service__item"><a href="<?php the_permalink(); ?>">
          <div class="service__img">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="service__txtarea">
            <p class="service__txt"><?php the_title(); ?></p>
          </div>
        </a></li>

        <?php
            endwhile;
          endif;
        ?>

      </ul>
    </div>
  </section>


  <!-- 制作物 -->
  <section class="works">
    <div class="works__bg"></div>
    <div class="works__img">
      <img src="<?php echo get_template_directory_uri() ?>/img/works.png" alt="">
    </div>
    <div class="works__container">
      <h2 class="works__title">制作実績</h2>
      <div class="works__area">
        <ul class="works__list">

        <?php
        $service_posts = get_specific_posts('works',null,2);
        if($service_posts->have_posts()):
          while($service_posts->have_posts()):
            $service_posts->the_post();           
        ?>

          <li class="works__item"><a href="<?php the_permalink(); ?>">
            <div class="works__imgarea">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="works__txtarea">
              <p class="works__txt"><?php the_title(); ?></p>
            </div>
          </a></li>

        <?php
            endwhile;
          endif;
        ?> 
        

        </ul>
      </div>
      <div class="works__btnarea">
        <a class="works__btn" href="">制作実績一覧</a>
      </div>
    </div>
  </section>


  <!-- 手引き -->
  <section class="guide">
    <div class="guide__container--color">
      <h2 class="guide__title">ご利用の手引き</h2>
      <div class="guide__list">
        <div class="guide__item"><a href="">制作の流れ</a></div>
        <div class="guide__item"><a href="">簡単見積もり</a></div>
        <div class="guide__item"><a href="">よくある質問</a></div>
      </div>
    </div>
    <div class="guide__container--white">
      <button class="contact-btn guide__btn">お問い合わせ</button>
    </div>
  </section>


  <!-- ブログ -->
  <section class="blogs">
    <div class="blogs__container">
      <h2 class="blogs__title">Webの知識を配信中！</h2>
      <div class="blogs__list">
        <article class="blogs__item"><a href="">
          <div class="blogs__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/blog.png" alt="">
            <p class="blogs__category">　プログラミング　</p>
          </div>
          <div class="blogs__txtarea">
            <h3 class="blogs__item--title">ブログタイトル</h3>
            <time class="blogs__item--time"><span class="far fa-calendar-plus"><span><p>2020.7/30</p></time>
          </div>
        </a></article>

        <article class="blogs__item"><a href="">
          <div class="blogs__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/blog.png" alt="">
            <p class="blogs__category">　プログラミング　</p>
          </div>
          <div class="blogs__txtarea">
            <h3 class="blogs__item--title">ブログタイトルブログタイトルブログタイトルブログタイトル</h3>
            <time class="blogs__item--time"><span class="far fa-calendar-plus"><span><p>2020.7/30</p></time>
          </div>
        </a></article>

        <article class="blogs__item"><a href="">
          <div class="blogs__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/blog.png" alt="">
            <p class="blogs__category">　プログラミング　</p>
          </div>
          <div class="blogs__txtarea">
            <h3 class="blogs__item--title">ブログタイトルブログタイトルブログタイトルブログタイトル</h3>
            <time class="blogs__item--time"><span class="far fa-calendar-plus"><span><p>2020.7/30</p></time>
          </div>
        </a></article>
        

      </div>
      <div class="blogs__btnarea">
        <button class="detail-btn blogs__btn">記事一覧へ</button>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>