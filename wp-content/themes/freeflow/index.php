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

<div class="curve-bg"></div>



<div class="home-banner-div">

    <div class="top-icons-div">

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

<div class="container home-entry-div gx-0 mt-120px">

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

<div class="container home-entry-div gx-0 mt-120px">

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
<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();