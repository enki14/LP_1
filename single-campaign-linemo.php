
<?php get_header(); ?>
    <img src="<?php echo esc_url(get_template_directory_uri().'/images/pc/l-kv_img_pc.jpg') ?>" alt="linemo-header" class="linemo-header w-100" />
    <div class="btn-aria">
        <a href="#" class="text-center btn-p">今すぐ申し込む</a>
    </div>
    <div class="content">
        <div class="content-header">
            <div class="header-img bg-white"> 
                <h2 class="text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri() .'/images/pc/l-lead_ttl_img_pc.png') ?>" 
                    class="pc_1" alt="キャンペーンが盛りだくさんPC" />
                    <img src="<?php echo esc_url(get_template_directory_uri() .'/images/sp/l-lead_ttl_img_sp.png') ?>" 
                    class="sp_1" alt="キャンペーンが盛りだくさんSP" />
                </h2>
            </div>
            <section>
                <h3 class="text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri() .'/images/pc/l-lead_campaign_ttl_img_pc.png') ?>" alt="出たもんキャンペーン">
                </h3>
                <article class="ch_img d-flex justify-content-center">
                    <div class="row">
                        <a href="#campaign-1" class="two-campaign col-6">
                            <img src="<?php echo esc_url(get_template_directory_uri() .'/images/pc/l-lead_campaign_content_link02_img01_pc.png') ?>" 
                            alt="割引キャンペーン" />
                        </a>
                        <a href="#campaign-2" class="two-campaign col-6">
                            <img src="<?php echo esc_url(get_template_directory_uri() .'/images/pc/l-lead_campaign_content_link02_img02_pc.png') ?>" 
                            alt="ポイントバックキャンペーン" />
                        </a>
                    </div>
                </article>
            </section>
        </div>
        <?php get_template_part('single', 'campaign_1'); ?>
        <?php get_template_part('single', 'campaign_2'); ?>
    </div>
    <?php get_template_part('single', 'content_2'); ?>
    <?php get_template_part('single', 'footer'); ?>
<?php get_footer(); ?>
