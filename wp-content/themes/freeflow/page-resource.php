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





<div class="banner-div" style="background:url(http://64.227.13.14/freeflow/wp-content/uploads/2023/01/resource-banner-scaled.jpg);background-size: cover;
    background-position: center center;
    display: block;
    width: 100%;
    height: 860px;">





    <a href="javascript:void(0);" class="freeflow-logo-a"><img
            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/freeflow-logo.png" alt=""></a>

</div>

<div class="container yellow-bg-div gx-0 mt-120px">



    <div class="row mt-4">

        <div class="col-6 position-relative">





            <article class="vertical-article float-start me-4">
                <h2 class="orange">律動資料庫
                </h2>
            </article>

            <div>

                有關賽馬會「自主．流」身體律動計劃的文章及資料會於這裡與大家分享。內容包括由青少女及計劃社工撰寫的文章和故事。 <br><br>

                以及，與香港浸會大學合作的研究正在進行，結果詳情將容後公佈。

            </div>







        </div>
        <div class="col-6">
            <img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-2@2x-1.png" alt="">
        </div>

    </div>


</div>


<div class="container yellow-bg-div gx-0 mt-60px">



    <a href="javascript:void(0);" class="blog-tag">All Articles</a>
    <a href="javascript:void(0);" class="blog-tag">#性</a>
    <a href="javascript:void(0);" class="blog-tag">#身體</a>
    <a href="javascript:void(0);" class="blog-tag">#自我</a>
    <a href="javascript:void(0);" class="blog-tag">#感想</a>





</div>






<img class="mt-120px fake-video" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/fake-video-2-scaled.jpg"
    alt="">













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