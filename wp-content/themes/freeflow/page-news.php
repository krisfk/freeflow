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
        src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>" alt=""></a>
<div class="banner-div" style="">


    <img class="banner-img" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/news-banner-scaled.jpg" alt="">

    <img class="banner-img mobile" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-1@2x-50-2.jpg"
        alt="">




</div>

<div class="container yellow-bg-div gx-0 mt-120px">



    <div class="row align-items-center mt-0 gx-5">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">


            <a href="javascript:void(0);" class="album-a mobile-keep mb-lg-0 mb-md-4 mb-sm-4 mb-4"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Art-Camp-Poster.jpg">
                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-4@2x.png" alt="">
            </a>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-end">


            <a href="<?php echo get_site_url();?>/news-1" class="news-a">
                <h2 class="orange">身體我自在
                </h2>


                <div class="mt-4">
                    活動日期: <br>
                    2022年7月10日<br>
                    時間:<br>
                    11:00-18:00<br>
                    地點:<br>
                    鰂魚涌WLAB</div>

            </a>

        </div>
    </div>

</div>


<div class="container yellow-bg-div gx-0 mt-60px">

    <div class="row align-items-center mt-0 gx-5">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">

            <a href="javascript:void(0);" class="album-a mobile-keep  mb-lg-0 mb-md-4 mb-sm-4 mb-4"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Annual-Poster.jpg">


                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-5@2x-1.png"
                    alt="">
            </a>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-end">



            <a href="<?php echo get_site_url();?>/news-2" class="news-a">

                <h2 class="orange">
                    我動故我在 <br>
                    I Move<br>
                    Therefore I Am

                </h2>

                <div class="mt-4">
                    展覽日期: <br>
                    2022年9月3－4日<br>
                    展覽時間:<br>
                    12:00－19:30 (六), 12:00－18:00 (日)<br>
                    地點:<br>
                    JCCAC賽馬會創意藝術中心L1藝廊
                </div>

            </a>

        </div>
    </div>


</div>














<!-- </div> -->











<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();