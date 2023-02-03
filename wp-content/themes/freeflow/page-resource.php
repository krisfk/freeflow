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

<div class="container  gx-0 mt-120px  yellow-bg-div ">



    <div class="row mt-4 mobile-reverse-row">

        <div class="col-lg-6 col-md-12 col-sm-12 col-12  position-relative  mt-0">





            <article class="vertical-article float-start me-4">
                <h2 class="orange"><?php echo get_field('block_1_title');?>
                </h2>
            </article>

            <div>

                <?php echo get_field('block_1_text_content');?>

            </div>









        </div>

        <!-- block 1 image enlarge -->


        <div class="col-lg-6 col-md-12 col-sm-12 col-12  position-relative  mt-0">
            <a href="javascript:void(0);" class="album-a mobile-keep"
                rel="<?php echo wp_get_attachment_image_src(get_field('block_1_image_enlarge'),'full')[0];?>">
                <img class="w-100" src="<?php echo wp_get_attachment_image_src(get_field('block_1_image'),'full')[0];?>"
                    alt="">
            </a>
        </div>

    </div>


</div>




<div class="container yellow-bg-div gx-0 mt-120px position-relative">


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








</div>






<div class="container  gx-0 ">
    <div class="row">


        <?php
$query_args = array(
	'post_type' => 'post',
);

// The Query
$the_query = new WP_Query( $query_args );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
?>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12  yellow-bg-div mw-100 mt-60px">

            <a href="javascript:void(0);" class="album-a mobile-keep"
                rel="<?php echo wp_get_attachment_image_src(get_field('post_enlarged_img'),'full')[0];?>">


                <img class="w-100" src="<?php echo wp_get_attachment_image_src(get_field('post_main_img'),'full')[0];?>"
                    alt="">

            </a>


            <h2 class="purple big mt-4">
                <a href="<?php echo get_site_url();?>/resource-2">
                    <?php echo get_the_title();?></a>
            </h2>

            <div class="orange">
                <?php
echo get_the_date('d M Y');
?>


            </div>

            <div class="mt-3">

                <?php //echo get_the_excerpt();?>

                <?php echo wp_trim_words( get_the_content(), 295, '' ); ?>


                <a href="<?php echo get_the_permalink();?>" class="orange more-link">... more</a>


            </div>

            <div class="mt-3">

                <?php
$tags_arr = get_the_tags() ;

for($i=0;$i<count($tags_arr);$i++)
{
    ?>
                <a href="<?php echo get_site_url();?>/tag/<?php echo $tags_arr[$i]->slug; ?>"
                    class="blog-tag me-1">#<?php echo $tags_arr[$i]->name;?></a>
                <?php
}

