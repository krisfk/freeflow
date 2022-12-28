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
<?php
get_footer();