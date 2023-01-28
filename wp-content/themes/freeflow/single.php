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

    <img class="banner-img" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/resource-banner-scaled.jpg"
        alt="">

    <img class="banner-img mobile" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-1@2x-50-4.jpg"
        alt="">






</div>





<div class="container yellow-bg-div gx-0 mt-120px">


    <div class="row">

        <div class="col-12 position-relative">


            <div class="d-inline-block w-90">
                <a href="<?php echo get_site_url();?>/resource" class="blog-tag me-1">All Articles</a>
                <?php

$tags = get_tags(array(
'hide_empty' => false
));
foreach ($tags as $tag) {
?>

                <a href="<?php echo get_site_url();?>/tag/<?php echo $tag->slug; ?>"
                    class="blog-tag me-1">#<?php echo  $tag->name;?></a>
                <?php

}
?>
            </div>


            <a href="javascript:void(0);" class="search-icon-a"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/search-icon.png" alt=""></a>


            <div class="search-ui-div">
                <?php

        
        ?>
                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            </div>

        </div>
    </div>





    <?php

?>





</div>





<div class="container yellow-bg-div gx-0 mt-60px">
    <div class="row">
        <div class="col-12">

            <!-- <img class="resource-detail-img"
                src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/blog-temp-img-1.png" alt=""> -->


            <a href="javascript:void(0);" class="album-a mobile-keep d-block mx-auto"
                rel="<?php echo wp_get_attachment_image_src(get_field('post_enlarged_img'),'full')[0];?>">


                <img class="resource-detail-img"
                    src="<?php echo wp_get_attachment_image_src(get_field('post_main_img'),'full')[0];?>" alt="">

            </a>


            <h2 class="purple big mt-4"> <?php echo get_the_title();?></a>
            </h2>

            <div class="orange"> <?php
        echo get_the_date('d M Y');
        ?></div>

            <div class="mt-3">

                <?php echo get_the_content();?>

            </div>

            <div class="mt-3">

                <?php
            $tags_arr = get_the_tags() ;

            // echo $tags_arr[0]->name;
            for($i=0;$i<count($tags_arr);$i++)
            {
                ?>
                <?php //echo $tags_arr[$i];?>
                <a href="<?php echo get_site_url();?>/tag/<?php echo $tags_arr[$i]->slug; ?>"
                    class="blog-tag me-1">#<?php echo $tags_arr[$i]->name;?></a>
                <?php
            }

            ?>
            </div>


            <div class="blog-line mt-4"></div>



            <div class="row mt-4">


                <div class="col-7"><?php
                echo do_shortcode( '[post-views]');

                ?>
                    views</div>
                <div class="col-5 text-end">

                    <span>

                        <?php

echo do_shortcode( '[posts_like_dislike]');


                    // [posts_like_dislike id=post_id]

                    ?>
                    </span>

                    <!-- <a href="javascript:void(0);" class="d-inline-block">
                        <img class="heart-icon" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/heart.png"
                            alt=""></a> -->

                    <a href="javascript:void(0);" class="d-inline-block three-dots-a ms-2"> <img class="three-dots"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/3dots.png" alt=""></a>
                </div>

            </div>


        </div>

    </div>
</div>




















<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();