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

<div class="container home-entry-div">

    <div class="row">

        <div class="col-4">


            <table>
                <tr>
                    <td class="bottom-0"> <img class="home-entry-img"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/home-entry-1-photo.jpg" alt="">

                        <div class="subtitle">使 <br>命</div>
                    </td>
                </tr>
            </table>

        </div>
        <div class="col-8">

            <div class="home-entry-title">
                賽馬會「自主・流」身體律動計劃 <br>
                Jockey Club ‘FreeFlow’ Body Movement Project
            </div>
            <div>
                計劃為全港首個試點項目，與台灣雲門舞集舞蹈教室合作，設計出一套為香港青少女需求而定的身體律動課程，透過身體律動培育青少女對身體的好奇心，發掘身體多樣性；再輔以社會服務介入，致力為青少女充權，鼓勵創新和開放對話，促進個人成長和加深自我認識。
            </div>

        </div>

    </div>

</div>

<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve.gif" alt=""> -->
<?php
get_footer();