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

<div class="banner-div" style="">

    <img class="banner-img" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/what-is-body-banner-scaled.jpg"
        alt="">

    <img class="banner-img mobile" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-8@2x-50.jpg"
        alt="">

</div>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-lg-5 col-md-12 col-sm-12 col-12 ">


            <table class="float-start">
                <tr>
                    <td>
                        <a href="javascript:void(0);" class="album-a"
                            rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00530.jpg">
                            <img class="entry-img w-100  row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-2@2x.png" alt=""></a>




                        <a href="javascript:void(0);" class="m-album-a">
                            <img class="entry-img row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x-1.png" alt="">
                        </a>


                    </td>
                    <!-- <td class="subtitle-td align-top">

                    </td> -->
                </tr>
            </table>

        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">


            <h2 class="purple">身體律動課程</h2>

            <div class="mt-5">
                雲門舞集舞蹈教室在1998年正式成立，是從全台灣第一個職業舞團雲門舞集誕生。創辦的理念是讓更多來自任何生活背景的人都能夠透過雲門教室，享受動身體的快樂。用身體去v感受，去學習，去成長，是舞蹈教室課程的目標和希望。與生俱來的身體韻律，是每個人最獨特而寶貴的資產。雲門開創出「生活律動」教學系統，協助每個人從肢體的舞動中認識自己。
            </div>


            <a href="https://www.cgds.com.tw/" target="_blank" class="home-entry-link mt-4">更多關於雲門舞集舞蹈教室的查詢</a>

        </div>

    </div>

</div>


<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row mobile-reverse-row gx-0">

        <div class="col-lg-7 col-md-12 col-sm-12 col-12   position-relative">

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
                <br> <br>
                雲門教室師資優秀，教學經驗豐富，有助青少女在活動過程中重新認識自己和身體。以青少女的日常生活為本，連結個人經驗和形體動作，為參加者提供一個發掘自我和開發創意的身心靈空間。
            </div>



        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-12 ">


            <table class="float-end ">
                <tr>
                    <td class="align-top">

                        <a href="javascript:void(0);" class="album-a"
                            rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00530.jpg">
                            <img class="  row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-2@2x.png" alt="">
                        </a>

                        <a href="javascript:void(0);" class="m-album-a">
                            <img class="entry-img row-img-min-400"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x-1.png" alt="">
                        </a>

                    </td>
                    <!-- <td class="subtitle-td align-top">

                    </td> -->
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


