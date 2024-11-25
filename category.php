<?php get_header(  ); ?>

    <main>
      <article>

        <!-- お知らせ標題 -->
        <section>
          <div class="main-title">
            <?php if(is_category( "news" )): ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/case06.jpg" alt="背景">
            <?php endif; ?>
            <?php if(is_category( "blog" )): ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/case07.jpg" alt="背景">
            <?php endif; ?>
            <?php
              $cat = get_the_category(  );
              $catslug = $cat[0]->slug;
              $catname = $cat[0]->cat_name;
            ?>
            <h1 class="title"><?php echo $catname; ?></h1>
            <!-- パンくずリスト -->
            <div id="pan-list">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">HOME</a>
              <span> > </span>
              <span><?php echo $catname; ?></span>
            </div>
          </div>
        </section>

        <section class="post_field">
        <?php if (have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          <div>
            <div>
              <div class="calendar_month">
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
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
              <hr />
              <div class="post_content">
                <ul>
                  <li>
                    <?php echo wp_trim_words( get_the_content() , 80, '...'); ?>
                  </li>
                </ul>
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