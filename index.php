
<?php get_header(); ?>
    
    <div class="content">
        <div class="content-header">
            <div class="header-img w-100 bg-white"> 
                <h2 class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-lead_ttl_img_pc.png" 
                    alt="キャンペーンが盛りだくさん">
                </h2>
            </div>
            <section>
                <h3 class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-lead_campaign_ttl_img_pc.png" alt="出たもんキャンペーン">
                </h3>
                <article class="ch_img d-flex justify-content-center">
                    <div class="row">
                        <a href="#campaign-1" class="two-campaign col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-lead_campaign_content_link02_img01_pc.png" 
                            alt="割引キャンペーン" />
                        </a>
                        <a href="#campaign-2" class="two-campaign col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-lead_campaign_content_link02_img02_pc.png" 
                            alt="ポイントバックキャンペーン" />
                        </a>
                    </div>
                </article>
            </section>
        </div>
        <div id="campaign-1"> <!-- 緑の部分をbeforeで含めたcampaign-1の全体 -->
            <div class="c1_wrapper"> <!-- campaign-1全体の幅をそろえている -->
                <section class="gaiyoo">
                    <h2 class="text-center">
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_ttl_icn_img_pc.png" 
                            alt="サークル1" class="campaign-circle" />
                        </span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_ttl_img_pc.png" 
                        alt="割引キャンペーン" class="campaign-img_1 w-100" />
                    </h2>
                    <article>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_content_ttl_img_pc.png" alt="キャンペーン概要" class="gaiyou w-100 mb-5" />
                        <p class="text-left mb-4">
                            5分以内の国内通話が無料になる通話オプション「通話準定額」（税込550円/月）※1がLINEMO契約から1年後まで無料※2で利用できます。<br />
                            また、通話時間・回数ともに無制限で、国内通話がかけ放題になる通話オプション「通話定額」（税込1,650円/月）※1は、LINEMO契約から1年後まで月額1,100円（税込）で利用できます。
                        </p>
                        <ul class="text-left">
                            <li>
                                ※1 一部定額対象外の通話あり。既にLINEMO利用中の方が本オプションを契約、または月途中に解除申し込みをした場合、翌請求月から適用。契約回線を解約する場合、本オプションの月額料金は日割計算を行いません。通話準定額における1回あたり5分を超える国内通話は、30秒につき22円（税込）の通話料が別途かかります。
                            </li>
                            <li>
                                ※2 通話準定額又は通話定額に加入していない月は割引適用されません。オプションに加入していない期間も通算して割引適用期間をカウントします。
                            </li>
                        </ul>
                    </article>
                </section>
                <section class="plan position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_price_ttl_img_02_pc.png" alt="ミニプラン" />
                    <article>
                        <table border="1" class="table_1">
                                <tr>
                                    <th>基本料</th>
                                    <td>900円/月（税込990円/月）</td>
                                </tr>
                                <tr>
                                    <th>データ容量*1</th>
                                    <td>3GB+「LINEギガフリー」*2</td>
                                </tr>
                                <tr>
                                    <th>通話料</th>
                                    <td>22円（税込）/30秒*3</td>
                                </tr>
                        </table>
                        <table border="1" class="table_2">
                            <thead>
                                <tr style="background:#14cd0a; color:#fff;">
                                    <th style="padding:1rem;"></th>
                                    <td style="padding:1rem; border:2px solid #fff; text-align:left;">通話オプション無し</td>
                                    <td style="padding:1rem; border:2px solid #fff; text-align:left;">通話準定額</td>
                                    <td style="padding:1rem; border:2px solid #fff; text-align:left;">通話定額</td>
                                </tr>
                            </thead>
                            <tr>
                                <th>通話オプション</th>
                                <td>―</td>
                                <td>500円/月（税込550円/月）</td>
                                <td>1,500円/月（税込1,650円/月）</td>
                            </tr>
                            <tr>
                                <th>通話オプション<br/>割引キャンペーン<br/>適用時</th>
                                <td>―</td>
                                <td>0円/月</td>
                                <td>1,000円/月（税込1,100円/月）</td>
                            </tr>
                        </table>
                        <table border="1" class="table_3">
                            <tr>
                                <th>加入〜13カ月目*4</th>
                                <td rowspan="2">900円/月<br/>（税込990円/月）</td>
                                <td><span>900円</span>/<strong>月</strong>（税込990円/月）</td>
                                <td><span>1,900円</span>/<strong>月</strong>（税込2,090円/月）</td>
                            </tr>
                            <tr>
                                <th>14カ月目〜</th>
                                <td>1,400円/月（税込1,540円/月）</td>
                                <td>2,400円/月（税込2,640円/月）</td>
                            </tr>
                        </table>
                    </article>
                </section>
                <section class="plan">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_price_ttl_img_pc.png" alt="スマホプラン" />
                                    <article>
                                        <table border="1" class="table_1">
                                            <tr>
                                                <th>基本料</th>
                                                <td>2,480円/月（税込2,728円/月）</td>
                                            </tr>
                                            <tr>
                                                <th>データ容量<sup>*1</sup></th>
                                                <td>20GB+「LINEギガフリー」<sup>*2</sup></td>
                                            </tr>
                                            <tr>
                                                <th>通話料</th>
                                                <td>22円（税込）/30秒<sup>*3</sup></td>
                                            </tr>
                                        </table>
                                        <table border="1" class="table_2">
                                            <thead>
                                                <tr style="background:#14cd0a; color:#fff;">
                                                    <th style="padding-top:1.5rem; padding-bottom:1.5rem;"></th>
                                                    <td class="thead-td" style="padding-top:1.5rem; padding-bottom:1.5rem;">通話オプション無し</td>
                                                    <td class="thead-td" style="padding-top:1.5rem; padding-bottom:1.5rem;">通話準定額</td>
                                                    <td class="thead-td" style="padding-top:1.5rem; padding-bottom:1.5rem;">通話定額</td>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <th>通話オプション</th>
                                                <td>―</td>
                                                <td>500円/月（税込550円/月）</td>
                                                <td>1,500円/月（税込1,650円/月）</td>
                                            </tr>
                                            <tr>
                                                <th>通話オプション<br/>割引キャンペーン<br/>適用時</th>
                                                <td>―</td>
                                                <td>0円/月</td>
                                                <td>1,000円/月（税込1,100円/月）</td>
                                            </tr>
                                        </table>
                                        <table border="1"  class="table_3">
                                            <tr>
                                                <th>加入〜13カ月目<sup>*4</sup></th>
                                                <td rowspan="2">2,480円/月<br/>（税込2,728円/月）</td>
                                                <td><span>2,480円</span>/月（税込2,728円/月）</td>
                                                <td><span>3,480円</span>/月（税込3,828円/月）</td>
                                            </tr>
                                            <tr>
                                                <th>14カ月目〜</th>
                                                <td>2,980円/月（税込3,278円/月）</td>
                                                <td>3,980円/月（税込4,378円/月）</td>
                                            </tr>
                                        </table>
                                    </article>
                                </div>
                            </div>
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/l-campaign01_price_btn_more_img.png" alt="スマホプランをもっと見る">
                                </button>
                            </h2>
                        </div>
                    </div>
                </section>
                <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
            </div>
            
        </div>
        
    </div>
<?php get_footer(); ?>
