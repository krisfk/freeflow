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

<div class="banner-div">





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



        <div
            class="col-lg-<?php echo get_sub_field('column_proportion') == '5 7' ? '5':'6'; ?> col-md-12 col-sm-12 col-12">
            <?php //echo  get_sub_field('column_proportion');?>

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
        <div
            class="col-lg-<?php echo get_sub_field('column_proportion') == '5 7' ? '7':'6'; ?> col-md-12 col-sm-12 col-12 ">

            <div class="home-entry-title">

                <div class="row">

                    <!-- <div class="col-8">

                        <?php echo get_sub_field('subtitle');?>

                    </div> -->
                    <div class="col-12">

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

        <div
            class="col-lg-<?php echo get_sub_field('column_proportion') == '5 7' ? '7':'6'; ?> col-md-12 col-sm-12 col-12 ">





            <div class="home-entry-title">

                <div class="row">
                    <!-- <div class="col-8"> <?php echo get_sub_field('subtitle');?></div> -->
                    <div class="col-12">

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

        <div
            class="col-lg-<?php echo get_sub_field('column_proportion') == '5 7' ? '5':'6'; ?> col-md-12 col-sm-12 col-12 ">


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
// 
$idx++;

endwhile; ?>
<?php endif; ?>




<!-- <img class="mt-120px fake-video" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/fake-video-2-scaled.jpg"
    alt=""> -->


<div class="mt-120px">
    <iframe width=" 560" height="315" src="https://www.youtube.com/embed/<?php echo get_field('youtube_video_code');?>"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
</div>



<div class="container yellow-bg-div gx-0 mt-120px">


    <div class="row mobile-reverse-row">

        <div class="col-lg-8 col-md-12 col-sm-12 col-12 ">

            <?php echo get_field('bottom_content_block_html');?>





        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12  text-end">

            <h2 class="orange mb-4">

                <?php echo get_field('bottom_content_block_title');?>
            </h2>

        </div>
    </div>


</div>



<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();