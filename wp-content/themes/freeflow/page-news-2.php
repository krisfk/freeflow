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

    <img class="banner-img" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/news-banner-2-scaled.jpg"
        alt="">







</div>

<div class="container yellow-bg-div gx-0 mt-120px">


    <h2 class="purple">賽馬會「自主・流」身體律動計劃 <br>
        年度展覽《我動故我在》</h2>


    <div class="row mt-4">

        <div class="col-7">

            在《我動故我在》，我們將分享青少年在這一年身體律動課的體驗及向公眾推廣身體律動及對自我身體的關注。在這空間與大眾討論女性標準，探討這些期望為本地青少女帶來的影響，協助公眾認識身體律動，關顧自己的身心靈需要，加深對性別議題的認識。
            <br> <br>
            是次活動結合律動體驗課和藝術展覽，展出了本計劃的一年總結。展覽主要分為三部分: 故我在、我自在、漫動作。

        </div>
        <div class="col-5 text-end">

            <a href="javascript:void(0);" class="album-a"
                rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC02329_edited.jpg">
                <img class="d-inline-block" style="max-height:460px;"
                    src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-16@2x.png" alt=""></a>
        </div>

    </div>


</div>


<div class="container yellow-bg-div gx-0 mt-60px">


    <div class="row mt-4">

        <div class="col-9">

            <div>
                <a href="javascript:void(0);" class="album-a me-3 mb-3"
                    rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC02162_edited.jpg">
                    <img class="height-280px d-inline-block"
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-17@2x.png" alt="">
                </a>
                <a href="javascript:void(0);" class="album-a  mb-3"
                    rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC02242_edited.jpg">

                    <img class="height-280px d-inline-block"
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-18@2x.png" alt=""> </a>

            </div>

            <div>
                <a href="javascript:void(0);" class="album-a me-3" rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC02122_edited.jpg>

                    <img class=" height-280px d-inline-block"
                    src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-19@2x.png" alt="">
                </a>

                <a href="javascript:void(0);" class="album-a"
                    rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/DSC02198_edited.jpg">

                    <img class="height-280px d-inline-block"
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-20@2x.png" alt="">
                </a>

            </div>

        </div>
        <div class="col-3 text-end">

            <h2 class="purple">故我在</h2>

            <div>透過環境劇場及藝術裝置， <br>
                呈現三個年青人尋找自在的真實故事。</div>


            <article class="vertical-article position-absolute bottom-0 end-0 me-4 mb-4">
                <h2 class="orange">互動故事 <br>體驗展
                </h2>
            </article>



        </div>

    </div>


</div>



<div class="container yellow-bg-div gx-0 mt-60px">


    <div class="row mt-4">

        <div class="col-9">

            <div>
                <a href="javascript:void(0);" class="album-a me-3 mb-3">
                    <img class="height-280px d-inline-block"
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-21@2x.png" alt="">
                </a>
                <a href="javascript:void(0);" class="album-a  mb-3">

                    <img class="height-280px d-inline-block"
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-22@2x.png" alt=""> </a>

            </div>

            <div>
                <a href="javascript:void(0);" class="album-a me-3">

                    <img class="height-280px d-inline-block"
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-23@2x.png" alt="">
                </a>

                <a href="javascript:void(0);" class="album-a">

                    <img class="height-280px d-inline-block"
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-24@2x.png" alt="">
                </a>

            </div>

        </div>
        <div class="col-3 text-end">

            <h2 class="purple">我自在</h2>

            <div>作品是身體的延伸。 <br>
                由雕塑到攝影、畫布與文字、<br>
                手工作品的呈現，<br>
                和青少女們一起尋索自在的可能性。</div>


            <article class="vertical-article position-absolute bottom-0 end-0 me-4 mb-4">
                <h2 class="orange">青少女 <br>
                    藝術展
                </h2>
            </article>



        </div>

    </div>


</div>


<div class="container yellow-bg-div gx-0 mt-60px">


    <div class="row mt-4">

        <div class="col-9">

            <div>
                <a href="javascript:void(0);" class="album-a me-3 mb-3">
                    <img class="height-280px d-inline-block"
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-25@2x.png" alt="">
                </a>
                <a href="javascript:void(0);" class="album-a  mb-3">

                    <img class="height-280px d-inline-block"
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-26@2x.png" alt=""> </a>

            </div>

            <div>
                <a href="javascript:void(0);" class="album-a me-3">

                    <img class="height-280px d-inline-block"
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-27@2x.png" alt="">
                </a>

                <a href="javascript:void(0);" class="album-a">

                    <img class="height-280px d-inline-block"
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-28@2x.png" alt="">
                </a>

            </div>

        </div>
        <div class="col-3 text-end">

            <h2 class="purple">漫動作</h2>

            <div>透過體驗雲門教室的律動課， <br>
                放下身體的框框，在輕鬆自由的狀態下，<br>
                開拓新的肢體語彙。<br>
                與身體對話，找回屬於你的自在。</div>


            <article class="vertical-article position-absolute bottom-0 end-0 me-4 mb-4">
                <h2 class="orange">身體律動 <br>
                    工作坊
                </h2>
            </article>



        </div>

    </div>


</div>




<img class="mt-120px fake-video" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/fake-video-2-scaled.jpg"
    alt="">














<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();