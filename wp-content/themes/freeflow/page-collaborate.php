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





<div class="banner-div" style="background:url(http://64.227.13.14/freeflow/wp-content/uploads/2023/01/collaborate-banner-scaled.jpg);background-size: cover;
    background-position: center center;
    display: block;
    width: 100%;
    height: 860px;">





    <a href="<?php echo get_site_url();?>" class="freeflow-logo-a"><img
            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/freeflow-logo.png" alt=""></a>

</div>



<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-5">


            <table class="float-start">
                <tr>
                    <td> <img class="entry-img w-100"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-3@2x.png" alt="">

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
        <div class="col-7">

            <div>
                由香港賽馬會慈善信託基金捐助，賽馬會「自主・流」身體律動計劃是一個為期三年的試點項目(2021－2024)，旨在改善15至24歲青少女的身心健康，過程中啟發她們的好奇心，擁抱身體多樣性，培養性別意識。

                透過台灣雲門舞集舞蹈教室為青少女需要而設計的「生活律動」課程，參加者可以從形體動作，以及與同伴交流，開拓肢體的語彙和創意思維，以與生俱來的節奏感重新感受和定義生活。共同尋找一個舒適的空間討論女性標準，探討這些期望為她們帶來的影響。青少女從中得到陪伴，逐漸增加自信，踏上連結自我的旅程。

                計劃希望在參加者內心埋下種子，重塑對女性議題的討論。
            </div>


            <a href="javascript:void(0);" class="home-entry-link mt-4">更多課程資訊</a>

        </div>

    </div>

</div>



<img class="mt-120px fake-video" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/fake-video-2-scaled.jpg"
    alt="">


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
                ?



            </div>
            <div class="mt-4">



                計劃除了以與雲門舞集舞蹈教室合作的律動課作為軸心，每課堂結束後社工亦會進行小組活動，以作促進參加者對自身的覺察及性別意識，建立正面的社交發展、態度與情緒掌控技巧，而小組內容會因應青少女的能力和需求調整。
            </div>














        </div>
        <div class="col-4 text-center">

            <h2 class="orange">常見問題</h2>

        </div>
    </div>


</div>



<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();