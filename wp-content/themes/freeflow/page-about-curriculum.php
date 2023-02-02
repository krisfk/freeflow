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


    <img class="banner-img" src="<?php echo wp_get_attachment_image_src(get_field('top_banner_desktop'),'full')[0];?>"
        alt="">

    <img class="banner-img mobile"
        src="<?php echo wp_get_attachment_image_src(get_field('top_banner_mobile'),'full')[0];?>" alt="">

</div>

<?php if( have_rows('content_blocks') ): ?>

<?php 

$idx=0;
while( have_rows('content_blocks') ): the_row(); 
       if($idx%2==0)
       {
        ?>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-lg-5 col-md-12 col-sm-12 col-12">


            <table class="float-start w-100 position-relative">
                <tr>
                    <td>
                        <a href="javascript:void(0);" class="album-a"
                            rel="<?php echo wp_get_attachment_image_src(get_sub_field('image_enlarge'),'full')[0];?>">
                            <img class="entry-img row-img-min-400"
                                src="<?php echo wp_get_attachment_image_src(get_sub_field('image_desktop'),'full')[0];?>"
                                alt="">
                        </a>

                        <a href="javascript:void(0);" class="m-album-a"
                            rel="<?php echo wp_get_attachment_image_src(get_sub_field('image_enlarge'),'full')[0];?>">
                            <img class="entry-img row-img-min-400"
                                src="<?php echo wp_get_attachment_image_src(get_sub_field('image_mobile'),'full')[0];?>"
                                alt="">
                        </a>


                    </td>
                    <td class="subtitle-td align-bottom">

                        <article class="vertical-article ">
                            <h2 class="purple"><?php echo get_sub_field('big_title');?>
                            </h2>
                        </article>


                    </td>
                </tr>
            </table>

        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 col-12 position-relative ">

            <div class="home-entry-title">

                <div class="row">

                    <div class="col-8">

                        <?php echo get_sub_field('subtitle');?>

                    </div>
                    <div class="col-4">

                        <article class="vertical-article mobile-home-entry-title ">
                            <h2 class="purple"> <?php echo get_sub_field('big_title');?>

                            </h2>
                        </article>
                    </div>

                </div>

            </div>

            <?php
            echo get_sub_field('html_content');
            ?>


        </div>

    </div>

</div>

<?php
       }
       else
       {
?>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row mobile-reverse-row">

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 position-relative ">





            <div class="home-entry-title">

                <div class="row">
                    <div class="col-8"> <?php echo get_sub_field('subtitle');?></div>
                    <div class="col-4">

                        <article class="vertical-article mobile-home-entry-title ">
                            <h2 class="purple"><?php echo get_sub_field('big_title');?>
                            </h2>
                        </article>
                    </div>
                </div>


            </div>
            <?php
         echo get_sub_field('html_content');
         ?>

        </div>

        <div class="col-lg-5 col-md-12 col-sm-12 col-12 ">


            <table class="float-end">
                <tr>

                    <td class="subtitle-td align-bottom">


                        <article class="vertical-article ">
                            <h2 class="purple"><?php
                                     echo get_sub_field('big_title');

                            ?>
                            </h2>
                        </article>

                    </td>
                    <td>
                        <a href="javascript:void(0);" class="album-a"
                            rel="<?php echo wp_get_attachment_image_src(get_sub_field('image_enlarge'),'full')[0];?>">
                            <img class="entry-img row-img-min-400"
                                src="<?php echo wp_get_attachment_image_src(get_sub_field('image_desktop'),'full')[0];?>"
                                alt="">
                        </a>

                        <a href="javascript:void(0);" class="m-album-a"
                            rel="<?php echo wp_get_attachment_image_src(get_sub_field('image_enlarge'),'full')[0];?>">
                            <img class="entry-img row-img-min-400"
                                src="<?php echo wp_get_attachment_image_src(get_sub_field('image_mobile'),'full')[0];?>"
                                alt="">
                        </a>



                    </td>
                </tr>
            </table>

        </div>


    </div>

</div>
<?php
       }
       ?>


<?php 
$idx++;

endwhile; ?>
<?php endif; ?>








