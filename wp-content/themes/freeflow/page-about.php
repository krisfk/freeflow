<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
<header class="page-header alignwide">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
</header><!-- .page-header -->
<?php endif; ?>



<a href="<?php echo get_site_url();?>" class="freeflow-logo-a"><img
        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/freeflow-logo.png" alt=""></a>

<div class="banner-div">




    <img class="banner-img" style=" "
        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/about-banner-scaled.jpg" alt="">

    <img class="banner-img mobile" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-1@2x-50-1.jpg"
        alt="">




    <!-- background: url(http://64.227.13.14/freeflow/wp-content/uploads/2022/12/about-banner-scaled.jpg) no-repeat;
    background-size: cover;
    background-position: center center;
    display: block;
    width: 100%;
    height: 860px; -->
</div>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-lg-5 col-md-12 col-sm-12 col-12">


            <table class="float-start w-100">
                <tr>
                    <td>
                        <a href="javascript:void(0);" class="album-a"
                            rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00458.jpg">
                            <img class="entry-img w-100  row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-3@2x.png" alt="">
                        </a>

                        <a href="javascript:void(0);" class="m-album-a">
                            <img class="entry-img row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-3@2x-3.png" alt="">
                        </a>



                    </td>
                    <td class="subtitle-td align-top">

                        <article class="vertical-article ">
                            <h2 class="purple">計劃背景
                            </h2>
                        </article>


                    </td>
                </tr>
            </table>

        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">



            <article class=" mobile-entry-title ">
                <h2 class="purple">計劃背景
                </h2>
            </article>


            <div>
                由香港賽馬會慈善信託基金捐助，賽馬會「自主・流」身體律動計劃是一個為期三年的試點項目(2021－2024)，旨在改善15至24歲青少女的身心健康，過程中啟發她們的好奇心，擁抱身體多樣性，培養性別意識。
                <br> <br>
                透過台灣雲門舞集舞蹈教室為青少女需要而設計的「生活律動」課程，參加者可以從形體動作，以及與同伴交流，開拓肢體的語彙和創意思維，以與生俱來的節奏感重新感受和定義生活。共同尋找一個舒適的空間討論女性標準，探討這些期望為她們帶來的影響。青少女從中得到陪伴，逐漸增加自信，踏上連結自我的旅程。
                <br><br>
                計劃希望在參加者內心埋下種子，重塑對女性議題的討論。
            </div>


            <a href="<?php echo get_site_url();?>/about-curriculum" class="home-entry-link mt-4">更多課程資訊</a>

        </div>

    </div>

</div>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row mobile-reverse-row">

        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">

            <article class=" mobile-entry-title ">
                <h2 class="purple">妳我同步
                </h2>
            </article>



            <div>
                女性一直被歷史和社會因素所規範。尤其是年輕女性，面對社教化的壓力和家庭的期望，個人發展難免受到影響。 <br><br>

                青少女正在面對來自不同方面的創傷性經歷，例如家庭、伴侶、社會。
                這些經歷往往使她們；<br>
                <div class="orange">
                    ･ 自信心下降 <br>
                    ･ 忽略了自我觀察，在意他人看法<br>
                    ･ 自我認同較低，缺乏安全感<br>
                    ･ 不懂如何應對衝突<br>
                    ･ 情緒狀態處於抑鬱、恐懼、焦慮之中<br>
                    ･ 經常否定自我價值，會覺得自己不值得被愛<br>
                    ･ 渴望被聆聽、被看見、被關心，與人連結<br>
                    ･ 承受著不同程度的壓力
                </div>
                <br>
                因此，認識身體是學習為自己負責的開始，讓少女們找回自己的樣子。透過身體的勞動感受自己的存在，重新建立安全感與自在，回歸自己面對身體時的感覺。

            </div>



        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">


            <table class="float-end">
                <tr>

                    <td class="subtitle-td align-top">


                        <article class="vertical-article ">
                            <h2 class="purple">妳我同步
                            </h2>
                        </article>

                    </td>
                    <td class=" align-bottom">
                        <a href="javascript:void(0);" class="album-a"
                            rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC01117.jpg">

                            <img class="entry-img  row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-4@2x.png" alt="">
                        </a>



                        <a href="javascript:void(0);" class="m-album-a">
                            <img class="entry-img row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-4@2x-1.png" alt="">
                        </a>



                    </td>
                </tr>
            </table>

        </div>


    </div>

</div>



<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">


            <table class="float-start w-100">
                <tr>
                    <td>
                        <a href="javascript:void(0);" class="album-a"
                            rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00511.jpg">
                            <img class="entry-img w-100  row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-1@2x.png" alt="">
                        </a>

                        <a href="javascript:void(0);" class="m-album-a">
                            <img class="entry-img row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-5@2x-2.png" alt="">
                        </a>



                    </td>
                    <td class="subtitle-td align-top">



                        <article class="vertical-article" style="width:140px">
                            <h2 class="purple">如何連接 <br>青少女
                            </h2>
                        </article>




                    </td>
                </tr>
            </table>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">

            <article class=" mobile-entry-title ">
                <h2 class="purple">如何連接青少女
                </h2>
            </article>



            <div>
                我們知道身與心同時並存，身體活動、心理發展互相影響。透過刻意設計的活動主題，青少女在參與身體律動計劃的課程時，一方面建立身體的掌握能力，同時建立起心理的正面調整。
            </div>


            <!-- <a href="javascript:void(0);" class="home-entry-link mt-4">更多課程資訊</a> -->

        </div>

    </div>

</div>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">


            <div>

                <table class="mb-4">
                    <tr>
                        <td class="green big pe-3">心理 - </td>
                        <td class="orange middle-size p-0">從心出發</td>
                        </td>
                    </tr>
                </table>

                藉著「自主・流」，讓每一位少女都有一個機會去體驗律動，播種有關身心連結的種子，讓她們發現原來學習也可以沒有被打分數的壓力。在面對生活壓力與困難時，能夠有一個更積極，更成熟的態度。
                <br><br>
                <table class="mb-4">
                    <tr>
                        <td class="green big pe-3">生理 - </td>
                        <td class="orange  middle-size p-0">從身出發</td>

                    </tr>
                </table>

                身體是個直接的表達方式，與生活息息相關。人們可以通過覺察身體反應，例如壓力、僵硬、疲累、傷害，得知每一刻的狀態。透過身體律動，放開曾經繃緊的身體，讓身體重新拾回快樂的因子，利用原本放在生活的精力回到自身，享受和自己身體對話的時間。
            </div>



        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">


            <table class="float-end">
                <tr>

                    <td class="subtitle-td align-top">

                        <article class="vertical-article ">
                            <h2 class="purple">

                                和自己的身體 <br>
                                成為最好的朋友
                            </h2>
                        </article>

                    </td>
                    <td class=" align-bottom">

                        <a href="javascript:void(0);" class="album-a"
                            rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00530.jpg">
                            <img class="entry-img  row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-2@2x.png" alt="">
                        </a>

                        <a href="javascript:void(0);" class="m-album-a">
                            <img class="entry-img row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x-1.png" alt="">
                        </a>


                    </td>
                </tr>
            </table>

        </div>


    </div>

</div>



<!-- <img class="mt-120px fake-video" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/fake-video-2-scaled.jpg"
    alt=""> -->


<div class="mt-120px">
    <iframe width=" 560" height="315" src="https://www.youtube.com/embed/1OIOLBFMPVY" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
</div>



<div class="container yellow-bg-div gx-0 mt-120px">


    <div class="row">

        <div class="col-8">

            <div class="home-entry-title">
                問：為什麼香港需要身體律動?


            </div>
            <div class="mt-4">

                香港生活節奏急速，無論學業、工作或是家庭，都帶來各種壓力，直至到發現身體有毛病時，才驚覺身體需要我們更多的關注。而身體律動課提供了一個空間讓參加者放下煩惱，快樂的和自己的身體親密對話，並且探索關於自己的想法。
            </div>


            <div class="home-entry-title mt-4">
                問：身體律動可為青少女帶來甚麼變化?



            </div>
            <div class="mt-4">


                課程除了能增進身體的肌力、柔軟度與協調能力外，曾上「自主・流」的少女會變得更有自信，更勇於表達自己。而且透過模仿、碰觸等互動活動，她們有更好的交際能力，面對挑戰挫敗時有更正面的態度，並實行「動身體、想辦法」。
            </div>



            <div class="home-entry-title mt-4">
                問：除了律動課程，計劃有甚麼特色可支援青少女?




            </div>
            <div class="mt-4">



                計劃除了以與雲門舞集舞蹈教室合作的律動課作為軸心，每課堂結束後社工亦會進行小組活動，以作促進參加者對自身的覺察及性別意識，建立正面的社交發展、態度與情緒掌控技巧，而小組內容會因應青少女的能力和需求調整。
            </div>














        </div>
        <div class="col-4 text-end">

            <h2 class="orange">常見問題</h2>

        </div>
    </div>


</div>



<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();