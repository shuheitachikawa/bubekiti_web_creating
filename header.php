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
        <a href="<?php echo home_url() ?>" class="header__title">
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

