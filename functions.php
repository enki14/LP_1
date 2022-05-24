<?php

function theme_enqueue_styles(){

    wp_enqueue_style('my_bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', '', '4.2.1', 'all');
    wp_enqueue_style('my_styles', get_template_directory_uri().'/css/mystyle.css', array('my_bootstrap'), '5.9.3', 'all');
    wp_enqueue_style('my_drawer', '//cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css', '', '3.2.2', 'all');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// ヘッド内への読み込み
function add_my_scripts(){
    //WordPress 本体の jQuery を登録解除
    wp_deregister_script('jquery');
    //jQuery を CDN から読み込む
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
    array(), '3.6.0');
    wp_enqueue_script('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',
    array(), '4.1.1');
    // ↓↓↓　drawer.jsで必要
    wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
    array(), '1.14.7');
    // ↓↓↓　drawer.jsで必要
    wp_enqueue_script('iScroll', '//cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js',
    array(), '5.2.0');
    // ↓↓↓　drawer.js
    wp_enqueue_script('drawer', '//cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js',
    array(), '3.2.2');
    wp_enqueue_script('kitcode', '//kit.fontawesome.com/38f9c31fea.js',
    array(), '');
    wp_enqueue_script('meta_slider', get_template_directory_uri().'/js/metaslider.js', array(), '');


}
add_action('wp_enqueue_scripts', 'add_my_scripts');



function register_my_menu(){
    register_nav_menu('my-drawer', 'ドロワーメニュー');
}
add_action('after_setup_theme', 'register_my_menu');




function shortcode_QandA(){
    global $wpdb;

    $sql = $wpdb->get_results("select * from qanda");
    ob_start();
    foreach($sql as $data){
        echo 
        '<div class="aco-item mt-3">
            <p class="aco-header" id="heading_' . $data->id . '">
                <button class="aco-btn collapsed w-100 text-left" type="button" data-toggle="collapse" 
                data-target="#collapse_' . $data->id . '" aria-expanded="true" aria-controls="collapse_' . $data->id . '">
                    ' . $data->question . '
                </button>
            </p>
            <div id="collapse_' . $data->id . '" class="aco-collapse collapse" aria-labelledby="heading_' . $data->id . '" data-parent="#accordion-Ex">
                <div class="aco-body">
                    ' . $data->answer . '
                </div>
            </div>
        </div>';
    }
    return ob_get_clean();
}
add_shortcode('QandA', 'shortcode_QandA');



// カスタム投稿タイプの作成
// カスタム投稿タイプとは、通常の「投稿」とは別の複数にジャンル分けできる投稿タイプ
function create_post_type(){
    $exampleSupports = [
        'title',
        'editor',
        'thumbnail',
        'revisions'
    ];

    register_post_type('campaign', 
        array(
            'label' => 'キャンペーン',
            'public' => true,
            'has_archive' => true,  // アーカイブ一覧を表示するか否か　
            'supports' => $exampleSupports 
        )
    );
}
add_action('init', 'create_post_type');