<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-12 position-relative">


            <h2 class="purple"><?php echo get_field('steps_title');?></h2>

            <div class="position-relative w-100 mt-4">

                <table class="w-100 step-by-step-div">
                    <tr>
                        <td class="">
                            <div class="green-bubble"><?php echo get_field('step_1_name');?></div>
                        </td>
                        <td class="pt-0 pe-2 ps-2">

                            <div> <img class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </td>
                        <td class="">
                            <div class="green-bubble"><?php echo get_field('step_2_name');?></div>
                        </td>
                        <td class="pt-0 pe-2 ps-2">
                            <div> <img class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </td>
                        <td>
                            <div class="green-bubble"><?php echo get_field('step_3_name');?></div>
                        </td>
                        <td class="pt-0 pe-2 ps-2">
                            <div> <img class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </td>
                        <td class="">
                            <div class="green-bubble"><?php echo get_field('step_4_name');?></div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="pe-2 ps-2 text-center">
                            <div class="d-inline-block " style="transform:rotate(90deg);    position: relative;"> <img
                                    class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="">
                            <a href="javascript:void(0);" class="orange-bubble-know-more">.</a>
                        </td>
                        <td class="pt-0 pe-2 ps-2">

                            <div style="transform:rotate(180deg);"> <img class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </td>
                        <td class="">
                            <div class="green-bubble"><?php echo get_field('step_7_name');?></div>
                        </td>
                        <td class="pt-0 pe-2 ps-2">
                            <div style="transform:rotate(180deg);"> <img class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </td>
                        <td>
                            <div class="green-bubble"><?php echo get_field('step_6_name');?>

                            </div>
                        </td>
                        <td class="pt-0 pe-2 ps-2">
                            <div style="transform:rotate(180deg);"> <img class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </td>
                        <td class="">
                            <div class="green-bubble"><?php echo get_field('step_5_name');?></div>
                        </td>
                    </tr>
                </table>



                <div class="step-by-step-div mobile">

                    <div class="row">

                        <div class="col-5">
                            <div class="green-bubble"><?php echo get_field('step_1_name');?></div>
                        </div>

                        <div class="col-2">

                        </div>
                        <div class="col-5">

                            <a href="javascript:void(0);" class="orange-bubble-know-more">.</a>


                        </div>
                    </div>


                    <div class="row">

                        <div class="col-5 text-center">
                            <div class="d-inline-block " style="transform:rotate(90deg);    position: relative;"> <img
                                    class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </div>

                        <div class="col-2">

                        </div>
                        <div class="col-5 text-center">
                            <div class="d-inline-block " style="transform:rotate(270deg);    position: relative;"> <img
                                    class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-5">
                            <div class="green-bubble"><?php echo get_field('step_2_name');?></div>
                        </div>

                        <div class="col-2">

                        </div>
                        <div class="col-5">
                            <div class="green-bubble"><?php echo get_field('step_7_name');?></div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-5 text-center">
                            <div class="d-inline-block " style="transform:rotate(90deg);    position: relative;"> <img
                                    class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </div>

                        <div class="col-2">

                        </div>
                        <div class="col-5 text-center">
                            <div class="d-inline-block " style="transform:rotate(270deg);    position: relative;"> <img
                                    class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-5">
                            <div class="green-bubble"><?php echo get_field('step_3_name');?></div>
                        </div>

                        <div class="col-2">

                        </div>
                        <div class="col-5">
                            <div class="green-bubble"><?php echo get_field('step_5_name');?></div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-5 text-center">
                            <div class="d-inline-block " style="transform:rotate(90deg);    position: relative;"> <img
                                    class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </div>

                        <div class="col-2">

                        </div>
                        <div class="col-5 text-center">
                            <div class="d-inline-block " style="transform:rotate(270deg);    position: relative;"> <img
                                    class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-5">
                            <div class="green-bubble"><?php echo get_field('step_4_name');?></div>
                        </div>

                        <div class="col-2 text-center">
                            <div class="d-inline-block " style="    position: relative;
    top: 13px;"> <img class="step-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/orange-arrow.png"
                                    alt=""></div>

                        </div>
                        <div class="col-5">
                            <div class="green-bubble"><?php echo get_field('step_5_name');?></div>

                        </div>
                    </div>



                </div>
                <!-- <img class="w-100 rounded-0"
                    src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-3@2x.png" alt=""> -->

                <!-- <div class="step-btn-div"></div> -->


            </div>


        </div>



    </div>

</div>


<div class="container yellow-bg-div gx-0 mt-120px feature-container">

    <div class="row">

        <div class="col-12 position-relative">
            <h2 class="purple"><?php echo get_field('feature_title');?></h2>
        </div>


        <?php


// Check rows existexists.
if( have_rows('feature_contents') ):

    // Loop through rows.
    while( have_rows('feature_contents') ) : the_row();

    ?>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mt-4">


            <div class="row align-items-center">
                <div class="col-6">

                    <a href="javascript:void(0);" class="album-a mobile-keep"
                        rel="<?php echo wp_get_attachment_image_src(get_sub_field('feature_image_enlarge'),'full')[0];?>">
                        <img class="w-100"
                            src="<?php echo wp_get_attachment_image_src(get_sub_field('feature image'),'full')[0];?>"
                            alt="">
                    </a>
                </div>
                <div class="col-6"> <span class="green middle-size">
                        <?php echo get_sub_field('feature_green_title');?></span>
                    <br>

                    <?php
                    echo get_sub_field('feature_content');
                    ?>
                </div>
            </div>

        </div>

        <?php
    endwhile;

else :
endif;

?>





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


                    <?php
                
if( have_rows('column_1_feelings') ):
    while( have_rows('column_1_feelings') ) : the_row();

    ?>

                    <div class="feeling-div mb-5 <?php echo get_sub_field('font_size')=='big' ? 'big-text':'';?>">


                        <div class="text-start">
                            <img class="quote open"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/open-quote.png" alt="">
                        </div>

                        <?php
                        echo get_sub_field('feeling_content');
                        ?>
                        <div class="text-end">
                            <img class="quote close"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/close-quote.png" alt="">
                        </div>
                    </div>

                    <?php
    endwhile;

else :
endif;

                ?>





                    <!-- <div class="feeling-div mb-5">


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
                    </div> -->
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


<div class="container yellow-bg-div gx-0 mt-120px">


    <div class="row mobile-reverse-row">

        <div class="col-lg-8 col-md-12 col-sm-12 col-12 ">


            <?php
        
        echo get_field('bottom_content_block_html');
        ?>
            <!-- <div class="home-entry-title">
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
 -->













        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12  text-end">

            <h2 class="orange"><?php echo get_field('bottom_content_block_title');?></h2>

        </div>
    </div>


</div>


<!-- </div> -->




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();