<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <title>Document</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <style>
    /*************************************************/
    /******* drawer.js（ドロワーメニュー） ↓↓↓ ********/

        .drawer--right .drawer-hamburger{
            position:relative; 
            top: -0.6rem;
            outline: none;
        }

        .drawer-hamburger span{
            box-sizing: border-box;
            display: inline-block;
            position: absolute;
            left: 0;
            width: 100%;
            height: 0.2rem;
            background: #b4b9be;
        }

        .drawer-hamburger span:nth-of-type(1){
            top: 0.6rem;
        }

        .drawer-hamburger span:nth-of-type(2){
            top: 1.8rem;
        }

        .drawer-hamburger span:nth-of-type(3){
            top: 3rem;
        }

        /* 開いた状態 ↓↓↓ */
        .drawer-overlay {
            background-color: rgba(0,0,0,0.5);
        }

        .drawer-open .drawer-hamburger{
            right: 0 !important;
        }

        .drawer-open .drawer-hamburger span:nth-of-type(2){
            display: none !important;
        } 

        /* バツ印の斜め */
        .drawer-open .drawer-hamburger span:nth-of-type(1){ 
            height: 0.3rem;
            top: -1.2rem;
            transform: translateY(2.9rem) rotate(-45deg);
        }

        /* バツ印の斜め */
        .drawer-open .drawer-hamburger span:nth-of-type(3){
            height: 0.3rem;
            bottom: 1.9rem;
            transform: translateY(-1.2rem) rotate(45deg);
        }
    
        .drawer-open .drawer-nav{
            width: 375px;
        }

        .drawer-open .drawer-nav .drawer-menu{
            display: block;
            position: absolute;
            top: 8.1rem;
            width: 100%;
        }

        .drawer-open .drawer-nav .drawer-menu li{
            border-top: 1px solid #3333;
        }

        .drawer-open .drawer-nav .drawer-menu li:nth-child(4){
            border-bottom: 1px solid #3333;
        }

        .drawer-open .drawer-nav .drawer-menu-item{
            position: relative;
            padding: 2.4rem 0 2.5rem 2rem;

        }

        .drawer-open .drawer-nav .drawer-menu-item a{
            color: #14eb0a !important;
            font-size: 1.6rem;
            font-weight: 700;
        }
            
        .drawer-open .drawer-nav .drawer-menu-item a::after{
            position: absolute;
            top: 45%;
            right: 2rem; 
            width: 0.9rem;
            height: 0.9rem;
            content: "";
            border-top: 0.2rem solid #14eb0a;
            border-right: 0.2rem solid #14eb0a;
            transform: translateY(0) rotate(45deg);
        }

        /************* 閉じる瞬間も、オープン時と同じstyleにする  **********/
        /************* そうしないとデフォルトのstyleが一瞬表示されてしまう ↓↓↓↓ **********/
        .drawer-close .drawer-nav .drawer-menu{
            display: block;
            position: absolute;
            top: 11.2rem;
            width: 100%;
        }

        .drawer-close .drawer-nav .drawer-menu li{
            border-top: 1px solid #3333;
        }

        .drawer-close .drawer-nav .drawer-menu li:nth-child(4){
            border-bottom: 1px solid #3333;
        }

        .drawer-close .drawer-nav .drawer-menu-item{
            position: relative;
            padding: 2.4rem 0 2.5rem 2rem;

        }

        .drawer-close .drawer-nav .drawer-menu-item a{
            color: #14eb0a !important;
            font-size: 1.6rem;
            font-weight: 700;
        }
            
        .drawer-close .drawer-nav .drawer-menu-item a::after{
            position: absolute;
            top: 45%;
            right: 2rem; 
            width: 0.9rem;
            height: 0.9rem;
            content: "";
            border-top: 0.2rem solid #14eb0a;
            border-right: 0.2rem solid #14eb0a;
            transform: translateY(0) rotate(45deg);
        }

        /************* close時のスタイル ↑↑↑↑ **********/
                        
        .drawer-menu-item a:hover{
            text-decoration: none !important;
        }
        /* 開いた状態 ↑↑↑ */

        @media screen and (max-width: 1179px) {
            /* .drawer-open .drawer-nav .drawer-menu{
                top: 12.7rem !important;
            } */

            .drawer-open .drawer-hamburger{
                right: 0 !important;
            }

            .drawer-open .drawer-hamburger span:nth-of-type(3){
                height: 0.3rem;
                bottom: 1.9rem;
                transform: translateY(-1.3rem) rotate(45deg);
            }
        }

        @media screen and (max-width: 550px) {
            .drawer-open .drawer-nav .drawer-menu{
                top: 6.5rem;
            }

        }

    /******* drawer.js ↑↑↑ *******************************************/
    /*****************************************************************/


    /****************************************************************/
    /******* slick.js（スライダー） ↓↓↓ ******************************/
    
        .prev_icon{
            position: absolute;
            top: 27%;
            left: 0;
            background-size: 100%;
            background-repeat: no-repeat;
            z-index: 1;
            display: inline-block;
            width: 23px;
            height: 44px;
        }

        .next_icon{
            position: absolute;
            top: 27%;
            right: 0;
            background-size: 100%;
            background-repeat: no-repeat;
            z-index: 1;
            display: inline-block;
            width: 23px;
            height: 44px;
            transform: rotate(180deg);
        }


        /* slick.jsは!importantをつけたほうが良さそう */

        .slick-slide{
            /* 子のimgだけじゃなくてこちらの幅も指定しないと、スライドの一つ一つの幅が確保できない */
            width: 28.3rem !important;
            margin: 0 5rem;
            display:block;
        }

        .slick-slide img{
            height: 316px;
            width: 283px;
        }

        .slick-slide p{
            font-size: 1.2rem;
            text-indent: -1em;
            text-align: left;
            line-height: 1.75;
            padding: 1.5rem 0 0 1em;
        }

        .slick-slide .slide1_btn{
            padding: 1.5rem 0 0.3rem;
        }

        .slick-slide .slide1_btn a{
            height: 3rem;
            font-size: 1.5rem;
            line-height: 3rem;
            background: #8c3cff;
            border-radius: 1.5rem;
            display: block;
            position: relative;
            box-shadow: 0 0.3rem 0 0 #6d1fdc;
            color: #fff;
            font-weight: 700;
            letter-spacing: 0.03em;
            text-decoration: none;
            transition: opacity .4s;
            z-index: 4;
            margin: 0 auto;
            width: 80%;
        }

        .slide1_btn .btn-p i{
            position: absolute;
            top: 0.7rem;
            right: 2rem;
        }

        .slick-dots{
            bottom: -1.8rem !important;
            justify-content: center !important;
            display: flex !important;
        }

        .slick-dots li{
            width: 10px !important;
            height: 10px !important;
            margin: 5px !important;
            transition: opacity .4s !important;
        }

        .slick-dots li button::before{
            font-size: 13px !important;
            
        }

        .slick-dots .slick-active:hover{
            opacity: 1 !important;
        }

        .slick-dots li:hover{
            opacity: .15 !important;
        }

        .slick-dots li.slick-active button::before{
            opacity: 1 !important;
            color: #14eb0a !important;
        }

        @media screen and (max-width: 1179px){
            .slick-slide{
                margin: 0 2.5rem;
            }

            .slick-slide .side1_btn{
                background: #fff;
            }

        }

        @media screen and (max-width: 550px){
            .slide_box{
                padding-bottom: 0;
            }

            .slickSlider{
                margin: 0 auto !important;
            }

            .slick-slide{
                margin: 0 2.6rem;
            }

            .slick-slide img{
                height: auto;
                width: 260px;
            }

            .slick-slide .slide1_btn a{
                width: 60%;
            }

            .slick-slide p{
                padding: 1.5rem 3.3rem 0 2rem;
                font-size: 1.2rem !important;
            }

        }

    /******* slick.js ↑↑↑ ***********************************************/
    /********************************************************************/
    
    </style>
    <?php wp_head(); ?>
</head>
<!-- drawer.jsのclass名を追加「 drawer, drawer--right 」 -->
<!-- body_classにクラス名を追加するときは、配列として指定する -->
<body <?php body_class(['drawer', 'drawer--right']); ?>>
    <header class="w-100" role="banner">
        <div class="d-flex justify-content-between position-fixed bg-white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/p-header_logo.svg" 
            alt="linemo-logo" />
            <!-- drawer.jsのクラス名は固有のもの -->
            <button type="button" class="drawer-toggle drawer-hamburger py-0">
                <!-- 3つの横棒をspan一つ一つで表している。デフォルトのdrawer-hamburger-iconはスタイルが決まりにくかった -->
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav class="drawer-nav" role="navigation">
                <!-- 管理画面で設定したメニューの読み込み -->
	            <?php wp_nav_menu( array( 'theme_location' => 'my-drawer', 'menu_class' => 'drawer-menu', 'container' => false, 'depth' => 1 ) ); ?>
            </nav>
        </div>
    </header>