<?php get_header(  ); ?>

    <main>
      <article>

        <!-- お知らせ標題 -->
        <section>
          <div class="main-title">
            <?php the_post_thumbnail( ); ?>
            <h1 class="title">施工事例</h1>
          </div>
          <!-- パンくずリスト -->
          <div id="single-pan-list">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">HOME</a>
            <span> > </span>
            <a href="<?php echo home_url(); ?>/category/example">施工事例</a>
            <span> > </span>
            <span><?php the_title(); ?></span>
          </div>
        </section>

        <section class="post_area">
        <?php if (have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          <div>
            <div>
              <?php
              if (is_category('<?php echo $catslug; ?>')) :
              ?>
              <?php
              endif;
              ?>
            </div>
            <div>
              <div class="post_thumbnail">
                
              </div>
              <div class="post_title">
                <h2><?php the_title(); ?></h2>
              </div>
              <div class="post_content">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        </section>

<?php get_footer( ); ?>