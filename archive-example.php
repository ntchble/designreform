<?php get_header(  ); ?>

    <main>
      <article>

        <!-- 施工事例標題 -->
        <section>
          <div class="main-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/case05.jpg" alt="背景">
            <h1 class="title">施工事例</h1>
            <!-- パンくずリスト -->
            <div id="pan-list">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">HOME</a>
              <span> > </span>
              <span>施工事例</span>
            </div>
          </div>
        </section>

        <!-- PC用施工事例 -->
        <section>
          <div id="example-flex">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post() ?>
                <div class="example-flexitem">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  <span><?php the_title(); ?></span>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </section>
      </article>
    </main>

<?php get_footer(  ); ?>