<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
  <link href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" rel="stylesheet">
  <title>Bubekiti Web creating</title>
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>

  <!-- ヘッダー -->
  <header>
    <div class="header__container">
      <!-- <div class="header__title"> -->
        <a href="" class="header__title">
          <img src="<?php echo get_template_directory_uri() ?>/img/title.png" alt="">
        </a>
      <!-- </div> -->
      <nav class="header__menu">
        <ul class="header__menu--list">
          <li class="header__menu--item">サービス</li>
          <li class="header__menu--item">実績</li>
          <li class="header__menu--item">制作の流れ</li>
          <li class="header__menu--item">ブログ</li>
          <li class="header__menu--item">お問い合わせ</li>
        </ul>
      </nav>
    </div>
  </header>


  <!-- トップビュー -->
  <section class="topview">
    <h1 class="topview__title">秦野のホームページ屋</h1>
  </section>


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

        <li class="service__item"><a href="">
          <div class="service__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/orderhomepage.jpg" alt="">
          </div>
          <div class="service__txtarea">
            <p class="service__txt">オーダーホームページ制作</p>
          </div>
        </a></li>

        <li class="service__item"><a href="">
          <div class="service__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/renewal.jpg" alt="">
          </div>
          <div class="service__txtarea">
            <p class="service__txt">ホームページリニューアル</p>
          </div>
        </a></li>

        <li class="service__item"><a href="">
          <div class="service__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/lp.jpg" alt="">
          </div>
          <div class="service__txtarea">
            <p class="service__txt">ランディングページ(LP)制作</p>
          </div>
        </a></li>

        <li class="service__item"><a href="">
          <div class="service__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/blog.jpg" alt="">
          </div>
          <div class="service__txtarea">
            <p class="service__txt">オリジナルブログ作成</p>
          </div>
        </a></li>

        <li class="service__item"><a href="">
          <div class="service__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/cording.jpg" alt="">
          </div>
          <div class="service__txtarea">
            <p class="service__txt">HTMLコーディング</p>
          </div>
        </a></li>

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
          <li class="works__item"><a href="">
            <div class="works__imgarea">
              <img src="<?php echo get_template_directory_uri() ?>/img/fuuske.png" alt="">
            </div>
            <div class="works__txtarea">
              <p class="works__txt">fuuske様 コーポレートサイト</p>
            </div>
          </a></li>
          <li class="works__item"><a href="">
            <div class="works__imgarea">
              <img src="<?php echo get_template_directory_uri() ?>/img/fuuske.png" alt="">
            </div>
            <div class="works__txtarea">
              <p class="works__txt">fuuske様 コーポレートサイト</p>
            </div>
          </a></li>
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
  <section class="blog">
    <div class="blog__container">
      <h2 class="blog__title">Webの知識を配信中！</h2>
      <div class="blog__list">
        <article class="blog__item"><a href="">
          <div class="blog__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/blog.png" alt="">
            <p class="blog__category">　プログラミング　</p>
          </div>
          <div class="blog__txtarea">
            <h3 class="blog__item--title">ブログタイトル</h3>
            <time class="blog__item--time"><span class="far fa-calendar-plus"><span><p>2020.7/30</p></time>
          </div>
        </a></article>

        <article class="blog__item"><a href="">
          <div class="blog__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/blog.png" alt="">
            <p class="blog__category">　プログラミング　</p>
          </div>
          <div class="blog__txtarea">
            <h3 class="blog__item--title">ブログタイトルブログタイトルブログタイトルブログタイトル</h3>
            <time class="blog__item--time"><span class="far fa-calendar-plus"><span><p>2020.7/30</p></time>
          </div>

        </a></article>
        <article class="blog__item"><a href="">
          <div class="blog__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/blog.png" alt="">
            <p class="blog__category">　プログラミング　</p>
          </div>
          <div class="blog__txtarea">
            <h3 class="blog__item--title">ブログタイトル</h3>
            <time class="blog__item--time"><span class="far fa-calendar-plus"><span><p>2020.7/30</p></time>
          </div>
        </a></article>

      </div>
      <div class="blog__btnarea">
        <button class="detail-btn blog__btn">記事一覧へ</button>
      </div>
    </div>
  </section>

  <section class="contact">
    <div class="contact__container">
      <div class="contact__left">
        <h2 class="contact__title"></h2>
        <p class="contact__exp">ご相談・お見積・お問い合せはお気軽にご連絡ください。</p>
      </div>
      <div class="contact__right">
        <p class="contact__site-name">Bubekiti Web creating</p>
        <p class="contact__email">mail : shuhei.tachikawa@bubekiti.com</p>
        <button class="contact-btn">お問い合わせ</button>
      </div>
    </div>
  </section>

  <!-- フッター -->
  <footer>
    <div class="footer__container">
      <ul class="footer__list">
        <li class="footer__item">
          <p class="footer__item-name">SERVICE</p>
          <ul class="footer__sub-list">
            <li class="footer__sub-item"><a href="">オーダーメイドホームページ制作</a></li>
            <li class="footer__sub-item"><a href="">ホームページリニューアル</a></li>
            <li class="footer__sub-item"><a href="">ランディングページ(LP)制作</a></li>
            <li class="footer__sub-item"><a href="">オリジナルブログ作成</a></li>
            <li class="footer__sub-item"><a href="">HTML/CSSコーディング(制作会社様向け)</a></li>
          </ul>
        </li>

        <li class="footer__item">
          <p class="footer__item-name">WORKS</p>
          <ul class="footer__sub-list">
            <li class="footer__sub-item"><a href="">制作物一覧</a></li>
          </ul>
        </li>

        <li class="footer__item">
          <p class="footer__item-name">GUIDE</p>
          <ul class="footer__sub-list">
            <li class="footer__sub-item"><a href="">制作の流れ</a></li>
            <li class="footer__sub-item"><a href="">かんたんお見積もり</a></li>
            <li class="footer__sub-item"><a href="">よくある質問</a></li>

          </ul>
        </li>

        <li class="footer__item">
          <p class="footer__item-name">OTHER</p>
          <ul class="footer__sub-list">
            <li class="footer__sub-item"><a href="">Bubekitiについて</a></li>
            <li class="footer__sub-item"><a href="">ブログ</a></li>
            <li class="footer__sub-item"><a href="">お問い合わせ</a></li>
          </ul>
        </li>

      </ul>
      <p class="footer__copyright">©Copyright2020 Bubekiti Web creating.All Rights Reserved.</p>
    </div>
  </footer>
  <?php wp_footer() ?>
</body>
</html>