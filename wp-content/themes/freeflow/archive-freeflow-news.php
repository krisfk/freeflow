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


<?php

// $query_args = array(
// 	// 'post_type' => 'freeflow-news',
// 	'order' => 'DESC'
// );

// The Query
// $the_query = new WP_Query( $query_args );

// The Loop

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

        ?>

<div class="container yellow-bg-div gx-0 mt-120px">



    <div class="row align-items-center mt-0 gx-5">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">

            <!-- Activity Headline Image -->

            <a href="javascript:void(0);" class="album-a mobile-keep mb-lg-0 mb-md-4 mb-sm-4 mb-4"
                rel="<?php echo wp_get_attachment_image_src(get_field('activity_headline_image_enlarge'),'full')[0];?>">
                <img class="w-100"
                    src="<?php echo wp_get_attachment_image_src(get_field('activity_headline_image'),'full')[0];?>"
                    alt="">
            </a>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-end">


            <a href="<?php echo get_the_permalink();?>" class="news-a">
                <h2 class="orange"><?php echo get_field('activity_name');?>
                </h2>


                <div class="mt-4">
                    <?php
            echo get_field('activity_detail');
            ?>

                </div>

            </a>

        </div>
    </div>

</div>


<?php
        // echo 1;
	}

	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}

?>

















<!-- </div> -->











<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();