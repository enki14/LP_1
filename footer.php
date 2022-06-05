    <footer class="pb-4">
        <div class="text-center mb-5">
            <a href="#" class="col-2 text-white">企業情報</a>
            <a href="#" class="col-3 text-white">個人情報について</a>
            <a href="#" class="col-5 text-white">情報セキュリティーポリシー</a>
        </div>
        <p class="text-center w-100 text-white">Copyright © SoftBank All rights reserved.</p>
        <div class="fxd_aria fixed-bottom">
            <div href="header" class="top_btn w-100 text-right">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sp/pagetop_btn_sp.png" 
                    alt="ページトップボタン">
                </a>
            </div>
            <div class="apl_btn text-center">
                <button class="w-100">
                    <a href="#" class="text-center text-white">今すぐ申し込む</a>
                </button>
            </div>
        </div>
    </footer>
    <script>
        // 「閉じる」「もっと見る」が表示されている部分
        jQuery(function(){
            let aco = jQuery('.accordion');
            let a_header = jQuery('.accordion-header');
            let a_btn = jQuery('.accordion-button');
            // phpタグはjqueryの中でも文字列として変数に置き換えられる
            let temp_dir = "<?php echo get_template_directory_uri(); ?>";
            let close_path = temp_dir + '/images/l-campaign01_price_btn_close_img.png';
            let show_path = temp_dir + '/images/l-campaign01_price_btn_more_img.png';
            // アコーディオンが開いているときに「閉じる」ボタン表示
            jQuery('#collapseOne').on('show.bs.collapse', function(){
                aco.css('margin-bottom','12rem');
                a_header.css({
                    'background':'#fff', 
                    'bottom':'-10rem', 
                    'top':'auto'
                });
                a_btn.css('background','#fff');
                a_btn.html('<img src="' + close_path + '" alt="スマホプランを閉じる" />');
            });
            // アコーディオンが閉じているときに「もっと見る」ボタン表示
            // ただしこちらはページ更新時の状態を指さない。ページ更新時はscssに記載
            jQuery('#collapseOne').on('hide.bs.collapse', function(){
                aco.css('margin-bottom','5.5rem');
                a_header.css({
                    'background':'linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, white 50%, white 100%)',
                    'top':'-10rem',
                    'bottom': 'auto'
                });
                a_btn.css('background','linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, white 50%, white 100%)');
                a_btn.html('<img src="' + show_path + '" alt="スマホプランを開く" />');
            });


            // https://teratail.com/questions/146369
            let first_tr = $(".accordion-body article table").eq("0");
            if(window.matchMedia("(max-width: 450px)").matches){
                $(".accordion-button").on('click', function(){
                    $(first_tr.find("tr")[0]).toggleClass("tr-look");
                });

                first_tr.css({
                    'height': 'inherit',
                    'max-height': '5em',
                    'overflow': 'hidden',
                    'transition': 'all .3s linear 0s'
                });

                $(".tr-look").css('max-height','200px');
            } 
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
            // ここは3でも１でもよい
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            // 緑枠の中の左右の余白
            // .slick-list部分
            centerPadding: '0',
            // スライドの要素の幅をcssで設定できるようになる
            variableWidth: true,
            focusOnSelect: true
        });


        jQuery(function(){
            $(window).on('scroll', function(){
                let fxdAria = $('.fxd_aria');
                let btnAria = $('.btn-aria').offset().top; 
                let footer = $('.aco_wrapper').offset().top;
                let scroll = $(window).scrollTop();

                $('.fxd_aria').each(function(){
                    if(scroll > btnAria){
                        fxdAria.toggle(true);
                    }else{
                        fxdAria.toggle(false);
                    }
                    if(scroll < footer){
                        fxdAria.toggle(true);
                    }else{
                        fxdAria.toggle(false);
                    }

                });
            });

            // トップへ戻るボタン
            let topBtn = $('.top_btn a');
            topBtn.on('click', function(){
                $('body, html').animate({scrollTop:0}, 500, 'swing');
                return false;
            });
        });

        // アコーディオンを開いたときに +マークを -マークに切り替えるためのクラスを生成 
        jQuery(function(){
            jQuery('.aco-btn').on('click', function(){
                $(this).toggleClass('active');
            });
        });

    </script>
    <?php wp_footer(); ?>
</body>
</html>