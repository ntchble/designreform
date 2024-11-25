<!-- header.phpここから -->

<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>DesignReform</title>
    <meta charset="UTF-8">
    <meta name="description" content="DesignReformは地域密着型のリフォーム会社です。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <body>
    <!-- ヘッダー -->
    <header>
      <!-- ロゴ -->
      <a href="index.html" id="logo-nav">
        <img src="img/logo.png" alt="トップページへ戻る">
      </a>
      <!-- PC用ナビゲーション -->
      <nav id="pc-nav">
        <ul>
          <li><a href="service.html">サービス案内</a></li>
          <li><a href="example.html">施工事例</a></li>
          <li><a href="news.html">お知らせ</a></li>
          <li><a href="blog.html">ブログ</a></li>
          <li><a href="company.html">会社概要</a></li>
          <li><a href="form.html">お問合せ</a></li>
        </ul>
      </nav>
      <!-- スマホ用ナビゲーション -->
      <div class="hamburger-menu">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span></span></label>
        <div class="menu-content">
          <ul>
            <li><a href="index.html">ホーム</a></li>
            <li><a href="service.html">サービス案内</a></li>
            <li><a href="example.html">施工事例</a></li>
            <li><a href="news.html">お知らせ</a></li>
            <li><a href="blog.html">ブログ</a></li>
            <li><a href="company.html">会社概要</a></li>
            <li><a href="form.html">お問合せ</a></li>
          </ul>
        </div>
      </div>
    </header>

<!-- header.phpここまで -->

    <main>
      <article>

        <!-- PC用メインビジュアル -->
        <section id="main-visual">
          <div id="main-message">
            <img id="main-logo" src="img/logo.png" alt="社名">
            <p>
              私たちは地域密着型のリフォーム会社です。<br>
              常に進化をつづけ、<br>
              皆様のニーズに応えてまいります。
            </p>
          </div>
          <div id="carousel">
            <div>
              <img class="carouselImg" src="img/hero.jpg">
            </div>
            <div>
              <img class="carouselImg" src="img/6.jpg">
            </div>
            <div>
              <img class="carouselImg" src="img/5-1.jpg">
            </div>
          </div>
          <div id="update-info">
            <p>更新情報　｜　<a href="news.html">お知らせを更新しました</a></p>
          </div>
        </section>

        <!-- スマホ用メインビジュアル -->
        <section id="sp-main-visual">
          <div id="sp-carousel">
            <div>
              <img class="sp-carouselImg" src="img/hero.jpg">
            </div>
            <div>
              <img class="sp-carouselImg" src="img/6.jpg">
            </div>
            <div>
              <img class="sp-carouselImg" src="img/5-1.jpg">
            </div>
          </div>
          <div id="sp-main-message">
            <p>
              私たちは地域密着型のリフォーム会社です。<br>
              常に進化をつづけ、<br>
              皆様のニーズに応えてまいります。
            </p>
          </div>
          <div id="sp-update-info">
            <p>更新情報　｜　<a href="news.html">お知らせを更新しました</a></p>
          </div>
        </section>

        <!-- サービス案内 -->
        <section id="service" class="content1">
          <div class="content1-flex">
            <img src="img/service.jpg" alt="サービス案内">
            <div>
              <h2>サービス案内</h2>
              <p>
                大切な住まいを快適で魅力的な空間へ。<br>
                製品やサービスに関する情報を<br>
                詳細にわかりやすく紹介します。
              </p>
              <a href="service.html" class="detail">詳細</a>
            </div>
          </div>
        </section>

        <!-- 施工事例 -->
        <section id="example" class="content1">
          <div class="content1-flex">
            <img src="img/case05.jpg" alt="施工事例">
            <div>
              <h2>施工事例</h2>
              <p>
                ライフスタイルやニーズに合わせ<br>
                生まれ変わったお客様の住まい。<br>
                弊社が携わった事例を紹介します。
              </p>
              <a href="example.html" class="detail">詳細</a>
            </div>
          </div>
        </section>

        <!-- お知らせ -->
        <section id="news" class="content2">
          <div class="content2-flex">
            <img src="img/case06.jpg" alt="お知らせ">
            <div>
              <h2>お知らせ</h2>
              <ul>
                <li>2024.10.31</li>
                <li><a href="news-detail.html">A様邸改装工事が完了しました</a></li>
                <li>2024.10.28</li>
                <li><a href="news-detail.html">ウェブサイトをリニューアルしました</a></li>
                <li>2024.10.19</li>
                <li><a href="new-detail.html">B様邸改装工事が完了しました</a></li>
              </ul>
            </div>
          </div>
        </section>

        <!-- ブログ -->
        <section id="blog" class="content2">
          <div class="content2-flex">
            <img src="img/case07.jpg" alt="ブログ">
            <div>
              <h2>ブログ</h2>
              <ul>
                <li>2024.07.31</li>
                <li><a href="blog-detail.html">A様邸改装工事完了</a></li>
                <li>2024.07.30</li>
                <li><a href="blog-detail.html">B様邸のタイル張替え</a></li>
                <li>2024.07.29</li>
                <li><a href="blog-detail.html">B様邸改装開始</a></li>
              </ul>
            </div>
          </div>
        </section>

        <!-- 会社概要 -->
        <section id="company" class="content1">
          <div class="content1-flex">
            <img src="img/company.jpg" alt="会社概要">
            <div>
              <h2>会社概要</h2>
              <p>
                社名や所在地<br>
                アクセス方法など
              </p>
              <a href="company.html" class="detail">詳細</a>
            </div>
          </div>
        </section>

        <!-- フォーム -->
        <section id="form">
          <div id="form-style">
            <a href="form.html">
              お問合せは<br>
              こちらから
            </a>
          </div>
        </section>    

        <!-- footer.phpここから -->
      </article>
    </main>


    <!-- フッター -->
    <footer>
      <div id="footer-company">
        <h3>Design Reform</h3>
        <p>
          〒150-0033 東京都渋谷区猿楽町1-2-3 代官山ビル5F<br>
          TEL：03-0000-0000
        </p>
        <nav id="footer-pc-nav">
          <ul>
            <li><a href="index.html">ホーム</a></li>
            <li><a href="service.html">サービス案内</a></li>
            <li><a href="example.html">施工事例</a></li>
            <li><a href="news.html">お知らせ</a></li>
            <li><a href="blog.html">ブログ</a></li>
            <li><a href="company.html">会社概要</a></li>
            <li><a href="form.html">お問合せ</a></li>
          </ul>
        </nav>
        <p id="copyright">&copy;2024 DesignReform, Inc. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- slick -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="script.js"></script>
  </body>
</html>
<!-- footer.phpここまで -->