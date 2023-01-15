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

    <img class="banner-img" src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/collaborate-banner-scaled.jpg"
        alt="">







</div>



<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-5">


            <table class="float-start w-100">
                <tr>
                    <td class="align-top">
                        <a href="javascript:void(0);"
                            rel="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/IMG_20211207_215656.jpg">
                            <img class="entry-img w-100"
                                src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-3@2x-2.png"
                                alt=""></a>

                    </td>
                    <td class="subtitle-td align-top">

                        <article class="vertical-article ">
                            <h2 class="purple">與我們合作
                            </h2>
                        </article>


                    </td>
                </tr>
            </table>

        </div>
        <div class="col-7">

            <div>

                我們的使命需要大家大力支持！任何藝術團體、創作人，以及關心性別議題的朋友，歡迎成為我們的合作黟伴，為項目加添力量。
                <br><br>
                賽馬會「自主．流」身體律動計劃是一個為期三年的項目，期望能建立一個關心性別議題的互助社群，過程中持續開拓新的視野和納入新的構想，讓群體中每一把獨一無二的聲音都能被聽見。
                <br><br>

                <span class="orange middle-size"> 我們需要熱心朋友就以下事項提供協助:</span>
                <br>

                <div class="purple">
                    舉辦工作坊 <br>
                    活動紀實<br>
                    影音創作<br>
                    圖像和平面設計
                </div>
                <br>

                <span class="orange middle-size">
                    如有意和我們同行或一展所長，歡迎與我們聯絡！</span>
                <br>
                <div>
                    如何參與我們的律動計劃？ <br>
                    請聯絡以下主辦機構瞭解:
                </div>
                <br>

                <span class="purple-underline">明愛青少年及社區服務</span> <br>
                電話：2552 0797<br>
                電郵：ycscm@caritassws.org.hk<br><br>


                <span class="purple-underline">香港青少年服務處</span> <br>
                電話：2356 2133<br>
                電郵：crea_dance@hkcys.org.hk<br><br>


                <span class="purple-underline">青躍 － 青少女發展網絡</span> <br>
                電話：2302 0068<br>
                電郵：info@teenskey.org

            </div>


        </div>

    </div>

</div>







<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();