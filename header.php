<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <?php wp_head(); ?>
</head>
<!-- drawer.jsのclass名を追加「 drawer, drawer--right 」 -->
<!-- body_classにクラス名を追加するときは、配列として指定する -->
<body <?php body_class(['drawer', 'drawer--right']); ?>>
    <header class="w-100"  role="banner">
        <div class="d-flex justify-content-between position-fixed w-100 bg-white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/p-header_logo.svg" 
            alt="linemo-logo" />
            <!-- drawer.jsのクラス名は固有のもの -->
            <button type="button" class="drawer-toggle drawer-hamburger py-0">
                <!-- <span class="sr-only">toggle navigation</span>
                <span class="drawer-hamburger-icon"></span> -->
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <nav class="drawer-nav" role="navigation">
                <!-- メニューの読み込み -->
	            <?php wp_nav_menu( array( 'theme_location' => 'my-drawer', 'menu_class' => 'drawer-menu', 'container' => false, 'depth' => 1 ) ); ?>
                <!-- <ul class="drawer-menu">
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
                </ul> -->
            </nav>
        </div>
        <img src="<?php echo get_template_directory_uri().'/images/pc/l-kv_img_pc.jpg' ?>" alt="linemo-header" class="linemo-header w-100" />
        <div class="btn-aria">
            <a href="#" class="text-center btn-p">今すぐ申し込む</a>
        </div>
    </header>