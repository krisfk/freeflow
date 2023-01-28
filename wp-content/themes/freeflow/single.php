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



    <a href="javascript:void(0);" class="blog-tag me-3">All Articles</a>
    <a href="javascript:void(0);" class="blog-tag me-3">#性</a>
    <a href="javascript:void(0);" class="blog-tag me-3">#身體</a>
    <a href="javascript:void(0);" class="blog-tag me-3">#自我</a>
    <a href="javascript:void(0);" class="blog-tag">#感想</a>





</div>





<div class="container yellow-bg-div gx-0 mt-60px">
    <div class="row">
        <div class="col-12">

            <!-- <img class="resource-detail-img"
                src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/blog-temp-img-1.png" alt=""> -->


            <a href="javascript:void(0);" class="album-a mobile-keep"
                rel="<?php echo wp_get_attachment_image_src(get_field('post_enlarged_img'),'full')[0];?>">


                <img class="resource-detail-img"
                    src="<?php echo wp_get_attachment_image_src(get_field('post_main_img'),'full')[0];?>" alt="">

            </a>


            <h2 class="purple big mt-4">標題文章和故事</h2>

            <div class="orange">4 Nov 2022</div>

            <div class="mt-3">
                有關賽馬會「自主‧流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈在《我動故我在》，我們將分享青少年在這一年身體律動課的體驗及向公眾推廣身體律動及對自我身體的關注。在這空間與大眾討論女性標準，探討這些期望為本地青少女帶來的影響，協助公眾認識身體律動，關顧自己的身心靈需要，加深對性別議題的認識。
                <br><br>

                是次活動結合律動體驗課和藝術展覽，展出了本計劃的一年總結。展覽主要分為三部分: 故我在、我自在、漫動作。<br><br>

                有關賽馬會「自主‧流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈在《我動故我在》，我們將分享青少年在這一年身體律動課的體驗及向公眾推廣身體律動及對自我身體的關注。在這空間與大眾討論女性標準，探討這些期望為本地青少女帶來的影響，協助公眾認識身體律動，關顧自己的身心靈需要，加深對性別議題的認識。
                <br><br>
                有關賽馬會「自主‧流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈在《我動故我在》，我們將分享青少年在這一年身體律動課的體驗及向公眾推廣身體律動及對自我身體的關注。
                <br><br>
                是次活動結合律動體驗課和藝術展覽，展出了本計劃的一年總結。展覽主要分為三部分:<br>
                故我在、我自在、漫動作。有關賽馬會「自主‧流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈在《我動故我在》，我們將分享青少年在這一年身體律動課的體驗及向公眾推廣身體律動及對自我身體的關注。在這空間與大眾討論女性標準，探討這些期望為本地青少女帶來的影響，協助公眾認識身體律動，關顧自己的身心靈需要加深對性別議題的認識。是次活動結合律動體驗課和藝術展覽，展出了本計劃的一年總結。展覽主要分為三部分:<br>
                故我在、我自在、漫動作。有關賽馬會「自主‧流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈在《我動故我在》，我們將分享青少年在這一年身體律動課的體驗及向公眾推廣身體律動及對自我身體的關注。在這空間與大眾討論女性標準，探討這些期望為本地青少女帶來的影響，協助公眾認識身體律動關顧自己的身心靈需要，加深對性別議題的認識。
            </div>

            <div class="mt-3"> <a href="javascript:void(0);" class="blog-tag me-3">#性</a>
                <a href="javascript:void(0);" class="blog-tag me-3">#身體</a>
                <a href="javascript:void(0);" class="blog-tag me-3">#自我</a>
                <a href="javascript:void(0);" class="blog-tag">#感想</a>
            </div>


            <div class="blog-line mt-4"></div>



            <div class="row mt-4">


                <div class="col-3">214 views</div>
                <div class="col-9 text-end">

                    <span>10</span>

                    <a href="javascript:void(0);" class="d-inline-block">
                        <img class="heart-icon" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/heart.png"
                            alt=""></a>

                    <a href="javascript:void(0);" class="d-inline-block three-dots-a ms-4"> <img class="three-dots"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/3dots.png" alt=""></a>
                </div>

            </div>


        </div>

    </div>
</div>




















<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();