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




<div class="banner-div" style="background:url(http://64.227.13.14/freeflow/wp-content/uploads/2023/01/what-is-body-banner-scaled.jpg);background-size: cover;
    background-position: center center;
    display: block;
    width: 100%;
    height: 860px;">



    <a href="javascript:void(0);" class="freeflow-logo-a"><img
            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/freeflow-logo.png" alt=""></a>

</div>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-5">


            <table class="float-start">
                <tr>
                    <td> <img class="entry-img w-100"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-2@2x.png" alt="">

                    </td>
                    <td class="subtitle-td align-top">

                    </td>
                </tr>
            </table>

        </div>
        <div class="col-7">


            <h2 class="purple">身體律動課程</h2>

            <div class="mt-5">
                雲門舞集舞蹈教室在1998年正式成立，是從全台灣第一個職業舞團雲門舞集誕生。創辦的理念是讓更多來自任何生活背景的人都能夠透過雲門教室，享受動身體的快樂。用身體去v感受，去學習，去成長，是舞蹈教室課程的目標和希望。與生俱來的身體韻律，是每個人最獨特而寶貴的資產。雲門開創出「生活律動」教學系統，協助每個人從肢體的舞動中認識自己。
            </div>


            <a href="javascript:void(0);" class="home-entry-link mt-4">更多關於雲門舞集舞蹈教室的查詢</a>

        </div>

    </div>

</div>


<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-7 position-relative">

            <h2 class="position-absolute top-0 end-0 orange">三大元素</h2>

            <ul class="p-0 m-0 h2-ul">
                <li>
                    <h2 class="purple-bg round">自主</h2>
                </li>
                <li>
                    <h2 class="purple-bg round">親密界線</h2>
                </li>
                <li>
                    <h2 class="purple-bg round">具身化</h2>
                </li>
            </ul>

            <div class="mt-4">
                課程的設計重點不在於教授舞蹈技巧，而是為青少女創造情境與想像，透過觀察和延展創意，引導她們創造屬於自己的動作，去連結自己的身體，同時學習接納和欣賞別人。課堂期望青少女們得到全然釋放，把課堂中感受到的自在融入於日常生活之中。

                雲門教室師資優秀，教學經驗豐富，有助青少女在活動過程中重新認識自己和身體。以青少女的日常生活為本，連結個人經驗和形體動作，為參加者提供一個發掘自我和開發創意的身心靈空間。
            </div>



        </div>
        <div class="col-5">


            <table class="float-end">
                <tr>
                    <td> <img class="entry-img w-100"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-2@2x.png" alt="">

                    </td>
                    <td class="subtitle-td align-top">

                    </td>
                </tr>
            </table>

        </div>


    </div>

</div>





<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-12 position-relative">


            <h2 class="purple">律動課程框架</h2>

            <div class="position-relative w-100">

                <img class="w-100 rounded-0"
                    src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-3@2x.png" alt="">

                <div class="step-btn-div"></div>


            </div>


        </div>



    </div>

</div>


<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-12 position-relative">
            <h2 class="purple">律動課程特色</h2>
        </div>

        <div class="col-6">
            <table>
                <tr>
                    <td><img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x.png"
                            alt=""></td>
                    <td class="ps-2">

                        <span class="green middle-size"> 人人平等</span>
                        <br>
                        參加者不會被視為病患，都不需要被治療。不把人標籤化，所有人一樣的平等。

                    </td>
                </tr>
            </table>
        </div>
        <div class="col-6"></div>



    </div>

</div>




