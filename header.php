<!-- header.phpここから -->

<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>DesignReform</title>
    <meta charset="UTF-8">
    <meta name="description" content="DesignReformは地域密着型のリフォーム会社です。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <?php wp_head(  ); ?>
  </head>
  <body>
    <!-- ヘッダー -->
    <header>
      <!-- ロゴ -->
      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" id="logo-nav">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="トップページへ戻る">
      </a>
      <!-- PC用ナビゲーション -->
      <nav id="pc-nav">
        <ul>
          <li><a href="<?php echo home_url(); ?>/service">サービス案内</a></li>
          <li><a href="<?php echo home_url(); ?>/example">施工事例</a></li>
          <li><a href="<?php echo home_url(); ?>/category/news">お知らせ</a></li>
          <li><a href="<?php echo home_url(); ?>/category/blog">ブログ</a></li>
          <li><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
          <li><a href="<?php echo home_url(); ?>/form">お問合せ</a></li>
        </ul>
      </nav>
      <!-- スマホ用ナビゲーション -->
      <div class="hamburger-menu">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span></span></label>
        <div class="menu-content">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">ホーム</a></li>
            <li><a href="<?php echo home_url(); ?>/service">サービス案内</a></li>
            <li><a href="<?php echo home_url(); ?>/example">施工事例</a></li>
            <li><a href="<?php echo home_url(); ?>/category/news">お知らせ</a></li>
            <li><a href="<?php echo home_url(); ?>/category/blog">ブログ</a></li>
            <li><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
            <li><a href="<?php echo home_url(); ?>/form">お問合せ</a></li>
          </ul>
        </div>
      </div>
    </header>

<!-- header.phpここまで -->