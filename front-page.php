<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <?php if(is_front_page()): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css" />
    <?php endif; ?>
    <!-- drawer.css -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css"> -->
    <title>Document</title>
    
    <!-- jquery & iScroll -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script> -->
    <!-- drawer.js -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
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
    <div class="d-block">
        <h1>ここはトップページです</h1>
    </div>
    <script>
        jQuery(document).ready(function(){
            jQuery('.drawer').drawer();  
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>