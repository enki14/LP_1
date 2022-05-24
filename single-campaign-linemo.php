
<?php get_header(); ?>
    
    <div class="content">
        <div class="content-header">
            <div class="header-img bg-white"> 
                <h2 class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-lead_ttl_img_pc.png" 
                    alt="キャンペーンが盛りだくさん" />
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
        <div id="campaign-1" class="campaign"> <!-- 緑の部分をbeforeで含めたcampaign-1の全体 -->
            <div class="wrapper"> <!-- campaign-1全体の幅をそろえている -->
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
                    <article class="scroll_add">
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
                <section class="plan position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_price_ttl_img_pc.png" alt="スマホプラン" />
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="accordion-body">
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
                            <h2 class="accordion-header py-5" id="headingOne">
                                <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/l-campaign01_price_btn_more_img.png" alt="スマホプランをもっと見る" />
                                </button>
                            </h2>
                        </div>
                    </div>
                    <ul class="price-list">
                        <li>
                            ＊1 時間帯によって速度制御する場合があります。データ容量を超えた場合、550円（税込）/1GBの追加データを購入することができます。
                        </li>
                        <li>
                            ＊2 LINEギガフリーについて
                            <ul>
                                <li>・トークでの位置情報の共有・Liveの利用、スタンプショップの利用、ニュース記事の閲覧など、一部LINEギガフリーの対象外があります。</li>
                                <li>・iOS 15以降でiCloud+を利用する際に、プライベートリレーをオンに設定した状態でSafariブラウザからギガフリーの対象サービスを利用すると、データ量を消費する場合がございます。プライベートリレーをオフにした場合、iOS 14以前同様にギガフリーの対象サービスがデータ量を消費せずご利用いただけます。</li>
                                <li>・OS、ブラウザ若しくはアプリケーションのバージョンアップ、アップデートその他技術的要因により、ギガフリーの対象外となる場合があります。詳細は、LINEMOホームページをご確認ください。</li>
                                <li>・ギガフリーの対象サービスは、変更、追加、廃止又はギガフリーの対象外となることがあります。</li>
                                <li>・LINEサービス内で有料のサービスを利用する場合は、別途お支払いが必要です。</li>
                            </ul>
                        </li>
                        <li>
                            ＊3 ナビダイヤル（0570から始まる電話番号）など、通話料とは別に料金がかかる電話番号があります。
                        </li>
                        <li>
                            ＊4 加入月は基本料、通話オプションの定額料および通話オプション割引キャンペーンの割引額はいずれも日割りになります。
                        </li>
                    </ul>
                </section>
                <section class="benefits w-100">
                    <h4 class="mb-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_period_ttl_img_pc.png" 
                        class="w-100" alt="キャンペーン期間"/>
                    </h4>
                    <div class="seventeen-img mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_period_ttl_sub_img_pc.png" 
                        class="w-75" alt="3/17終了"/>
                        <ul class="my-4">
                            <li>※キャンペーン終了時期は、ホームページなどでお知らせします。</li>
                        </ul>
                    </div>
                    <h4 class="mb-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_period_privilege_ttl_img_pc.png" 
                        class="w-100" alt="特典">
                    </h4>
                    <p class="font-weight-bold text-left">「通話準定額」の定額料（税込550円/月）または「通話定額」の定額料（税込1,650円/月）が550円/月（税込）割引。</p>
                    <p class="font-weight-bold text-left mb-5">割引期間は、ご契約月を1カ月目として13カ月間。割引を受けるには「通話準定額」または「通話定額」へのお申し込みが別途必要です。</p>
                    <h4 class="my-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_period_condition_ttl_img_pc.png" 
                        class="w-100" alt="適用条件">
                    </h4>
                    <p class="font-weight-bold text-left mb-5">受付期間内にLINEMOへ新規、他社からの乗り換え（MNP）、ソフトバンクまたはワイモバイルからの乗り換えで契約すること。</p>
                    <div class="tokuten-image">
                        <h4 class="text-left font-weight-bold">特典の適用イメージ</h4>
                        <ul class="text-left">
                            <li>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/l-campaign01_period_condition_img_list01.png" 
                                alt="まる1" class="circle-num"></span>
                                ご契約当月の割引額は日割りになります。
                            </li>
                            <li>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/l-campaign01_period_condition_img_list02.png" 
                                alt="まる2" class="circle-num"></span>
                                通話オプションを別の通話オプションへ変更した場合も特典適用期間内であれば割引されます。
                            </li>
                            <li>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/l-campaign01_period_condition_img_list03.png" 
                                alt="まる3" class="circle-num"></span>
                                通話オプションに加入していない期間は割引されませんが、割引適用期間にはカウントされます。
                            </li>
                            <li>
                                <span><img src="<?php echo get_template_directory_uri(); ?>/images/l-campaign01_period_condition_img_list04.png" 
                                alt="まる4" class="circle-num"></span>
                                通話オプションを解除し再度加入した場合も特典適用期間内であれば割引されます。
                            </li>
                        </ul>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_period_condition_img_pc.png" 
                        class="w-100" alt="適用期間のイメージ">
                    </div>
                    <div class="note-matters my-5">
                        <p class="text-left font-weight-bold">注意事項</p>
                        <ul class="text-left">
                            <li>・特典適用期間終了後、「通話定額」または「通話準定額」の解除のお手続きをしない場合、特典適用が終了となった翌月利用分から定額料が発生いたします。</li>
                            <li>・本キャンペーンの内容および期間は、予告なく変更する場合があります。</li>
                            <li>・本キャンペーンについての詳細は提供条件書よりご確認ください。</li>
                        </ul>
                        <p class="pdf-document text-left w-100">
                            <a href="#" class="font-weight-bold">
                                <i class="fa-solid fa-circle-chevron-right"></i>通話オプション割引キャンペーン提供条件書【PDF】
                            </a>
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <div id="campaign-2" class="campaign"> <!-- 緑の部分をbeforeで含めたcampaign-1の全体 -->
            <div class="wrapper"> <!-- campaign-1全体の幅をそろえている -->
                <section class="gaiyoo">
                    <h2 class="text-center">
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign02_ttl_icn_img_pc.png" 
                            alt="サークル2" class="campaign-circle" />
                        </span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign02_ttl_img_pc.png" 
                        alt="ポイントバックキャンペーン" class="campaign-img_1 w-100" />
                    </h2>
                    <article>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_content_ttl_img_pc.png" 
                        class="w-100" alt="キャンペーン概要">
                        <p class="font-weight-bold text-left my-3">LINEMOの「スマホプラン」を契約の上でLINEスタンプ プレミアム（ベーシックコース/デラックスコース）をご加入中の方にLINEポイント240ポイントを毎月プレゼント。</p>
                        <ul class="text-left">
                            <li>※「ミニプラン」は対象外です。</li> 
                            <li>※学割プランをご利用の場合は120ポイントとなります。</li>
                            <li>※LINEスタンプ プレミアムの無料体験期間中は対象外です。</li>
                        </ul>
                    </article>
                    <article class="mb-5 w-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign02_content_ttl2_img_pc.png" 
                        class="w-100" alt="予告">
                        <p class="font-weight-bold text-left my-3">LINEスタンプ プレミアム（ベーシックコース/保有可能数：5個）を、LINEスタンプ プレミアム利用料の追加料金なしでご利用いただけるよう現在準備中です。もうしばらくお待ち下さい。</p>
                    </article>
                </section>
                <section id="plan_oth" class="plan">
                    <h3 class="mb-5 w-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign02_premiere_ttl_img_pc.png" 
                        alt="LINEスタンププレミアム" class="w-100">
                    </h3>
                    <article class="text-left w-100">
                        <p class="font-weight-bold"><span>900万種類以上の対象クリエイターズスタンプ・絵文字が使い放題</span>のサブスクリプションサービスです。</p>
                        <p class="font-weight-bold">スタンプのみは月額わずか240円（税込）、スタンプ・絵文字は月額480円（税込）で使い放題！</p>
                        <p class="font-weight-bold mb-4">毎月更新されるいろんなラインナップをお楽しみいただけます。</p>
                        <span class="asterisk text-left">※スタンプの保有可能個数は、ベーシックコースで5個、デラックスコースで1,000個です。</span>
                    </article>
                    <div class="d-flex justify-content-center">
                        <div class="row w-75">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/l-campaign02_premiere_point_img01.png" 
                            alt="プレミアム1" class="col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/l-campaign02_premiere_point_img02.png" 
                            alt="プレミアム2" class="col-md-6">
                        </div>
                    </div>
                    <h2 class="detail-btn my-5">
                        <button>
                            <a href="#" class="font-weight-bold">LINEスタンプ プレミアムの詳細をみる</a>
                        </button>
                    </h2>
                </section>
                <section class="benefits w-100">
                    <h4 class="mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_period_ttl_img_pc.png" 
                        class="w-100" alt="キャンペーン期間"/>
                    </h4>
                    <div class="seventeen-img mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_period_ttl_sub_img_pc.png" 
                        alt="3/17終了"/>
                        <ul>
                            <li>※キャンペーン終了時期は、ホームページなどでお知らせします。</li>
                        </ul>
                    </div>
                    <h4 class="mb-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_period_privilege_ttl_img_pc.png" 
                        class="w-100" alt="特典">
                    </h4>
                    <article class="bene_T">
                        <table border="1" class="table_2 w-100">
                            <thead>
                                <tr style="background:#14cd0a; color:#fff;">
                                    <th style="padding:1rem;"></th>
                                    <td style="padding:1rem; border:2px solid #fff;">月間プラン/ 年間プランに加入中</td>
                                    <td style="padding:1rem; border:2px solid #fff;">学割プランに加入中</td>
                                </tr>
                            </thead>
                            <tr>
                                <th>ベーシックコース</th>
                                <td rowspan="2">LINEポイント<span>240ポイント</sapn></td>
                                <td rowspan="2">LINEポイント<span>120ポイント</span></td>
                            </tr>
                            <tr>
                                <th>デラックスコース</th>
                            </tr>
                        </table>
                    </article>
                    <ul class="bene_list">
                        <li>※LINEポイントの内容、ご利用方法、有効期限等の詳細はこちらをご確認ください。</li>
                        <li>※LINEポイントの付与作業は、LINE株式会社がご契約回線と連携されたLINEアカウントに対して行います。</li>
                        <li>
                            ※LINEスタンププレミアムの購入料金は以下となります。
                            <ul>
                                <li>【ベーシックコース】　月間プラン：240円（税込）／月　年間プラン：2,400円（税込）／年　学割プラン：120円（税込）／月</li>
                                <li>【デラックスコース】　月間プラン：480円（税込）／月　年間プラン：4,800円（税込）／年　学割プラン：360円（税込）／月</li>
                            </ul>
                        </li>
                    </ul>

                    <h4 class="my-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign01_period_condition_ttl_img_pc.png" 
                        class="w-100" alt="適用条件">
                    </h4>
                    <p class="font-weight-bold text-left mb-5">キャンペーン期間中の毎月末日（以下「特典付与判定日」といいます。）に、以下の条件のすべてを満たしている場合に特典を付与いたします。</p>
                    <ul class="conditions mb-4">
                        <li class="condi_li font-weight-bold">
                            「スマホプラン」に加入中であること
                            <ul>
                                <li>※「ミニプラン」は本キャンペーンの対象外です。また、「スマホプラン」から「ミニプラン」に変更された場合も本キャンペーンの対象外となるため、ご注意ください。</li>
                            </ul>
                        </li>
                        <li class="condi_li font-weight-bold">
                            LINEスタンプ プレミアム（ベーシックコース又はデラックスコース）に加入中であること
                            <ul>
                                <li>※LINEスタンプ プレミアム（ベーシックコース又はデラックスコース）の無料体験期間中の場合は除きます。</li>
                            </ul>
                        </li>
                        <li class="condi_li font-weight-bold">
                            LINE上のLINEMO公式アカウント（LINEMO MyMenuアカウント）から、お客さまのLINEアカウントと「スマホプラン」に加入中の回線（以下「ご契約回線」といいます。）を連携していること
                            <ul>
                                <li>※ご契約回線 1回線につき連携できるLINEアカウントは１つです。</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="slide_box">
                        <h2 class="mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/l-campaign02_howto_ttl_img.png" 
                            alt="LINEの連携方法">
                        </h2>
                        <div class="carousel">
                            <?php echo do_shortcode('[metaslider id="33"]'); ?>
                        </div>
                    </div>
                    <h4 class="my-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-campaign02_period_content_ttl_img_pc.png" 
                        class="w-100" alt="特典付与時期">
                    </h4>
                    <p class="font-weight-bold text-left">LINEポイントは、各特典付与判定日の翌月中旬頃に付与いたします。ただし、都合により前後する可能性がございます。</p>
                    <article class="bene_T">
                        <table border="1" class="table_4 w-100">
                            <thead>
                                <tr style="background:#14cd0a; color:#fff; font-weight:500;">
                                    <th class="py-1">特典付与判定日</th>
                                    <th class="py-1">特典付与時期</th>
                                </tr>
                            </thead>
                            <tr>
                                <td class="py-1">2021年3月末日</td>
                                <td class="py-1">2021年4月中旬頃</td>
                            </tr>
                            <tr>
                                <td class="py-1">2021年4月末日</td>
                                <td class="py-1">2021年5月中旬頃</td>
                            </tr>
                            <tr>
                                <td class="py-1">2021年5月末日</td>
                                <td class="py-1">2021年6月中旬頃</td>
                            </tr>
                        </table>
                        <p class="text-center">&#65049;</p>
                    </article>
                    <p class="pre-note text-left mb-5">※LINEポイントの進呈作業はLINE株式会社が行います。</p>
                    <div class="note-matters mb-4">
                        <p class="text-left font-weight-bold">注意事項</p>
                        <ul class="noteList_2 text-left">
                            <li>
                                ・特典付与判定日までに以下のいずれかに該当した場合、特典の付与ができません。
                                <ul>
                                    <li>・ご契約回線を譲渡した場合</li>
                                    <li>・ご契約回線を解約した場合</li>
                                </ul>
                            </li>
                            <li>・当社は、本キャンペーンの実施に当たり、「スマホプラン」に加入したお客さまのご契約回線に関する情報をLINE株式会社に提供します。また、LINEスタンプ プレミアムの加入状況に関する情報について、LINE株式会社から提供を受けます。</li>
                            <li>・本キャンペーンの提供主体はソフトバンク株式会社となります。</li>
                            <li>・本キャンペーンの詳細は提供条件書よりご確認ください。</li>
                        </ul>
                        <p class="pdf-document text-left w-100">
                            <a href="#" class="font-weight-bold">
                                <i class="fa-solid fa-circle-chevron-right"></i>「LINEスタンプ プレミアム ポイントバックキャンペーン」提供条件書【PDF】
                            </a>
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div id="three-point" class="content_2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/l-campaign01_bdrimg.png" alt="帯" class="w-100" />
        <div class="white-band w-100">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-point_header_img_pc.png" 
            alt="3つのポイント" class="w-100" />
        </div>
        <div id="point_1" class="point-eria"> 
            <div class="P_wrapper">
                <h3 class="text-center w-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-point_plan_ttl_01_pc.png" 
                    alt="選べる2つの料金プラン" class="point-h2 text-center w-50" />
                </h3>
                <section class="point_plan mt-5">
                    <p class="text-left">たっぷり使える20GBのスマホプランに追加して、3GBのミニプランが登場。スマホの使い方にあった選び方ができるようになりました。</p>
                    <div class="text-center mt-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-point_plan_item_02_pc.png" alt="ミニプランとスマホプラン" class="w-50" />
                    </div>
                    <ul class="text-left mt-4">
                        <li>※時間帯により速度制御の場合あり。</li>
                        <li>※通話従量制（22円/30秒 税込）。ナビダイヤルなど異なる料金の電話番号があります。</li>
                    </ul>
                    <h2 class="detail-btn mt-4">
                        <button>
                            <a href="#" class="font-weight-bold">料金プラン詳細をみる</a>
                        </button>
                    </h2>
                </section>
            </div>
        </div>
        <div id="point_2" class="point-eria"> 
            <div class="P_wrapper">
                <h3 class="text-center w-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-point_tel_ttl_01_pc.png" 
                    alt="LINE通話がギガノーカウント" class="point-h2 text-center w-50" />
                </h3>
                <section class="point_plan mt-5">
                    <h2 class="text-center mb-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-point_tel_ttl_02_pc.png" alt="ギガノーカウント" class="w-75" />
                    </h2>
                    <div class="text-center mt-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-point_tel_item_01_pc.png" alt="電話をかけあうイメージ" class="w-50 mb-5" />
                    </div>
                    <p class="text-left">LINEアプリのトークはもちろん、音声・ビデオ通話のデータ消費もゼロ。データ容量を使い切っても（通信速度制限がかかっても）LINEアプリの通信速度は落ちません。</br>
                    また、データ容量の大きな画像・動画の送受信やLINE VOOM（旧：タイムライン）への投稿もLINEギガフリーの対象です。</p>
                    <ul class="text-left mt-4">
                        <li>※時間帯により速度制御の場合あり。</li>
                        <li>＊1 LINEギガフリーについて</li>    
                        <li>・トークでの位置情報の共有・Liveの利用、スタンプショップの利用、ニュース記事の閲覧など、一部LINEギガフリーの対象外があります。</li>
                        <li>・iOS 15以降でiCloud+を利用する際に、プライベートリレーをオンに設定した状態でSafariブラウザからギガフリーの対象サービスを利用すると、データ量を消費する場合がございます。プライベートリレーをオフにした場合、iOS 14以前同様にギガフリーの対象サービスがデータ量を消費せずご利用いただけます。</li>
                        <li>・OS、ブラウザ若しくはアプリケーションのバージョンアップ、アップデートその他技術的要因により、ギガフリーの対象外となる場合があります。詳細は<a href="#">こちら</a>をご確認ください。</li>
                        <li>・ギガフリーの対象サービスは、変更、追加、廃止又はギガフリーの対象外となることがあります。</li>
                        <li>・LINEサービス内で有料のサービスを利用する場合は、別途お支払いが必要です。</li>
                    </ul>
                </section>
            </div>
        </div>
        <div id="point_3" class="point-eria"> 
            <div class="P_wrapper">
                <h3 class="text-center w-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-point_connect_ttl_01_pc.png" 
                    alt="5G通信も使えて早い" class="point-h2 text-center w-50" />
                </h3>
                <section class="point_plan mt-5">
                    <h2 class="text-center mb-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-point_connect_ttl_02_pc.png" alt="LINEMOなら" class="w-100" />
                    </h2>
                    <div class="text-center mt-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pc/l-point_connect_item_img_pc.png" alt="5G高速通信" class="mb-5" />
                    </div>
                    <p class="text-left">LINEMOはソフトバンクの回線をそのまま利用しているので、お昼や夕方も繋がりやすく日本全国各地で繋がります。</p>
                    
                    <ul class="text-left mt-4">
                        <li>※時間帯により速度制御の場合あり。</li>
                        <li>※高速大容量５G（新周波数）は限定エリアで提供。エリアマップは<a href="#">こちら</a>。</li>    
                        <li>※５G通信サービスを利用するためには、５G対応端末が必要です。</li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
    <div id="question" class="aco-eria bg-white">
        <div class="aco_wrraper">
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
<?php get_footer(); ?>
