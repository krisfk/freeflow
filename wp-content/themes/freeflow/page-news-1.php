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





<div class="banner-div" style="background:url(http://64.227.13.14/freeflow/wp-content/uploads/2023/01/news-banner-1-scaled.jpg);background-size: cover;
    background-position: center center;
    display: block;
    width: 100%;
    height: 860px;">





    <a href="javascript:void(0);" class="freeflow-logo-a"><img
            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/freeflow-logo.png" alt=""></a>

</div>

<div class="container yellow-bg-div gx-0 mt-120px">


    <h2 class="purple">藝術日營《身體我自在》</h2>

    <div class="mt-4">在今年Art Camp《身體我自在》，我們舉辦了一系列的藝術活動，讓來自不同機構的青少女聚一聚， <br>
        一同體驗及交流。她們當日製作的成品亦於該年度的展覽中展出。
    </div>

    <table class="news-tpl-1-img-table">
        <tr>
            <td><img src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-7@2x-1.png" alt=""></td>
            <td><img src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-8@2x-1.png" alt=""></td>
        </tr>
    </table>

</div>




<div class="container yellow-bg-div gx-0 mt-60px">


    <h2 class="purple">香水製作工作坊</h2>

    <div class="mt-4">可調製屬於自己的香水, 找尋自己的味道
    </div>

    <table class="news-tpl-1-img-table">
        <tr>
            <td><img src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-9@2x-1.png" alt=""></td>
            <td><img src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-10@2x.png" alt=""></td>
        </tr>
    </table>

</div>



<div class="container yellow-bg-div gx-0 mt-60px">


    <h2 class="purple">Love Tee Styling with Adele Leung</h2>

    <div class="mt-4">由形象顧問&造型師Adele指導，學習如何從穿搭方面找到自己的獨特性
    </div>

    <table class="news-tpl-1-img-table">
        <tr>
            <td><img src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-11@2x-1.png" alt=""></td>
            <td><img src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-12@2x-1.png" alt=""></td>
        </tr>
    </table>

</div>




<div class="container yellow-bg-div gx-0 mt-60px">


    <h2 class="purple">身體藝術工作坊 x 3間NGOs</h2>

    <div class="mt-4">盆景 / 身體造型蠟燭 / 酒精墨水畫 / 新式書法
    </div>

    <table class="news-tpl-1-img-table">
        <tr>
            <td><img src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-14@2x.png" alt=""></td>
            <td><img src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-13@2x-1.png" alt=""></td>
        </tr>
    </table>

</div>






<div class="footer-div mt-120px">


    <div class="container pt-4 pb-4">




        <div class="row  mt-5">
            <div class="col-7">


                <div class="icons-div">

                    <table>
                        <tr>
                            <td>主辦機構</td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/top-icon-1.png"
                                        alt=""></a><a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/top-icon-2.png"
                                        alt=""></a><a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/top-icon-3.png"
                                        alt=""></a>
                            </td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td>捐助機構</td>
                            <td>合作夥伴</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/bottom-icon-1.png"
                                        alt=""></a>
                            </td>
                            <td> <a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/bottom-icon-2.png"
                                        alt=""></a> <a href="javascript:void(0);"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/bottom-icon-3.png"
                                        alt=""></a></td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="col-5 form-div">


                <h3 class="mb-3">與我們聯絡</h3>
                <input class="form-control mb-2" type="text" placeholder="姓名">
                <input class="form-control mb-2" type="text" placeholder="電郵">
                <input class="form-control mb-2" type="text" placeholder="訊息">


                <div class="text-end">
                    <a href="javascript:void(0);" class="form-submit-btn">提交</a>

                </div>
            </div>
        </div>

        <div class="row footer-small-word">
            <div class="col-12">

                <div>
                    於新冠肺炎疫情期間拍攝之影像，在場人士均有嚴格遵從當時實行之防疫措施。 <br>
                    所有作品內容均由主辦單位/創作團隊獨立製作，並不代表本計劃及捐助機構之立場或意見。
                </div>

                <ul class="footer-menu-ul p-0 float-start mt-4">
                    <li>&copy; 2022 JC FreeFlow</li>
                    <li><a href="javascript:void(0);">使用條款</a></li>
                    <li><a href="javascript:void(0);">私隱政策</a></li>
                </ul>

            </div>

            <div class="col-12">

                <ul class="sns-menu-ul">
                    <li>
                        <a href="javascript:void(0);">
                            <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-1.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-2.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-3.png" alt="">
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </div>

</div>
<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();