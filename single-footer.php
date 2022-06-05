<div id="question" class="aco-eria bg-white">
    <div class="aco_wrapper">
        <h2 class="text-center my-5 mx-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-faq_ttl_sp.png" alt="よくあるご質問" />
        </h2>
        <div class="accordion mb-4" id="accordion-Ex">
            <?php echo do_shortcode('[QandA]'); ?>
        </div>
        <a href="#" class="qa_list text-left font-weight-bold position-relative">よくある質問一覧を見る</a>
        <div class="sns_eria w-100">
            <p class="text-center mb-4">最新情報は公式アカウントをチェック</p>
            <div class="d-flex justify-content-center">
                <div class="row">
                    <a href="https://twitter.com/share?url=https://point-everyday.com/
                    &text=スーパーマーケットのポイントカード情報を提供します【 東京版 】
                    &hashtags=スーパー,ポイントカード,クレジット,お得情報,東京"
                    class="twitter col-6" rel="nofollow" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-sns_icn_01_pc.png" 
                        alt="twitter" />
                    </a>
                    <a href="https://line.me/R/ti/p/%40156hwqfo" 
                    class="line_button col-6" rel="nofollow" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-sns_icn_02_pc.png" 
                        alt="line"  />
                    </a>
                </div>
            </div>
            <div class="linemo_logo w-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/p-header_logo.svg" 
                alt="linemo-logo" class="text-center" />
            </div>
        </div>
        <div class="crumb_eria">
            <?php
                if(function_exists( 'yoast_breadcrumb' )){
                yoast_breadcrumb( '<p id="breadcrumbs">', '</p>');
                }
            ?>
        </div>
    </div>
</div>