<div class="container yellow-bg-div gx-0 mt-120px feature-container">

    <div class="row">

        <div class="col-12 position-relative">
            <h2 class="purple">律動課程特色</h2>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mt-4">


            <div class="row align-items-center">
                <div class="col-6">

                    <a href="javascript:void(0);" class="album-a mobile-keep"
                        rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00530.jpg">
                        <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x.png"
                            alt="">
                    </a>
                </div>
                <div class="col-6"> <span class="green middle-size"> 人人平等</span>
                    <br>
                    參加者不會被視為病患，都不需要被治療。不把人標籤化，所有人一樣的平等。
                </div>
            </div>

        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mt-4">


            <div class="row align-items-center">
                <div class="col-6">

                    <a href="javascript:void(0);" class="album-a  mobile-keep"
                        rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00530.jpg">
                        <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x.png"
                            alt="">
                    </a>
                </div>
                <div class="col-6"> <span class="green middle-size">

                        沒有標準框架 <br>
                        創造一套自己的動作


                    </span>
                    <br>
                    在身體律動課裡，每個人都是不一樣的。沒有一定的標準，亦不需要別人的批判或認可，而是去學習發掘內在的經驗。
                </div>
            </div>

        </div>


        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mt-4">


            <div class="row align-items-center">
                <div class="col-6">

                    <a href="javascript:void(0);" class="album-a  mobile-keep"
                        rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00530.jpg">
                        <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x.png"
                            alt="">
                    </a>
                </div>
                <div class="col-6"> <span class="green middle-size">

                        沒有標準框架 <br>
                        創造一套自己的動作


                    </span>
                    <br>
                    在身體律動課裡，每個人都是不一樣的。沒有一定的標準，亦不需要別人的批判或認可，而是去學習發掘內在的經驗。
                </div>
            </div>

        </div>


        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mt-4">


            <div class="row align-items-center">
                <div class="col-6">

                    <a href="javascript:void(0);" class="album-a  mobile-keep"
                        rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00530.jpg">
                        <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x.png"
                            alt="">
                    </a>
                </div>
                <div class="col-6"> <span class="green middle-size">
                        重視當下體驗 <br>
                        解除大惱疲勞
                    </span>
                    <br>
                    課程不會教授拉筋、舞蹈技巧等，參加者可按當天狀態及能力參與課程，在沒有壓力情況下自在地動身體，釋放當日的煩惱。
                </div>
            </div>

        </div>


        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mt-4">


            <div class="row align-items-center">
                <div class="col-6">

                    <a href="javascript:void(0);" class="album-a  mobile-keep"
                        rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00530.jpg">
                        <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x.png"
                            alt="">
                    </a>
                </div>
                <div class="col-6"> <span class="green middle-size">
                        先「靜」後「動」

                    </span>
                    <br>
                    除了外在的「動」，每堂課導師會先進行暖身延展，啟動身體的能量，其後進入主題活動，探索與認識自己。
                </div>
            </div>

        </div>


        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mt-4">


            <div class="row align-items-center">
                <div class="col-6">

                    <a href="javascript:void(0);" class="album-a  mobile-keep"
                        rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00530.jpg">
                        <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x.png"
                            alt="">
                    </a>
                </div>
                <div class="col-6"> <span class="green middle-size">
                        從個人到群體


                    </span>
                    <br>
                    課程內容中不但有個人自我表達的部分，還有支撐、給予、合作、平衡、形狀等身體練習，需要參加者們互相合作，從中發展更多肢互動的可能性，檢視自己與他人的關係。
                </div>
            </div>

        </div>



        <!-- <div class="col-6 mt-4">
            <table>
                <tr>
                    <td><img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x.png"
                            alt=""></td>
                    <td class="ps-3">

                        <span class="green middle-size">

                            沒有標準框架 <br>
                            創造一套自己的動作

                        </span>
                        <br>
                        在身體律動課裡，每個人都是不一樣的。沒有一定的標準，亦不需要別人的批判或認可，而是去學習發掘內在的經驗。
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-6 mt-4">
            <table>
                <tr>
                    <td><img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-6@2x.png"
                            alt=""></td>
                    <td class="ps-3">

                        <span class="green middle-size">
                            課程具生活化 <br>
                            引發興趣主動參與


                        </span>
                        <br>
                        不需任何舞蹈經驗，我們相信我們天生便懂得律動。導師會引導參加者從生活經驗擷取身體動作元素，透過多樣的視野與方法，讓參加者純粹享受活動身體的樂趣。
                    </td>
                </tr>
            </table>
        </div> -->


    </div>

</div>





<div class="container yellow-bg-div gx-0 mt-120px d-none">

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
                    <td class=" align-bottom"> <img class=""
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-2@2x.png" alt="">

                    </td>
                </tr>
            </table>

        </div>


    </div>

</div>



<!-- <img class="mt-120px fake-video" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/fake-video-2-scaled.jpg"
    alt=""> -->







<div class="mt-120px">
    <iframe width=" 560" height="315" src="https://www.youtube.com/embed/BkI7_dDG35w" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
</div>

