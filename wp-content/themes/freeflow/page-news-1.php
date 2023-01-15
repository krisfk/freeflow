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

    <img class="banner-img" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/news-banner-1-scaled.jpg"
        alt="">







</div>

<div class="container yellow-bg-div gx-0 mt-120px">


    <h2 class="purple">藝術日營《身體我自在》</h2>

    <div class="mt-4">在今年Art Camp《身體我自在》，我們舉辦了一系列的藝術活動，讓來自不同機構的青少女聚一聚， <br>
        一同體驗及交流。她們當日製作的成品亦於該年度的展覽中展出。
    </div>

    <table class="news-tpl-1-img-table w-100">
        <tr>
            <td>
                <a href="javascript:void(0);" class="album-a me-4"
                    rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/vlcsnap-2022-07-21-19h29m05s552.jpg">
                    <img src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-7@2x-1.png" alt=""></a>
                <a href="javascript:void(0);" class="album-a"
                    rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/vlcsnap-2022-07-21-19h29m05s552.jpg"><img
                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-8@2x-1.png" alt=""></a>
            </td>
        </tr>
    </table>

</div>




<div class="container yellow-bg-div gx-0 mt-60px">


    <h2 class="purple">香水製作工作坊</h2>

    <div class="mt-4">可調製屬於自己的香水, 找尋自己的味道
    </div>

    <table class="news-tpl-1-img-table w-100">
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

</div>



<div class="container yellow-bg-div gx-0 mt-60px">


    <h2 class="purple">Love Tee Styling with Adele Leung</h2>

    <div class="mt-4">由形象顧問&造型師Adele指導，學習如何從穿搭方面找到自己的獨特性
    </div>

    <table class="news-tpl-1-img-table w-100">
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

</div>




<div class="container yellow-bg-div gx-0 mt-60px">


    <h2 class="purple">身體藝術工作坊 x 3間NGOs</h2>

    <div class="mt-4">盆景 / 身體造型蠟燭 / 酒精墨水畫 / 新式書法
    </div>

    <table class="news-tpl-1-img-table w-100">
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

</div>







<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();