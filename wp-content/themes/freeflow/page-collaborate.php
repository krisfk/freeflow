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

    <!-- <img class="banner-img" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/collaborate-banner-scaled.jpg"
        alt="">


    <img class="banner-img mobile" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-1@2x-50-5.jpg"
        alt=""> -->



    <img class="banner-img" src="<?php echo wp_get_attachment_image_src(get_field('top_banner_desktop'),'full')[0];?>"
        alt="">

    <img class="banner-img mobile"
        src="<?php echo wp_get_attachment_image_src(get_field('top_banner_mobile'),'full')[0];?>" alt="">









</div>



<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-lg-5 col-md-12 col-sm-12 col-12 ">


            <table class="float-start w-100">
                <tr>
                    <td class="align-top">
                        <a href="javascript:void(0);" class="album-a"
                            rel="<?php echo wp_get_attachment_image_src(get_field('section_image_enlarge'),'full')[0];?>">
                            <img class="entry-img w-100"
                                src="<?php echo wp_get_attachment_image_src(get_field('section_image'),'full')[0];?>"
                                alt=""></a>
                        <a href="javascript:void(0);" class="m-album-a">
                            <img class="banner-img mobile"
                                src="<?php echo wp_get_attachment_image_src(get_field('section_image_mobile'),'full')[0];?>"
                                alt="">
                        </a>

                        <!-- http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-2@2x-50-1.jpg -->



                    </td>
                    <td class="subtitle-td align-top">

                        <article class="vertical-article ">
                            <h2 class="purple"><?php echo get_field('purple_title');?>
                            </h2>
                        </article>


                    </td>
                </tr>
            </table>

        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">

            <article class=" mobile-entry-title ">
                <h2 class="purple"><?php echo get_field('purple_title');?>

                </h2>
            </article>


            <?php echo get_field('section_content_text_html');?>


        </div>

    </div>

</div>







<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();