?>

            </div>


            <div class="blog-line mt-4"></div>



            <div class="row mt-4">


                <div class="col-7"><?php

    pvc_post_views( get_the_ID(), $echo = true );

    ?> views</div>
                <div class="col-5 text-end">

                    <?php
    echo do_shortcode( '[posts_like_dislike id='.get_the_ID().']');

    
    ?>

                    <a href="javascript:void(0);" class="d-inline-block three-dots-a ms-2"> <img class="three-dots"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/3dots.png" alt=""></a>
                </div>

            </div>


        </div>
        <?php
	}
    ?>



        <?php
	wp_reset_postdata();
} else {
	// no posts found
}
        
    
    ?>


        <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12  yellow-bg-div mw-100 mt-60px">

            <a href="javascript:void(0);" class="album-a mobile-keep"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/IMG_2481.jpg">
                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/blog-temp-img-1.png"
                    alt="">
            </a>


            <h2 class="purple big mt-4">
                <a href="<?php echo get_site_url();?>/resource-2">
                    標題文章和故事</a>
            </h2>

            <div class="orange">4 Nov 2022</div>

            <div class="mt-3">有關賽馬會「自主‧流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈
                <a href="<?php echo get_site_url();?>/resource-2" class="orange more-link">... more</a>
            </div>

            <div class="mt-3"> <a href="javascript:void(0);" class="blog-tag me-1">#性</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#身體</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#自我</a>
                <a href="javascript:void(0);" class="blog-tag">#感想</a>
            </div>


            <div class="blog-line mt-4"></div>



            <div class="row mt-4">


                <div class="col-9">214 views</div>
                <div class="col-3 text-end">

                    <span>10</span>

                    <a href="javascript:void(0);" class="d-inline-block">
                        <img class="heart-icon" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/heart.png"
                            alt=""></a>

                    <a href="javascript:void(0);" class="d-inline-block three-dots-a ms-2"> <img class="three-dots"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/3dots.png" alt=""></a>
                </div>

            </div>


        </div> -->
        <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12  yellow-bg-div  mw-100 mt-60px">

            <a href="javascript:void(0);" class="album-a mobile-keep"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/IMG_2505.jpg">

                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/blog-temp-img-2.png"
                    alt="">
            </a>


            <h2 class="purple big mt-4">
                <a href="<?php echo get_site_url();?>/resource-2">
                    標題文章和故事</a>
            </h2>

            <div class="orange">4 Nov 2022</div>

            <div class="mt-3">有關賽馬會「自主‧流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈
                <a href="<?php echo get_site_url();?>/resource-2" class="orange more-link">... more</a>
            </div>

            <div class="mt-3"> <a href="javascript:void(0);" class="blog-tag me-1">#性</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#身體</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#自我</a>
                <a href="javascript:void(0);" class="blog-tag">#感想</a>
            </div>


            <div class="blog-line mt-4"></div>



            <div class="row mt-4">


                <div class="col-9">214 views</div>
                <div class="col-3 text-end">

                    <span>10</span>

                    <a href="javascript:void(0);" class="d-inline-block">
                        <img class="heart-icon" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/heart.png"
                            alt=""></a>

                    <a href="javascript:void(0);" class="d-inline-block three-dots-a ms-2"> <img class="three-dots"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/3dots.png" alt=""></a>
                </div>

            </div>


        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12  yellow-bg-div  mw-100 mt-60px">


            <a href="javascript:void(0);" class="album-a mobile-keep"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/IMG_2481.jpg">

                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/blog-temp-img-1.png"
                    alt="">
            </a>


            <h2 class="purple big mt-4"> <a href="<?php echo get_site_url();?>/resource-2">
                    標題文章和故事</a></h2>

            <div class="orange">4 Nov 2022</div>

            <div class="mt-3">有關賽馬會「自主‧流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈
                <a href="<?php echo get_site_url();?>/resource-2" class="orange more-link">... more</a>
            </div>

            <div class="mt-3"> <a href="javascript:void(0);" class="blog-tag me-1">#性</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#身體</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#自我</a>
                <a href="javascript:void(0);" class="blog-tag">#感想</a>
            </div>


            <div class="blog-line mt-4"></div>



            <div class="row mt-4">


                <div class="col-9">214 views</div>
                <div class="col-3 text-end">

                    <span>10</span>

                    <a href="javascript:void(0);" class="d-inline-block">
                        <img class="heart-icon" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/heart.png"
                            alt=""></a>

                    <a href="javascript:void(0);" class="d-inline-block three-dots-a ms-2"> <img class="three-dots"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/3dots.png" alt=""></a>
                </div>

            </div>


        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12  yellow-bg-div  mw-100 mt-60px">

            <a href="javascript:void(0);" class="album-a mobile-keep"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/IMG_2505.jpg">

                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/blog-temp-img-2.png"
                    alt="">
            </a>


            <h2 class="purple big mt-4"> <a href="<?php echo get_site_url();?>/resource-2">
                    標題文章和故事</a></h2>

            <div class="orange">4 Nov 2022</div>

            <div class="mt-3">有關賽馬會「自主‧流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈
                <a href="<?php echo get_site_url();?>/resource-2" class="orange more-link">... more</a>
            </div>

            <div class="mt-3"> <a href="javascript:void(0);" class="blog-tag me-1">#性</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#身體</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#自我</a>
                <a href="javascript:void(0);" class="blog-tag">#感想</a>
            </div>


            <div class="blog-line mt-4"></div>



            <div class="row mt-4">


                <div class="col-9">214 views</div>
                <div class="col-3 text-end">

                    <span>10</span>

                    <a href="javascript:void(0);" class="d-inline-block">
                        <img class="heart-icon" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/heart.png"
                            alt=""></a>

                    <a href="javascript:void(0);" class="d-inline-block three-dots-a ms-2"> <img class="three-dots"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/3dots.png" alt=""></a>
                </div>

            </div>


        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12  yellow-bg-div  mw-100 mt-60px">


            <a href="javascript:void(0);" class="album-a mobile-keep"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/IMG_2481.jpg">


                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/blog-temp-img-1.png"
                    alt="">
            </a>


            <h2 class="purple big mt-4"> <a href="<?php echo get_site_url();?>/resource-2">
                    標題文章和故事</a></h2>

            <div class="orange">4 Nov 2022</div>

            <div class="mt-3">有關賽馬會「自主‧流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈
                <a href="<?php echo get_site_url();?>/resource-2" class="orange more-link">... more</a>
            </div>

            <div class="mt-3"> <a href="javascript:void(0);" class="blog-tag me-1">#性</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#身體</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#自我</a>
                <a href="javascript:void(0);" class="blog-tag">#感想</a>
            </div>


            <div class="blog-line mt-4"></div>



            <div class="row mt-4">


                <div class="col-9">214 views</div>
                <div class="col-3 text-end">

                    <span>10</span>

                    <a href="javascript:void(0);" class="d-inline-block">
                        <img class="heart-icon" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/heart.png"
                            alt=""></a>

                    <a href="javascript:void(0);" class="d-inline-block three-dots-a ms-2"> <img class="three-dots"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/3dots.png" alt=""></a>
                </div>

            </div>


        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12  yellow-bg-div  mw-100 mt-60px">

            <a href="javascript:void(0);" class="album-a mobile-keep"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/IMG_2505.jpg">

                <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/blog-temp-img-2.png"
                    alt="">
            </a>

            <h2 class="purple big mt-4">
                <a href="<?php echo get_site_url();?>/resource-2">
                    標題文章和故事</a>
            </h2>

            <div class="orange">4 Nov 2022</div>

            <div class="mt-3">有關賽馬會「自主‧流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈
                <a href="<?php echo get_site_url();?>/resource-2" class="orange more-link">... more</a>
            </div>

            <div class="mt-3"> <a href="javascript:void(0);" class="blog-tag me-1">#性</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#身體</a>
                <a href="javascript:void(0);" class="blog-tag me-1">#自我</a>
                <a href="javascript:void(0);" class="blog-tag">#感想</a>
            </div>


            <div class="blog-line mt-4"></div>



            <div class="row mt-4">


                <div class="col-9">214 views</div>
                <div class="col-3 text-end">

                    <span>10</span>

                    <a href="javascript:void(0);" class="d-inline-block">
                        <img class="heart-icon" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/heart.png"
                            alt=""></a>

                    <a href="javascript:void(0);" class="d-inline-block three-dots-a ms-2"> <img class="three-dots"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/3dots.png" alt=""></a>
                </div>

            </div>


        </div> -->


    </div>
</div>


<!-- 
<div class="container gx-0 ">
    <div class="row">


    </div>
</div>
 -->





















<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();