<?php get_header(  ); ?>

    <main>
      <article>

        <!-- 会社概要標題 -->
        <section>
          <div class="main-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company.jpg" alt="背景">
            <h1 class="title">会社概要</h1>
          <!-- パンくずリスト -->
            <div id="pan-list">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">HOME</a>
              <span> > </span>
              <span>会社概要</span>
            </div>
          </div>
        </section>

        <!-- 会社概要 -->
        <section id="companyPage">
          <table id="company-table">
            <tr>
              <th class="tableheader">社名</th>
              <td class="cell">株式会社 Design Reform</td>
            </tr>
            <tr>
              <th class="tableheader">設立</th>
              <td class="cell">1995年8月</td>
            </tr>
            <tr>
              <th class="tableheader">代表取締役</th>
              <td class="cell">東京太郎</td>
            </tr>
            <tr>
              <th class="tableheader">所在地</th>
              <td class="cell">〒150-0033 東京都渋谷区猿楽町1-2-3 代官山ビル5F</td>
            </tr>
            <tr>
              <th class="tableheader">アクセス</th>
              <td class="cell">東急東横線「代官山」駅、2番出口より南へ徒歩3分</td>
            </tr>
            <tr>
              <th class="tableheader">電話/FAX</th>
              <td class="cell">03-0000-0000/03-0000-0000</td>
            </tr>
            <tr>
              <th class="tableheader">メールアドレス</th>
              <td class="cell">info@example.com</td>
            </tr>
            <tr>
              <th class="tableheader">従業員数</th>
              <td class="cell">30名</td>
            </tr>
            <tr>
              <th class="tableheader">主要取引銀行</th>
              <td class="cell">三菱UFJ銀行</td>
            </tr>
            <tr>
              <th class="tableheader">主な事業内容</th>
              <td class="cell">家屋のリフォーム</td>
            </tr>
          </table>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.951371135651!2d139.70254782578644!3d35.653569722596124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b5b15380c99%3A0xf082e079a9138f6d!2z44CSMTUwLTAwMzMg5p2x5Lqs6YO95riL6LC35Yy654y_5qW955S677yR!5e0!3m2!1sja!2sjp!4v1731593142211!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        
      </article>
    </main>

<?php get_footer(  ); ?>