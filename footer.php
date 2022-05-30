    <footer class="pb-4">
        <div class="text-center mb-5">
            <a href="#" class="col-2 text-white">企業情報</a>
            <a href="#" class="col-3 text-white">個人情報について</a>
            <a href="#" class="col-5 text-white">情報セキュリティーポリシー</a>
        </div>
        <p class="text-center w-100 text-white">Copyright © SoftBank All rights reserved.</p>
        <div class="fxd_aria fixed-bottom">
            <button class="top_btn w-100 text-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sp/pagetop_btn_sp.png" 
                class="" alt="ページトップボタン">
            </button>
            <div class="apl_btn text-center w-100">
                <button class="w-100">
                    <a href="#" class="text-center text-white">今すぐ申し込む</a>
                </button>
            </div>
        </div>
    </footer>
    <script>
        jQuery(function(){
            let a_header = jQuery('.accordion-header');
            let a_btn = jQuery('.accordion-button');
            // phpタグはjqueryの中でも文字列として変数に置き換えられる
            let temp_dir = "<?php echo get_template_directory_uri(); ?>";
            let close_path = temp_dir + '/images/l-campaign01_price_btn_close_img.png';
            let show_path = temp_dir + '/images/l-campaign01_price_btn_more_img.png';
            // アコーディオンが開いているときに「閉じる」ボタン表示
            jQuery('#collapseOne').on('show.bs.collapse', function(){
                a_header.css('background','#fff');
                a_btn.css('background','#fff');
                a_btn.html('<img src="' + close_path + '" alt="スマホプランを閉じる" />');
            });
            // アコーディオンが閉じているときに「もっと見る」ボタン表示
            jQuery('#collapseOne').on('hide.bs.collapse', function(){
                a_header.css({'background':'linear-gradient(to bottom, rgba(0,0,0,0) 35%, #fff 65%)'});
                a_btn.css('background','linear-gradient(to bottom, rgba(0,0,0,0) 35%, #fff 65%)');
                a_btn.html('<img src="' + show_path + '" alt="スマホプランを開く" />');
            });
        });

        jQuery(document).ready(function(){
            $('.drawer').drawer();  

            $('.drawer').on('drawer.opened', function(){
                $('header').css('background-color', 'rgba(0,0,0,0.5)');
            });
        });

        let template = "<?php echo get_template_directory_uri(); ?>";
        jQuery(".slickSlider").slick({
            dots:true,
            prevArrow: '<img src="'+ template +'/images/slider_arrow.png" alt="前へ戻るボタン" class="prev_icon">',
            nextArrow: '<img src="'+ template +'/images/slider_arrow.png" alt="次へ進むボタン" class="next_icon">',
            autoplay: false,
            autoplaySpeed: 1000,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '150px',
            focusOnSelect: true
        });


        jQuery(function(){
            let fxdAria = jQuery('.fxd_aria');
            let btnAria = jQuery('.btn_aria').top; 
            let footer = jQuery('footer').top;
            // fxdAria.hide();

            jQuery(window).scroll(function(){
                if(jQuery(this).scrollTop() > btnAria){
                    fxdAria.css('display','block');
                }else if(jQuery(this).scrollTop() > footer){
                    fxdAria.css('display','none');
                }
            });
        });

    </script>
    <?php wp_footer(); ?>
</body>
</html>