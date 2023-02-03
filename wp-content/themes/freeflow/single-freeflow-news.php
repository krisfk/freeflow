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

    <!-- <img class="banner-img" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/news-banner-1-scaled.jpg"
        alt="">



    <img class="banner-img mobile" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-2@2x-50.jpg"
        alt=""> -->


    <img class="banner-img"
        src="<?php echo wp_get_attachment_image_src(get_field('activity_top_banner_desktop'),'full')[0];?>" alt="">

    <img class="banner-img mobile"
        src="<?php echo wp_get_attachment_image_src(get_field('activity_top_banner_mobile'),'full')[0];?>" alt="">










</div>

<?php

if(get_field('select_layout') =='layout 1')
{
    

// Check rows existexists.
if( have_rows('layout1_content_blocks') ):

    // Loop through rows.
    while( have_rows('layout1_content_blocks') ) : the_row();

    ?>

<div class="container yellow-bg-div gx-0 mt-120px">


    <h2 class="purple"><?php echo get_sub_field('block_title');?></h2>

    <div class="mt-4"><?php echo get_sub_field('block_content');?>
    </div>

    <table class="news-tpl-1-img-table mt-4 w-100">
        <tr>
            <td>
                <a href="javascript:void(0);" class="album-a me-4"
                    rel="<?php echo wp_get_attachment_image_src(get_sub_field('block_image_1_enlarge'),'full')[0];?>">
                    <img src="<?php echo wp_get_attachment_image_src(get_sub_field('block_image_1_desktop'),'full')[0];?>"
                        alt=""></a>
                <a href="javascript:void(0);" class="album-a"
                    rel="<?php echo wp_get_attachment_image_src(get_sub_field('block_image_1_enlarge'),'full')[0];?>"><img
                        src="<?php echo wp_get_attachment_image_src(get_sub_field('block_image_2_desktop'),'full')[0];?>"
                        alt=""></a>
            </td>
        </tr>
    </table>

    <div class="row news-tpl-1-img-table mobile mt-4 gx-lg-0 gx-md-3 gx-sm-3 gx-3 ">

        <div class="col-6">

            <a href="javascript:void(0);" class="m-album-a">
                <img class="w-100"
                    src="<?php echo wp_get_attachment_image_src(get_sub_field('block_image_1_mobile'),'full')[0];?>"
                    alt=""></a>

        </div>
        <div class="col-6">

            <a href="javascript:void(0);" class="m-album-a">
                <img class="w-100"
                    src="<?php echo wp_get_attachment_image_src(get_sub_field('block_image_2_mobile'),'full')[0];?>"
                    alt=""></a>
        </div>
    </div>



</div>

<?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

// layout1 content blocks
}
else
{

    ?>


<div class="container yellow-bg-div gx-0 mt-120px">


    <h2 class="purple"><?php echo get_field('layout2_content_block_1_title');?></h2>


    <div class="row mt-4 mobile-reverse-row">

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">

            <?php echo get_field('layout2_content_block_1_text');?>

        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-12  text-end">

            <a href="javascript:void(0);" class="album-a"
                rel="<?php echo wp_get_attachment_image_src(get_field('layout2_content_block_1_image_enlarge'),'full')[0];?>">
                <img class="d-inline-block row-img-min-400" style=""
                    src="<?php echo wp_get_attachment_image_src(get_field('layout2_content_block_1_image_desktop'),'full')[0];?>"
                    alt=""></a>


            <a href="javascript:void(0);" class="m-album-a">
                <img class="row-img-min-400"
                    src="<?php echo wp_get_attachment_image_src(get_field('layout2_content_block_1_image_mobile'),'full')[0];?>"
                    alt="">

            </a>



        </div>

    </div>


</div>




<?php

// Check rows existexists.
if( have_rows('layout2_content_blocks') ):

    // Loop through rows.
    while( have_rows('layout2_content_blocks') ) : the_row();

    ?>

<div class="container yellow-bg-div gx-0 mt-60px">

    <div class="row mt-4 mobile-reverse-row">

        <div class="col-lg-9 col-md-12 col-sm-12 col-12 ">

            <div class="album-a-div">
                <div>

                    <a href="javascript:void(0);" class="album-a me-3 mb-3"
                        rel="<?php echo wp_get_attachment_image_src(get_sub_field('image1_enlarge'),'full')[0];?>">
                        <img class="height-280px d-inline-block"
                            src="<?php echo wp_get_attachment_image_src(get_sub_field('image1_desktop'),'full')[0];?>"
                            alt="">
                    </a>
                    <a href="javascript:void(0);" class="album-a  mb-3"
                        rel="<?php echo wp_get_attachment_image_src(get_sub_field('image2_enlarge'),'full')[0];?>">

                        <img class="height-280px d-inline-block"
                            src="<?php echo wp_get_attachment_image_src(get_sub_field('image2_desktop'),'full')[0];?>"
                            alt=""> </a>

                </div>

                <div>
                    <a href="javascript:void(0);" class="album-a me-3"
                        rel="<?php echo wp_get_attachment_image_src(get_sub_field('image3_enlarge'),'full')[0];?>">

                        <img class=" height-280px d-inline-block"
                            src="<?php echo wp_get_attachment_image_src(get_sub_field('image3_desktop'),'full')[0];?>"
                            alt="">
                    </a>

                    <a href="javascript:void(0);" class="album-a"
                        rel="<?php echo wp_get_attachment_image_src(get_sub_field('image4_enlarge'),'full')[0];?>">

                        <img class="height-280px d-inline-block"
                            src="<?php echo wp_get_attachment_image_src(get_sub_field('image4_desktop'),'full')[0];?>"
                            alt="">
                    </a>

                </div>

            </div>

            <div class="album-a-div mobile mt-4">

                <div class="row gx-lg-0 gx-md-3 gx-sm-3 gx-3">

                    <div class="col-6"> <a href="javascript:void(0);" class="m-album-a  mb-3">

                            <img class=" d-inline-block w-100"
                                src="<?php echo wp_get_attachment_image_src(get_sub_field('image1_mobile'),'full')[0];?>"
                                alt="">
                        </a>
                    </div>
                    <div class="col-6"> <a href="javascript:void(0);" class="m-album-a  mb-3">

                            <img class=" d-inline-block w-100"
                                src="<?php echo wp_get_attachment_image_src(get_sub_field('image2_mobile'),'full')[0];?>"
                                alt="">
                        </a>
                    </div>

                    <div class="col-6"> <a href="javascript:void(0);" class="m-album-a  mb-3">

                            <img class=" d-inline-block w-100"
                                src="<?php echo wp_get_attachment_image_src(get_sub_field('image3_mobile'),'full')[0];?>"
                                alt="">
                        </a>
                    </div>
                    <div class="col-6"> <a href="javascript:void(0);" class="m-album-a  mb-3">

                            <img class=" d-inline-block w-100"
                                src="<?php echo wp_get_attachment_image_src(get_sub_field('image4_mobile'),'full')[0];?>"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 col-12   text-end">

            <h2 class="purple"><?php echo get_sub_field('purple_title');?></h2>

            <div>

                <?php echo get_sub_field('text_content');?>

            </div>

        </div>

    </div>

    <article class="mobile-horizontal vertical-article position-absolute bottom-0 end-0 me-4 mb-4">
        <h2 class="orange"> <?php echo get_sub_field('orange_title');?>

        </h2>
    </article>


</div>




<?php
    endwhile;

// No value.
else :
    // Do something...
endif;

?>


<?php


}
?>

