<?php get_header(  ); ?>

    <main>
      <article>

        <!-- お問合せ標題 -->
        <section>
          <div class="main-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt="背景">
            <h1 class="title">よくある質問</h1>
            <!-- パンくずリスト -->
            <div id="pan-list">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">HOME</a>
              <span> > </span>
              <a href="<?php echo home_url(); ?>/form">お問合せ</a>
              <span> > </span>
              <span>よくある質問</span>
            </div>
          </div>
        </section>

        <section id="faq">
          <div>
            <h2 class="accordion-header">Q: リフォームの相談や見積もりは無料ですか？</h2>
            <h3 class="accordion-content">A: はい、初回のご相談とお見積もりは無料で行っています。お客様のニーズやご希望を詳しくお伺いし、最適なプランをご提案いたしますので、お気軽にお問い合わせください。</h3>
          </div>
          <div>
            <h2 class="accordion-header">Q: 工事の期間はどのくらいかかりますか？</h2>
            <h3 class="accordion-content">A: 工事の期間はプロジェクトの規模や内容によって異なります。たとえば、キッチンの部分的な改装であれば約1週間、家全体のリノベーションの場合は数カ月かかることがあります。具体的な日程はお打ち合わせの際に詳しくご説明いたします。</h3>
          </div>
          <div>
            <h2 class="accordion-header">Q: 施工中に家に住むことはできますか？</h2>
            <h3 class="accordion-content">A: リフォーム内容によって異なりますが、軽微な工事であれば住みながらの施工が可能です。しかし、全面的なリノベーションなど大規模な工事の場合、一時的なご移住をおすすめすることがあります。詳細は事前にご相談ください。</h3>
          </div>
          <div>
            <h2 class="accordion-header">Q: 環境に優しいリフォームを希望していますが、どのような選択肢がありますか？</h2>
            <h3 class="accordion-content">A: 弊社では、省エネ効果の高い設備や再生可能エネルギーの導入、高断熱・高気密化を通じて、エコフレンドリーな住まいづくりを提案しています。お客様のご希望や予算に合わせたプランをご用意しておりますので、お気軽にご相談ください。</h3>
          </div>
          <div>
            <h2 class="accordion-header">Q: リフォーム後の保証やアフターサービスはどうなっていますか？</h2>
            <h3 class="accordion-content">A: 弊社は施工後のアフターケアに力を入れております。定期的なメンテナンスや、24時間対応の緊急サポートも完備しています。万が一のトラブルにも迅速に対応いたしますので、安心してご利用いただけます。</h3>
          </div>
        </section>

<?php get_footer(  ); ?>