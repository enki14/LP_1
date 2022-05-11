<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- jquery & iScroll & popper -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <!-- accordionを動作させるにはlinkタグとscriptタグの両方のCDNが必要 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="w-100">
        <div class="d-flex justify-content-between position-fixed w-100 bg-white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/p-header_logo.svg" alt="linemo-logo" />
            <!-- ドロワーメニュー、詳しくは　https://georgeweblog.com/200504drawerjs/#Drawer_js%E3%81%A7%E3%83%89%E3%83%AD%E3%83%AF%E3%83%BC%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC%E3%82%92%E5%AE%9F%E8%A3%85%E3%81%99%E3%82%8B -->
            <button></button>
            <nav></nav>
        </div>
        <img src="<?php echo get_template_directory_uri().'/images/pc/l-kv_img_pc.jpg' ?>" alt="linemo-header" class="linemo-header w-100" />
        <div class="btn-aria py-5">
            <a href="#" class="text-center btn-p">今すぐ申し込む</a>
        </div>
    </header>