<!-- 


<div class="container yellow-bg-div gx-0 mt-60px">


    <h2 class="purple">香水製作工作坊</h2>

    <div class="mt-4">可調製屬於自己的香水, 找尋自己的味道
    </div>

    <table class="news-tpl-1-img-table mt-4 w-100">
        <tr>
            <td><a href="javascript:void(0);" class="album-a me-4"
                    rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.54.52-PM.jpg"><img
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-9@2x-1.png" alt=""></a>
                <a href="javascript:void(0);" class="album-a"
                    rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.54.52-PM.jpg"><img
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-10@2x.png" alt=""></a>
            </td>

        </tr>
    </table>

    <div class="row news-tpl-1-img-table mobile mt-4 gx-lg-0 gx-md-3 gx-sm-3 gx-3 ">

        <div class="col-6">

            <a href="javascript:void(0);" class="m-album-a"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.54.52-PM.jpg">
                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-10@2x.png"
                    alt=""></a>

        </div>
        <div class="col-6">

            <a href="javascript:void(0);" class="m-album-a "
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.54.52-PM.jpg">
                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-10@2x.png"
                    alt=""></a>
        </div>
    </div>


</div>



<div class="container yellow-bg-div gx-0 mt-60px">


    <h2 class="purple">Love Tee Styling with Adele Leung</h2>

    <div class="mt-4">由形象顧問&造型師Adele指導，學習如何從穿搭方面找到自己的獨特性
    </div>

    <table class="news-tpl-1-img-table mt-4 w-100">
        <tr>
            <td><a href="javascript:void(0);" class="album-a me-4"
                    rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.55.03-PM.jpg"><img
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-11@2x-1.png" alt=""></a>

                <a href="javascript:void(0);" class="album-a"
                    rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.55.03-PM.jpg"><img
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-12@2x-1.png" alt=""></a>
            </td>

        </tr>
    </table>


    <div class="row news-tpl-1-img-table mobile mt-4 gx-lg-0 gx-md-3 gx-sm-3 gx-3 ">

        <div class="col-6">

            <a href="javascript:void(0);" class="m-album-a"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.55.03-PM.jpg">
                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-11@2x-1.png"
                    alt=""></a>

        </div>
        <div class="col-6">

            <a href="javascript:void(0);" class="m-album-a "
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.55.03-PM.jpg">
                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-11@2x-1.png"
                    alt=""></a>
        </div>
    </div>


</div>




<div class="container yellow-bg-div gx-0 mt-60px">


    <h2 class="purple">身體藝術工作坊 x 3間NGOs</h2>

    <div class="mt-4">盆景 / 身體造型蠟燭 / 酒精墨水畫 / 新式書法
    </div>

    <table class="news-tpl-1-img-table mt-4 w-100">
        <tr>
            <td><a href="javascript:void(0);" class="album-a me-4"
                    rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.55.39-PM.jpg"><img
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-13@2x-1.png" alt=""></a>
                <a href="javascript:void(0);" class="album-a"
                    rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.55.39-PM.jpg"><img
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-14@2x.png" alt=""></a>

            </td>
        </tr>
    </table>
    <div class="row news-tpl-1-img-table mobile mt-4 gx-lg-0 gx-md-3 gx-sm-3 gx-3 ">

        <div class="col-6">

            <a href="javascript:void(0);" class="m-album-a"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.55.39-PM.jpg">
                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-14@2x.png"
                    alt=""></a>

        </div>
        <div class="col-6">

            <a href="javascript:void(0);" class="m-album-a"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-04-at-4.55.39-PM.jpg">
                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-14@2x.png"
                    alt=""></a>
        </div>
    </div>

</div>

 -->





<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();