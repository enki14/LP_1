<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .Box{
            border: 2px solid skyblue;
            width: 1000px;
            margin: 0 auto;
            
        }

        .slick-prev:before,
        .slick-next:before {
            color: #000 !important;
        }

        .slider{
            padding-left: 0;
        }

        .slider li {
            font-size: 2rem;
            font-weight: bold;
            line-height: 100px;
            width: 28.3rem !important;
            text-align: center;
            transition: all 300ms ease;
        }

        .slider li img{
            height: 316px;
            width: 283px;
            margin: 0 auto;
        }

        /* .slider li.slick-center {
            transform: scale(1.16);
        } */
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(['drawer', 'drawer--right']); ?>>
    <header class="w-100"  role="banner">
        <div class="d-flex justify-content-between position-fixed w-100 bg-white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/p-header_logo.svg" 
            alt="linemo-logo" />
            <!-- drawer.jsのクラス名は固有のもの -->
            <button type="button" class="drawer-toggle drawer-hamburger py-0">
                <span class="sr-only">toggle navigation</span>
                <span class="drawer-hamburger-icon"></span>
            </button>
            <nav class="drawer-nav" role="navigation">
                <ul class="drawer-menu">
                    <li>
                        <a class="drawer-menu-item font-weight-bold" href="#">
                            通話オプション割引キャンペーン
                        </a>
                    </li>
                    <li>
                        <a class="drawer-menu-item font-weight-bold" href="#">
                            LINEスタンプ プレミアム<br/>
                            ポイントバックキャンペーン
                        </a>
                    </li>
                    <li>
                        <a class="drawer-menu-item font-weight-bold" href="#">
                            LINEMOがおすすめな３つのポイント
                        </a>
                    </li>
                    <li>
                        <a class="drawer-menu-item font-weight-bold" href="#">
                            よくある質問
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="w-100">
        <div class="d-block">
            <h1>ここはトップページです</h1>
        </div>
        <div class="Box">
            <ul class="slider">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" 
                    alt="スライド1">
                    
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide2.png" 
                    alt="スライド2">
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide3.png" 
                    alt="スライド3">
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide4.png" 
                    alt="スライド4">
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide5.png" 
                    alt="スライド5">
                </li>
            </div>
        </div>
        <section>
            <h2>こちらはscssの練習</h2>
            <article class="s-by-s mb-5">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" 
                    class="w-100" alt="スライド1">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide2.png" 
                    class="w-100" alt="スライド2">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" 
                    class="w-100" alt="スライド3">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" 
                    class="w-100" alt="スライド4">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" 
                    class="w-100" alt="スライド5">
                </div>
            </article>
            <div class="mozi mb-5">
                <p class="text-left">p と li の文字の変化を確かめます</p>
                <ul class="text-left">
                    <li>泣かぬなら鳴くまで待とう時鳥</li>
                    <li>泣かぬなら泣かせてみよう時鳥</li>
                    <li>泣かぬなら〇してしまえ時鳥</li>
                </ul>
            </div>
            <div class="btn-aria mb-5">
                <p>ボタンの設定を確かめます</p>
                <div>
                    <button>btn click!!</button>
                    <button>btn click!!</button>
                    <button>btn click!!</button>
                </div>
                <span>※ この文字がボタンの下に行くか試しています</span>
            </div>
            <div class="color_palet">
                <div class="green"></div>
                <div class="yellow"></div>
            </div>
            <div class="red"></div>
            <div class="black"></div>
            
        </section>
    </main>
    <script>
        jQuery(document).ready(function(){
            jQuery('.drawer').drawer();  
        });

        jQuery(document).ready(function(){
            $('.slider').slick({
                centerPadding: '0',
                centerMode: true,
                slidesToShow: 1,
                variableWidth: true
            });
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>