<div class="container yellow-bg-div gx-0 mt-120px">


    <div class="row">

        <div class="col-12 text-end">

            <h2 class="orange">參加計劃後的感想</h2>


        </div>
        <div class="col-12 text-center mt-4">


            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">
                    <div class="feeling-div mb-5">


                        <div class="text-start">
                            <img class="quote open"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/open-quote.png" alt="">
                        </div>
                        這是第一次我親身感覺到身體與我的連結，原來身體真的會告訴我們很多事，無論是回憶，或是自我形象。這是一次很好的personal growth...

                        <div class="text-end">
                            <img class="quote close"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/close-quote.png" alt="">
                        </div>
                    </div>

                    <div class="feeling-div mb-5">


                        <div class="text-start">
                            <img class="quote open"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/open-quote.png" alt="">
                        </div>
                        好可惜無上到完整實體課，不過都好開心
                        ，最深刻嘉賓分享自愛同自我接納係一個恆常練習，同埋認識同連結多啲自己身體...
                        <div class="text-end">
                            <img class="quote close"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/close-quote.png" alt="">
                        </div>
                    </div>

                    <div class="feeling-div mb-5 big-text">


                        <div class="text-start">
                            <img class="quote open"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/open-quote.png" alt="">
                        </div>
                        在最後成果表演中，我很享受，也為我們這一班感到自豪...
                        <div class="text-end">
                            <img class="quote close"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/close-quote.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">

                    <div class="feeling-div mb-5 big-text">


                        <div class="text-start">
                            <img class="quote open"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/open-quote.png" alt="">
                        </div>
                        很有意義的活動，促進與不同人的交流...
                        <div class="text-end">
                            <img class="quote close"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/close-quote.png" alt="">
                        </div>
                    </div>

                    <div class="feeling-div mb-5">


                        <div class="text-start">
                            <img class="quote open"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/open-quote.png" alt="">
                        </div>
                        經過身體律動課後，以及其他課程，我感受到身體對舞動的熱情，因而我自己也跟老師學跳舞並與朋友合辦表演。 <br>
                        以往我一直都認為自己的身體過於僵硬，未能做跳舞演出，但原來我也有我可以做到的事，只要我享受這個過程，一定會是一個精彩的演出...
                        <div class="text-end">
                            <img class="quote close"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/close-quote.png" alt="">
                        </div>
                    </div>

                    <div class="feeling-div mb-5">


                        <div class="text-start">
                            <img class="quote open"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/open-quote.png" alt="">
                        </div>
                        很喜歡這個計劃，很有意籤，讓我更了解自己，更重要的是更愛自己。 <br>
                        我從來沒有想像我一直想倡導的理念能在香港推廣... <div class="text-end">
                            <img class="quote close"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/close-quote.png" alt="">
                        </div>
                    </div>




                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">
                    <div class="feeling-div mb-5">


                        <div class="text-start">
                            <img class="quote open"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/open-quote.png" alt="">
                        </div>
                        課堂的空間很接納每一個狀態的我，初時我是比較累，不太投入，動作也是略略做過便算了。但後來看到大家的投入和老師給予的空間，我慢慢開放自己,也很享受每一堂課...
                        <div class="text-end">
                            <img class="quote close"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/close-quote.png" alt="">
                        </div>
                    </div>

                    <div class="feeling-div mb-5 big-text">


                        <div class="text-start">
                            <img class="quote open"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/open-quote.png" alt="">
                        </div>
                        小組的討論讓我察覺到女性的身體常常處於被批評和壓迫的狀態...
                        <div class="text-end">
                            <img class="quote close"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/close-quote.png" alt="">
                        </div>
                    </div>

                    <div class="feeling-div mb-5 ">


                        <div class="text-start">
                            <img class="quote open"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/open-quote.png" alt="">
                        </div>
                        在律動課上，我想起了很多關於家庭對於我作為一個女孩子的要求，以致我很介意自己做甚麼動作，而未能放開身體...

                        <div class="text-end">

                            <img class="quote close"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/close-quote.png" alt="">
                        </div>

                    </div>
                </div>

            </div>

        </div>


    </div>
</div>


</div>



<div class="container yellow-bg-div gx-0 mt-120px">


    <div class="row mobile-reverse-row">

        <div class="col-lg-8 col-md-12 col-sm-12 col-12 ">

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
        <div class="col-lg-4 col-md-12 col-sm-12 col-12  text-end">

            <h2 class="orange">常見問題</h2>

        </div>
    </div>


</div>


<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();