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



<div class="home-banner-div">

    <div class="icons-div">

        <table>
            <tr>
                <td>主辦機構</td>
            </tr>
            <tr>
                <td><a href="javascript:void(0);"><img class="top-icon-img"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/top-icon-1.png" alt=""></a><a
                        href="javascript:void(0);"><img class="top-icon-img"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/top-icon-2.png" alt=""></a><a
                        href="javascript:void(0);"><img class="top-icon-img"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/top-icon-3.png" alt=""></a>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>捐助機構</td>
            </tr>
            <tr>
                <td><a href="javascript:void(0);"><img class="top-icon-img"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/top-icon-4.png" alt=""></a>
                </td>
            </tr>
        </table>


    </div>
</div>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-5">


            <table class="float-start">
                <tr>
                    <td> <img class="home-entry-img"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/home-entry-1-photo.jpg" alt="">

                    </td>
                    <td class="subtitle-td align-bottom">
                        使 <br>命
                    </td>
                </tr>
            </table>

        </div>
        <div class="col-7">

            <div class="home-entry-title">
                賽馬會「自主・流」身體律動計劃 <br>
                Jockey Club ‘FreeFlow’ Body Movement Project
            </div>
            <div class="mt-4">
                計劃為全港首個試點項目，與台灣雲門舞集舞蹈教室合作，設計出一套為香港青少女需求而定的身體律動課程，透過身體律動培育青少女對身體的好奇心，發掘身體多樣性；再輔以社會服務介入，致力為青少女充權，鼓勵創新和開放對話，促進個人成長和加深自我認識。
            </div>


            <a href="javascript:void(0);" class="home-entry-link mt-4">發掘更多律動課程</a>

        </div>

    </div>

</div>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-7">

            <div class="home-entry-title">
                甚麽是身體律動？

            </div>
            <div class="mt-4">
                我們相信身體是最能夠直接呈現自身感受的載體，我們天生便懂得如何韻律。在律動過程中，沒有任何標準及規限，亦不需要向別人交代。在最舒適的情況下，與情感產生正向的回饋及內在轉變，表現最真實的自己。
            </div>


            <a href="javascript:void(0);" class="home-entry-link mt-4">發掘更多律動課程</a>

        </div>

        <div class="col-5">


            <table class="float-end">
                <tr>

                    <td class="subtitle-td align-bottom">
                        信<br>念
                    </td>
                    <td> <img class="home-entry-img"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/home-entry-2-photo.jpg" alt="">

                    </td>
                </tr>
            </table>

        </div>


    </div>

</div>


<img class="mt-120px fake-video" src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/fake-video-1-scaled.jpg"
    alt="">


<div class="container yellow-bg-div gx-0 mt-120px">


    <div class="row">

        <div class="col-8">

            <div class="home-entry-title">
                為甚麼這個計劃很重要？

            </div>
            <div class="mt-4">

                我們希望能夠通過這個計劃去重塑女性對話！這是一個由香港賽馬會慈善信託基金捐助的試點項目，旨在透過身體律動去探討女性身份以及年輕女性在現今社會的意義。除了身體律動課和社工介入，我們還引入各種藝術和文化元素，與參加者有更多元化的互動，希望能擴闊她們的視野。請查看本網站
                <a href="javascript:void(0);" class="orange-link">關於我們</a>頁面了解更多有關計劃、機構、合作夥伴的資訊！
            </div>




            <div class="home-entry-title mt-4">
                如何成為計劃的一份子？


            </div>
            <div class="mt-4">

                你可通過各種方式參與這個計劃！如果你是教育工作者、創作者或藝術家，請查看本網站
                <a href="javascript:void(0);" class="orange-link">與我們合作</a>


                頁面了解更多。至於有興趣透過其他方式合作的你，請在本頁下方給我們留言或直接發送電子郵件。
            </div>







        </div>
        <div class="col-4 text-center">

            <h2 class="orange">想知更多？</h2>

        </div>
    </div>


</div>


<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-6 mb-4 position-relative">


            <a href="javascript:void(0);" class="our-activity-btn">


                <table class="w-100 h-100">
                    <tr>
                        <td class="align-center">
                            <h2>


                                我們的活動</h2>

                            <div class="big-white-arrow-div mt-4">

                                發掘更多活動內容


                            </div>
                        </td>
                    </tr>
                </table>

            </a>


        </div>
        <div class="col-6 mb-4">

            <div class="row">

                <div class="col-6"> <a href=""><img class="w-100"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-7@2x.png" alt=""></a>
                </div>
                <div class="col-6"> <a href=""><img class="w-100"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-8@2x.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="col-6 mb-4">


            <div class="row">

                <div class="col-6"> <a href=""><img class="w-100"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-9@2x.png" alt=""></a>
                </div>
                <div class="col-6"> <a href=""><img class="w-100"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-10@2x.png" alt=""></a>
                </div>
            </div>


        </div>
        <div class="col-6 mb-4">

            <a href=""><img class="w-100" src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-11@2x.png"
                    alt=""></a>
        </div>

    </div>
</div>

<div class="footer-div mt-120px">


    <div class="container mt-5">




        <div class="row">
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
            <div class="col-5">


                <h3>與我們聯絡</h3>
                <input class="form-control" type="text" placeholder="姓名">
                <input class="form-control" type="text" placeholder="電郵">
                <input class="form-control" type="text" placeholder="訊息">

            </div>
        </div>

    </div>

</div>
<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();