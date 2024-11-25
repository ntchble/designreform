$(function () {

  // PC用カルーセル
  $('#carousel').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    dots: false,
    infinite: true,
    fade: true,
    cssEase: 'linear',
    arrows: false,
  });

  // スマホ用カルーセル
  $('#sp-carousel').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    dots: false,
    infinite: true,
    fade: true,
    cssEase: 'linear',
    arrows: false,
  });

  // お問合せボタン
  $(window).on("scroll", function() {

    if ($(this).scrollTop() > 100) {
        $("#form").stop().fadeIn(300);
        } else {
        $("#form").stop().fadeOut(300);
    }

    const scrollHeight = $(document).height();/*ページ全体の高さ*/
    const scrollPosition = $(window).height() + $(window).scrollTop();/*ページの一番上からスクロールされた距離*/
    const footHeight = $("footer").height();/*フッターの高さ*/

    if ( scrollHeight - scrollPosition  <= footHeight ) {
        $("#form").stop().fadeOut(300);
    } else {
        $("#form").css({
          "position":"fixed",
          "right": "20px",
          "bottom": "10px",
      });
    }

  });

  // スクロールしたときにセクションをフェードインさせる
  $(window).scroll(function(){
    const titleScroll = $(this).scrollTop();
    const windowHeight = $(window).height();
    const servicePlace = $('#service').offset().top;
    const examplePlace = $('#example').offset().top;
    const newsPlace = $('#news').offset().top;
    const blogPlace = $('#blog').offset().top;
    const companyPlace = $('#company').offset().top;

  if ((titleScroll + windowHeight) >= servicePlace) {
    $('#service').animate({
      opacity: 1,
    }, 1500);
  }

  if((titleScroll + windowHeight) >= examplePlace) {
    $('#example').animate({
      opacity: 1,
    }, 1500);
  }

  if((titleScroll + windowHeight) >= newsPlace) {
    $('#news').animate({
      opacity: 1,
    }, 1500);
  }

  if((titleScroll + windowHeight) >= blogPlace) {
    $('#blog').animate({
      opacity: 1,
    }, 1500);
  }

  if((titleScroll + windowHeight) >= companyPlace) {
    $('#company').animate({
      opacity: 1,
    }, 1500);
  }
  });

  // クリック時テキスト変更
  $('#sC1').on('click', function() {
    if ($(this).html() === '豊富な経験と専門性') {
      $(this).html('<span>長年の実績を持ち、住宅のあらゆる部分を改装。</span>');
    } else {
      $(this).html('豊富な経験と専門性');
    }
  });
  $('#sC2').on('click', function() {
    if ($(this).html() === '高品質な施工') {
      $(this).html('<span>最新のデザイントレンドや高品質な素材を使用し、機能性と美しさを兼ね備えた空間を創出。</span>');
    } else {
      $(this).html('高品質な施工');
    }
  });
  $('#sC3').on('click', function() {
    if ($(this).html() === 'ライフステージ対応') {
      $(this).html('<span>バリアフリーや高齢者向け改修など、様々なライフステージに応じた改装。</span>');
    } else {
      $(this).html('ライフステージ対応');
    }
  });
  $('#sC4').on('click', function() {
    if ($(this).html() === 'アフターケア') {
      $(this).html('<span>定期メンテナンス、24時間緊急対応、住まいの使い方や維持管理アドバイスを提供。</span>');
    } else {
      $(this).html('アフターケア');
    }
  });
  $('#sC5').on('click', function() {
    if ($(this).html() === '完全カスタマイズの対応') {
      $(this).html('<span>お客様のライフスタイルやニーズに合わせた個別対応。和風からモダンまで幅広いデザインオプションを提供。</span>');
    } else {
      $(this).html('完全カスタマイズの対応');
    }
  });
  $('#sC6').on('click', function() {
    if ($(this).html() === 'エコフレンドリーな取り組み') {
      $(this).html('<span>省エネ設備、再生可能エネルギー、断熱・気密性の向上によるサステナブルな住まいをサポート。</span>');
    } else {
      $(this).html('エコフレンドリーな取り組み');
    }
  });
  $('#sC7').on('click', function() {
    if ($(this).html() === '幅広い対応範囲') {
      $(this).html('<span>部分的な改装から全面的なリノベーションまで柔軟に対応。</span>');
    } else {
      $(this).html('幅広い対応範囲');
    }
  });
  $('#sC8').on('click', function() {
    if ($(this).html() === '生活の質の向上を重視') {
      $(this).html('<span>住宅改装を超えて、生活の質を向上させる空間づくりを目指している。</span>');
    } else {
      $(this).html('生活の質の向上を重視');
    }
  });


  // よくある質問ページ
  $('.accordion-header').click(function() { // .accordion-headerをクリックで発火
    $(this).next().slideToggle();
    // $(this)...$('.accordion-header')の.next()...次の要素が.slideToggle()...表示と非表示を交互にする
    $(this).toggleClass('active');
    // $(this)...$('.accordion-header')に、activeというクラスが追加と削除を交互にする
});
});