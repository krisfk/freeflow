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

get_header();

global $current_language_code;

?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
<header class="page-header alignwide">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
</header><!-- .page-header -->
<?php endif; ?>



<!-- background:url(http://64.227.13.14/freeflow/wp-content/uploads/2023/01/home-banner-2-scaled.jpg);background-size: cover;
    background-position: center center;
    display: block;
    width: 100%;
    height: 860px; -->

<?php




// echo get_custom_logo();
    // flatsome_option('site_logo');
    ?>
<div class="home-banner-div" style="">

    <img class="banner-img" src="<?php echo wp_get_attachment_image_src(get_field('top_banner_desktop'),'full')[0];?>"
        alt="">

    <img class="banner-img mobile"
        src="<?php echo wp_get_attachment_image_src(get_field('top_banner_mobile'),'full')[0];?>" alt="">

    <div class="icons-div">

        <table>
            <tr>
                <td>

                    <?php
echo $current_language_code=='zh-hant' ? '主辦機構' : 'Organized by';


?>

                </td>
            </tr>
            <tr>
                <td>

                    <?php
                $general_config_id =  $current_language_code=='zh-hant' ? 323:810;
                ?>

                    <?php if( have_rows('partnership_logos_group_1',$general_config_id )): ?>
                    <?php while( have_rows('partnership_logos_group_1',$general_config_id) ): the_row();                      ?>

                    <a href="<?php echo get_sub_field('link_url');?>" target="_blank"><img class="top-icon-img"
                            src="<?php echo wp_get_attachment_image_src(get_sub_field('partnership_logo'),'full')[0];?>"
                            alt=""></a>


                    <?php endwhile; ?>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>

                    <?php
echo $current_language_code=='zh-hant' ? '捐助機構' : 'Funded by';


?>

                </td>
            </tr>
            <tr>
                <td>


                    <?php //echo get_id_by_slug( 'general-config' );?>
                    <?php if( have_rows('partnership_logos_group_2',$general_config_id )): ?>
                    <?php while( have_rows('partnership_logos_group_2',$general_config_id) ): the_row();                      ?>

                    <a href="<?php echo get_sub_field('link_url');?>" target="_blank"><img class="top-icon-img"
                            src="<?php echo wp_get_attachment_image_src(get_sub_field('partnership_logo'),'full')[0];?>"
                            alt=""></a>


                    <?php endwhile; ?>
                    <?php endif; ?>
                </td>
            </tr>
        </table>


    </div>

    <a href="<?php echo get_site_url();?>" class="freeflow-logo-a"><img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
?>" alt=""></a>
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
        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">

            <div class="home-entry-title mb-4">

                <div class="row">

                    <div class="col-lg-11 col-md-11 col-sm-9  col-9">

                        <?php echo get_sub_field('subtitle');?>

                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-3 col-3">

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

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">





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

                    <td class="subtitle-td align-bottom float-start">


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



<div class="mt-120px">

    <iframe width="560" height="315"
        src="https://www.youtube.com/embed/<?php echo get_field('youtube_video_code');?>?rel=0"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
</div>

<div class="container yellow-bg-div gx-0 mt-120px">


    <div class="row mobile-reverse-row">

        <div class="col-lg-8 col-md-12 col-sm-12 col-12">

            <?php echo get_field('bottom_content_block_html');?>



        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12  text-end">

            <h2 class="orange"><?php echo get_field('bottom_content_block_title');?></h2>

        </div>
    </div>


</div>


<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mb-4 position-relative">

            <?php                 $home_url = apply_filters( 'wpml_home_url', get_option( 'home' ) );
?>
            <a href="<?php echo $home_url;?>/freeflow-news" class="our-activity-btn">


                <table class="w-100 h-100">
                    <tr>
                        <td class="align-center">
                            <h2>
                                <?php echo get_field('bottom_album_arrow_txt_1');?></h2>
                            <div class="big-white-arrow-div mt-lg-4 mt-md-0 sm-lg-0 mt-0 ">
                                <?php echo get_field('bottom_album_arrow_txt_2');?>
                            </div>
                        </td>
                    </tr>
                </table>

            </a>


        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-4">

            <div class="row">


                <div class="col-6"> <a href="javascript:void(0);" class="album-a mobile-keep"
                        rel="<?php echo wp_get_attachment_image_src(get_field('bottom_album_photo_1_enlarge'),'full')[0];?>"><img
                            class="w-100"
                            src="<?php echo wp_get_attachment_image_src(get_field('bottom_album_photo_1'),'full')[0];?>"
                            alt=""></a>
                </div>
                <div class="col-6"> <a href="javascript:void(0);" class="album-a mobile-keep"
                        rel="<?php echo wp_get_attachment_image_src(get_field('bottom_album_photo_2_enlarge'),'full')[0];?>"><img
                            class="w-100"
                            src="<?php echo wp_get_attachment_image_src(get_field('bottom_album_photo_2'),'full')[0];?>"
                            alt=""></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-4">


            <div class="row">

                <div class="col-6"> <a href="javascript:void(0);" class="album-a  mobile-keep"
                        rel="<?php echo wp_get_attachment_image_src(get_field('bottom_album_photo_3_enlarge'),'full')[0];?>"><img
                            class="w-100"
                            src="<?php echo wp_get_attachment_image_src(get_field('bottom_album_photo_3'),'full')[0];?>"
                            alt=""></a>
                </div>
                <div class="col-6"> <a href="javascript:void(0);" class="album-a  mobile-keep"
                        rel="<?php echo wp_get_attachment_image_src(get_field('bottom_album_photo_4_enlarge'),'full')[0];?>"><img
                            class="w-100"
                            src="<?php echo wp_get_attachment_image_src(get_field('bottom_album_photo_4'),'full')[0];?>"
                            alt=""></a>
                </div>
            </div>


        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-4">

            <a href="javascript:void(0);" class="album-a d-block  mobile-keep"
                rel="<?php echo wp_get_attachment_image_src(get_field('bottom_album_photo_5_enlarge'),'full')[0];?>"><img
                    class="w-100"
                    src="<?php echo wp_get_attachment_image_src(get_field('bottom_album_photo_5'),'full')[0];?>"
                    alt=""></a>
        </div>

    </div>
</div>

<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();