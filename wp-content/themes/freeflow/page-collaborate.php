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





<div class="banner-div" style="background:url(http://64.227.13.14/freeflow/wp-content/uploads/2023/01/collaborate-banner-scaled.jpg);background-size: cover;
    background-position: center center;
    display: block;
    width: 100%;
    height: 860px;">





    <a href="<?php echo get_site_url();?>" class="freeflow-logo-a"><img
            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/freeflow-logo.png" alt=""></a>

</div>



<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-5">


            <table class="float-start">
                <tr>
                    <td> <img class="entry-img w-100"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/Asset-3@2x-2.png" alt="">

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
                由香港賽馬會慈善信託基金捐助，賽馬會「自主・流」身體律動計劃是一個為期三年的試點項目(2021－2024)，旨在改善15至24歲青少女的身心健康，過程中啟發她們的好奇心，擁抱身體多樣性，培養性別意識。

                透過台灣雲門舞集舞蹈教室為青少女需要而設計的「生活律動」課程，參加者可以從形體動作，以及與同伴交流，開拓肢體的語彙和創意思維，以與生俱來的節奏感重新感受和定義生活。共同尋找一個舒適的空間討論女性標準，探討這些期望為她們帶來的影響。青少女從中得到陪伴，逐漸增加自信，踏上連結自我的旅程。

                計劃希望在參加者內心埋下種子，重塑對女性議題的討論。
            </div>


            <a href="javascript:void(0);" class="home-entry-link mt-4">更多課程資訊</a>

        </div>

    </div>

</div>







<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();