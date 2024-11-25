<?php get_header(  ); ?>

    <main>
      <article>

        <!-- PC用メインビジュアル -->
        <section id="main-visual">
          <div id="main-message">
            <img id="main-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="社名">
            <p>
              私たちは地域密着型のリフォーム会社です。<br>
              常に進化をつづけ、<br>
              皆様のニーズに応えてまいります。
            </p>
          </div>
          <div id="carousel">
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri(); ?>/img/hero.jpg">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri(); ?>/img/6.jpg">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri(); ?>/img/5-1.jpg">
            </div>
          </div>
          <div id="update-info">
            <p>更新情報　｜　
            <?php
              $args = array(
               'posts_per_page' => 1 //表示件数の指定
              );
              $posts = get_posts( $args );
              foreach ( $posts as $post ): //ループの開始
              setup_postdata( $post ); //記事データのセット
              ?>
              <a href="<?php echo get_permalink( ); ?>">
                <?php the_title(); ?>
              </a>
            </p>
            <?php
              endforeach;
              wp_reset_postdata(); //今回作成したクエリをリセットする
            ?>
          </div>
        </section>

        <!-- スマホ用メインビジュアル -->
        <section id="sp-main-visual">
          <div id="sp-carousel">
            <div>
              <img class="sp-carouselImg" src="<?php echo get_template_directory_uri(); ?>/img/hero.jpg">
            </div>
            <div>
              <img class="sp-carouselImg" src="<?php echo get_template_directory_uri(); ?>/img/6.jpg">
            </div>
            <div>
              <img class="sp-carouselImg" src="<?php echo get_template_directory_uri(); ?>/img/5-1.jpg">
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
            <p>更新情報　｜　
              <?php
              $args = array(
               'posts_per_page' => 1 //表示件数の指定
              );
              $posts = get_posts( $args );
              foreach ( $posts as $post ): //ループの開始
              setup_postdata( $post ); //記事データのセット
              ?>
              <a href="<?php echo get_permalink( ); ?>">
                <?php the_title(); ?>
              </a>
            </p>
            <?php
              endforeach;
              wp_reset_postdata(); //今回作成したクエリをリセットする
            ?>
          </div>
        </section>

        <!-- サービス案内 -->
        <section id="service" class="content1">
          <div class="content1-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/img/service.jpg" alt="サービス案内">
            <div>
              <h2>サービス案内</h2>
              <p>
                大切な住まいを快適で魅力的な空間へ。<br>
                製品やサービスに関する情報を<br>
                詳細にわかりやすく紹介します。
              </p>
              <a href="<?php echo home_url(); ?>/service" class="detail">詳細</a>
            </div>
          </div>
        </section>

        <!-- 施工事例 -->
        <section id="example" class="content1">
          <div class="content1-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/img/case05.jpg" alt="施工事例">
            <div>
              <h2>施工事例</h2>
              <p>
                ライフスタイルやニーズに合わせ<br>
                生まれ変わったお客様の住まい。<br>
                弊社が携わった事例を紹介します。
              </p>
              <a href="<?php echo home_url(); ?>/example" class="detail">詳細</a>
            </div>
          </div>
        </section>

        <!-- お知らせ -->
        <section id="news" class="content2">
          <div class="content2-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/img/case06.jpg" alt="お知らせ">
            <div>
              <h2>お知らせ</h2>
              <?php
              $args = array(
                'post_type' => 'post',
                'category_name' => 'news',
                'posts_per_page' => 3,
              );
              $posts = get_posts( $args );
              ?>
              <?php foreach($posts as $post): ?>
              <?php setup_postdata( $post );  ?>
                <ul>
                  <li>
                    <?php echo get_the_date(); ?>
                  </li>
                  <li>
                    <a href="<?php echo get_permalink( ); ?>">
                      <?php the_title(); ?>
                    </a>
                  </li>
                </ul>
              <?php endforeach; ?>
              <?php wp_reset_postdata(  ); ?>
            </div>
          </div>
        </section>

        <!-- ブログ -->
        <section id="blog" class="content2">
          <div class="content2-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/img/case07.jpg" alt="ブログ">
            <div>
              <h2>ブログ</h2>
              <?php
              $args = array(
                'post_type' => 'post',
                'category_name' => 'blog',
                'posts_per_page' => 3,
              );
              $posts = get_posts( $args );
              ?>
              <?php foreach($posts as $post): ?>
                <?php setup_postdata( $post );  ?>
                <ul>
                  <li>
                    <?php echo get_the_date(); ?>
                  </li>
                  <li>
                    <a href="<?php echo get_permalink( ); ?>">
                      <?php the_title(); ?>
                    </a>
                  </li>
                </ul>
              <?php endforeach; ?>
              <?php wp_reset_postdata(  ); ?>
            </div>
          </div>
        </section>

        <!-- 会社概要 -->
        <section id="company" class="content1">
          <div class="content1-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company.jpg" alt="会社概要">
            <div>
              <h2>会社概要</h2>
              <p>
                社名や所在地<br>
                アクセス方法など
              </p>
              <a href="<?php echo home_url(); ?>/company" class="detail">詳細</a>
            </div>
          </div>
        </section>

        <!-- フォーム -->
        <section id="form">
          <div id="form-style">
            <a href="<?php echo home_url(); ?>/form">
              お問合せは<br>
              こちらから
            </a>
          </div>
        </section>    

        </article>
    </main>

    <?php get_footer(  ); ?>