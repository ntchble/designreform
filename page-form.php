<?php get_header(  ); ?>

    <main>
      <article>

        <!-- お問合せ標題 -->
        <section>
          <div class="main-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt="背景">
            <h1 class="title">お問合せ</h1>
            <!-- パンくずリスト -->
            <div id="pan-list">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">HOME</a>
              <span> > </span>
              <span>お問合せ</span>
            </div>
          </div>
        </section>

        <section id="to-faq">
          <a href="<?php echo home_url(); ?>/faq">よくある質問はこちら</a>
        </section>

        <section id="form-content">
          <?php the_content(); ?>
        </section>

<?php get_footer(  ); ?>