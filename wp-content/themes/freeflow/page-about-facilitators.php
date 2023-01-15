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




    <img class="banner-img" style=" "
        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/facilitators-banner-scaled.jpg" alt="">



</div>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div>
        <h2 class="purple">認識我們的 <br>
            律動導師</h2>
    </div>

    <div class="row align-items-center mt-5 gx-5">
        <div class="col-6">



            <a href="javascript:void(0);" class="album-a"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC00530.jpg">

                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-7@2x.png" alt="">

            </a>
        </div>
        <div class="col-6">

            <h2 class="orange">何蕤渟 (河馬老師)</h2>


            現為自由身教育藝術家。 <br>
            畢業於香港大學教育碩士及香港演藝學院藝術學士學位(現代舞及舞蹈教學)。<br>
            現任教於香港中文大學、香港演藝學院及香港都會大學，並為稻田故事工作室、稻田身體劇場藝術總監。<br>
            其人生工作是相信藝術教育，能使人成為人。<br>
            其人生使命是用心將舞蹈律動與人連結，打開每個人的一扇窗。<br>


        </div>
    </div>
    <div class="row align-items-center mt-5 gx-5">
        <div class="col-6">

            <h2 class="orange">梁德望</h2>




            梁德望成為全職舞蹈導師13年多，第一次讓她感受到甚麼是活在當下的就是跳舞。跳舞及音樂讓她的人生有很大的改變，啟發了她對於生命的意義，學會如何愛上自己的全部。<br>
            梁德望相信生命感染生命， 感恩能用自身分享，希望大家能夠自在地活在當下 !

        </div>
        <div class="col-6">


            <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-8@2x.png" alt="">
        </div>

    </div>


    <div class="row align-items-center mt-5 gx-5">
        <div class="col-6">


            <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-9@2x.png" alt="">
        </div>
        <div class="col-6">


            <h2 class="orange">

                李籽諾
            </h2>
            李籽諾是一位兼職舞蹈工作者。她認為忙碌的生活裡總是讓大家忘記如何去愛或面對自己。透過簡單、輕鬆的律動堂，希望能和大家一起重新檢視、擁抱自己的不同情緒。透過觀察自己的身體，更享受生活的每一個步伐。

        </div>


    </div>



    <div class="row align-items-center mt-5 gx-5">

        <div class="col-6">





            <h2 class="orange">
                黃寶娜
            </h2>

            黃寶娜是一位香港舞蹈創作者、表演者以及教育工作者。2019 年畢業於中國文化大學藝術學院舞蹈系(台北市)，主修現代舞。
            寶娜期望用舞蹈的方式不斷發掘自己與身體的關係。



        </div>


        <div class="col-6">


            <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-11@2x.png" alt="">
        </div>




    </div>


    <div class="row align-items-center mt-5 gx-5">
        <div class="col-6">
            <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-12@2x.png" alt="">
        </div>
        <div class="col-6">
            <h2 class="orange">

                丘思詠
            </h2>
            自由身舞蹈工作者。從紐約習舞回港後，投入於舞蹈教育及書寫工作。為多所學校及團體組織進行舞蹈教育活動，把舞蹈的知識及快樂帶給不同層面的朋友。合作的團體包括東華三院、香港青年協會、香港教育大學，及康樂及文化事務署等。
        </div>
    </div>



    <div class="row align-items-center mt-5 gx-5">
        <div class="col-6">


            <h2 class="orange">
                江瑩
            </h2>
            江瑩自四歲開始習舞，於廣東舞蹈學校完成現代舞大專班，後赴香港演藝學院修讀現代舞。2016年至2021年期間為東華三院「敢動！」計劃的全職身體律動老師。近年為自由舞者，教授身體律動和中國舞。

        </div>

        <div class="col-6">
            <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-13@2x.png" alt="">
        </div>


    </div>


    <div class="row align-items-center mt-5 gx-5">



        <div class="col-6">
            <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-13@2x.png" alt="">
        </div>
        <div class="col-6">




            <h2 class="orange">
                徐茵祈
            </h2>
            徐茵祈於香港演藝學院取得（榮譽）學士學位，主修現代舞、舞蹈教育及編舞課程。畢業後曾與多間學校及團體合作。2010至2022年間為東華三院與台灣雲門舞蹈教室協辦之「敢動！」計劃擔任輔導老師，。

        </div>




    </div>


    <div class="row align-items-center mt-5 gx-5">


        <div class="col-6">



            <h2 class="orange">
                嚴單鳳
            </h2>
            現為自由身舞蹈工作者，畢業於台灣中國文化大學舞蹈系，主修現代舞。畢業後任教中小學舞蹈班，致力於兒童及青少年專業舞蹈的培育，同時亦與多個舞團及不同編舞家合作演出。2011年7月加入東華三院「敢動！」計劃。她希望藉著舞蹈，繼續身體的旅程，並將動身體的快樂，和不同的年齡層、不同的族群分享！

        </div>



        <div class="col-6">
            <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-13@2x.png" alt="">
        </div>




    </div>








</div>








<!-- 
<img class="mt-120px fake-video" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/fake-video-2-scaled.jpg"
    alt=""> -->


<!-- <div class="mt-120px">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/BkI7_dDG35w" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
</div> -->

<!-- <div class="container yellow-bg-div gx-0 mt-120px">


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


</div> -->



<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();