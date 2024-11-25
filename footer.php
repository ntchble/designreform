<!-- footer.phpここから -->

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
            <li><a href="<?php echo esc_url(home_url('/')); ?>" rel="home" >ホーム</a></li>
            <li><a href="<?php echo home_url(); ?>/service">サービス案内</a></li>
            <li><a href="<?php echo home_url(); ?>/example">施工事例</a></li>
            <li><a href="<?php echo home_url(); ?>/category/news">お知らせ</a></li>
            <li><a href="<?php echo home_url(); ?>/category/blog">ブログ</a></li>
            <li><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
            <li><a href="<?php echo home_url(); ?>/form">お問合せ</a></li>
          </ul>
        </nav>
        <p id="copyright">&copy;2024 DesignReform, Inc. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- slick -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    <?php wp_footer(  ); ?>
  </body>
</html>
<!-- footer.phpここまで -->