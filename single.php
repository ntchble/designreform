<?php get_header(  ); ?>

    <main>
      <article>

        <!-- お知らせ標題 -->
        <section>
          <div class="main-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="背景">
            <?php
              $cat = get_the_category(  );
              $catslug = $cat[0]->slug;
              $catname = $cat[0]->cat_name;
            ?>
            <h1 class="title"><?php echo $catname; ?></h1>
          </div>
          <!-- パンくずリスト -->
          <div id="single-pan-list">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">HOME</a>
            <span> > </span>
            <a href="<?php echo home_url(); ?>/category/<?php echo $catslug ?>"><?php echo $catname; ?></a>
            <span> > </span>
            <span><?php the_title(); ?></span>
          </div>
        </section>

        <section class="post_area">
        <?php if (have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          <div>
            <div>
              <div class="calendar_date">
                <?php echo get_the_date(); ?>
              </div>
              <?php
              if (is_category('<?php echo $catslug; ?>')) :
              ?>
              <?php
              endif;
              ?>
            </div>
            <div>
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

        <div class="pagination">
          <?php
             // 記事一覧ページ用のページネーション
            echo paginate_links(array(
              'total' => $wp_query->max_num_pages,
              'prev_text' => '&lt;&lt;前へ',
              'next_text' => '次へ&gt;&gt;',
            ));
          ?>
        </div>

        </section>

<?php get_footer( ); ?>