<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-5">


            <table class="float-start">
                <tr>
                    <td> <img class="entry-img w-100"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-1@2x.png" alt="">

                    </td>
                    <td class="subtitle-td align-top">


                        <table>
                            <tr>
                                <td class="align-top">
                                    青 <br>
                                    少<br>
                                    女

                                </td>
                                <td class="align-top"> 如 <br>
                                    何<br>
                                    連<br>
                                    接</td>
                            </tr>
                        </table>


                    </td>
                </tr>
            </table>

        </div>
        <div class="col-7">

            <div>
                我們知道身與心同時並存，身體活動、心理發展互相影響。透過刻意設計的活動主題，青少女在參與身體律動計劃的課程時，一方面建立身體的掌握能力，同時建立起心理的正面調整。

            </div>


            <!-- <a href="javascript:void(0);" class="home-entry-link mt-4">更多課程資訊</a> -->

        </div>

    </div>

</div>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-6">


            <div>

                <table class="mb-4">
                    <tr>
                        <td class="green big pe-3">心理 - </td>
                        <td class="orange middle-size">從心出發</td>
                        </td>
                    </tr>
                </table>

                藉著「自主・流」，讓每一位少女都有一個機會去體驗律動，播種有關身心連結的種子，讓她們發現原來學習也可以沒有被打分數的壓力。在面對生活壓力與困難時，能夠有一個更積極，更成熟的態度。
                <br><br>
                <table class="mb-4">
                    <tr>
                        <td class="green big pe-3">生理 - </td>
                        <td class="orange  middle-size">從身出發</td>

                    </tr>
                </table>

                身體是個直接的表達方式，與生活息息相關。人們可以通過覺察身體反應，例如壓力、僵硬、疲累、傷害，得知每一刻的狀態。透過身體律動，放開曾經繃緊的身體，讓身體重新拾回快樂的因子，利用原本放在生活的精力回到自身，享受和自己身體對話的時間。
            </div>



        </div>

        <div class="col-6">


            <table class="float-end">
                <tr>

                    <td class="subtitle-td align-top">
                        妳 <br>
                        我<br>
                        同<br>
                        步
                    </td>
                    <td class=" align-bottom"> <img class="entry-img"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-2@2x.png" alt="">

                    </td>
                </tr>
            </table>

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


<div class="footer-div mt-120px">


    <div class="container pt-4 pb-4">




        <div class="row  mt-5">
            <div class="col-7">


                <div class="icons-div">

                    <table>
                        <tr>
                            <td>主辦機構</td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/top-icon-1.png"
                                        alt=""></a><a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/top-icon-2.png"
                                        alt=""></a><a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/top-icon-3.png"
                                        alt=""></a>
                            </td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td>捐助機構</td>
                            <td>合作夥伴</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/bottom-icon-1.png"
                                        alt=""></a>
                            </td>
                            <td> <a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/bottom-icon-2.png"
                                        alt=""></a> <a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/bottom-icon-3.png"
                                        alt=""></a></td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="col-5 form-div">


                <h3 class="mb-3">與我們聯絡</h3>
                <input class="form-control mb-2" type="text" placeholder="姓名">
                <input class="form-control mb-2" type="text" placeholder="電郵">
                <input class="form-control mb-2" type="text" placeholder="訊息">


                <div class="text-end">
                    <a href="javascript:void(0);" class="form-submit-btn">提交</a>

                </div>
            </div>
        </div>

        <div class="row footer-small-word">
            <div class="col-12">

                <div>
                    於新冠肺炎疫情期間拍攝之影像，在場人士均有嚴格遵從當時實行之防疫措施。 <br>
                    所有作品內容均由主辦單位/創作團隊獨立製作，並不代表本計劃及捐助機構之立場或意見。
                </div>

                <ul class="footer-menu-ul p-0 float-start mt-4">
                    <li>&copy; 2022 JC FreeFlow</li>
                    <li><a href="javascript:void(0);">使用條款</a></li>
                    <li><a href="javascript:void(0);">私隱政策</a></li>
                </ul>

            </div>

            <div class="col-12">

                <ul class="sns-menu-ul">
                    <li>
                        <a href="javascript:void(0);">
                            <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-1.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-2.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-3.png" alt="">
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </div>

</div>
<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();