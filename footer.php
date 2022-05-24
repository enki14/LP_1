    <footer class="pb-4">
        <div class="text-center mb-5">
            <a href="#" class="col-2 text-white">企業情報</a>
            <a href="#" class="col-3 text-white">個人情報について</a>
            <a href="#" class="col-5 text-white">情報セキュリティーポリシー</a>
        </div>
        <p class="text-center w-100 text-white">Copyright © SoftBank All rights reserved.</p>
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
            // jQuery('.drawer-hamburger').css({
            //     'top': '-0.6rem',
            //     'outline': 'none',
            //     'height': '33px',
            //     'width': '33px'
            // });  
            
            // let hamIcon = jQuery('.drawer-hamburger-icon');
            // hamIcon.css({
            //     'background-color': '#b4b9be',
            //     'height': '0.15rem'
            // });
            // hamIcon.css({
            //     'background-color': '#b4b9be',
            //     'height': '0.15rem'

            // });

            // let css = `
            //     .drawer-hamburger-icon::before,
            //     .drawer-hamburger-icon::after{
            //         // 横棒１本に対しての幅・色を指定
            //         height: 0.15rem;
            //         background-color: #b4b9be;
            //         display: block;
            //     }

            // `;

            // let style = jQuery('<style></style>');
            // style.text(css);
            // jQuery('body').append(style);
        });

        // jQuery('.drawer').on('drawer.opened', function(){
        //     let drawerOpen = jQuery('.drawer--right.drawer-open');
        //     let hamIcon = jQuery('.drawer-hamburger-icon');
        //     let draBurger = drawerOpen.find('.drawer-hamburger');
        //     let draNav = drawerOpen.find('.drawer-nav');
        //     let draMenu = draNav.find('.drawer-menu');
        //     let draMenu_li = draMenu.find('li');
        //     let draM_item = draMenu_li.find('.drawer-menu-item');
        //     draMenu.css({
        //         'display': 'block',
        //         'position': 'absolute',
        //         'top': '10.7rem',
        //         'width': '100%'
        //     });
        //     draMenu_li.css('border-top','1px solid #3333');
        //     draM_item.css({
        //         'position': 'relative',
        //         'padding': '2.4rem 0 2.5rem 2rem',
        //         'color': '#14eb0a',
        //         'font-size': '1.6rem'
        //     });
        //     draBurger.css({'right':'0'});
        //     draNav.css({'width':'500px'});
        //     // hamIcon.css('opacity','0');

        //     let css = `
        //         .drawer-menu li:nth-child(4){
        //             border-bottom: 1px solid #3333;
        //         }

        //         .drawer-menu-item::after{
        //             position: absolute;
        //             display: block;
        //             content: ">";
        //             right: 5px; 
        //         }
        //     `;

        //     let style = jQuery('<style></style>');
        //     style.text(css);
        //     jQuery('body').append(style);
        // });
        
        // jQuery(document).on('shown.collapse', '.collapse', function(){

        //     // 疑似要素は jQuery('.aco-btn::after') というようには指定できないので、下記のようにテキスト化する
        //     let css = `
        //         .aco-btn::after{
        //             content: '-';
        //             position: absolute;
        //             right: 15px;
        //             top: 10%;
        //             display: inline-block;
        //             color: #00b900;
        //             font-size: 2.5rem;
        //         }
        //     `;

        //     let style = jQuery('<style></style>');
        //     style.text(css);
        //     jQuery('body').append(style);

        // });

    </script>
    <?php wp_footer(); ?>
    
</body>
</html>