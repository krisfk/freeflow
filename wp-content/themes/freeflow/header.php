<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css"> -->


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <div class="menu-layer">

        <div class="menu-div">

            <ul class="lang-switcher">
                <li class="me-3"><a class="active" href="javascript:void(0);">中</a></li>
                <li><a href="javascript:void(0);">EN</a></li>
            </ul>



            <ul>
                <?php
                                    $main_menu = wp_get_menu_array('main menu');
foreach ($main_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
$class = $menu_item['class'];

$temp_arr=explode(get_site_url(),$url);
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{
  
    echo '<li><a class="level-1 parent '.$class.'" href="'.$url.'">'.$title;
    ?>
                <img class="arrow" src="<?php echo get_template_directory_uri();?>/assets/images/white-arrow-enter.png"
                    alt="">

                <?php
    echo'</a>';

 
    echo '<ul class="mobile-menu-submenu">';
?>

                <?php
    
    foreach ($menu_item['children'] as $sub_menu_item) 
    {
        $sub_url = $sub_menu_item['url'];
        $sub_title = $sub_menu_item['title'];
        
        $sub_temp_arr=explode(get_site_url(),$sub_url);
        $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
        $sub_slug=str_replace('/cn/','',$sub_slug);
        $sub_slug=str_replace('/','',$sub_slug);
        echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
    }
    echo '</ul>';

}
else
{
echo '<li><a class="level-1 '.$slug.' '.$class.'" href="'.$url.'">'.$title.'</a>';

}
echo'</li>';


}

?>

            </ul>
            <!-- <ul class="first-level">
                <li><a href="javascript:void(0);">關於我們</a>

                    <a href="javascript:void(0);" class="menu-arrow"></a>

                    <ul class="second-level">
                        <li><a href="javascript:void(0);">律動課程</a></li>
                        <li><a href="javascript:void(0);">律動導師</a></li>

                    </ul>

                </li>
                <li><a href="javascript:void(0);">最新消息</a>

                    <a href="javascript:void(0);" class="menu-arrow"></a>

                    <ul class="second-level">
                        <li><a href="javascript:void(0);">律動課程</a></li>
                        <li><a href="javascript:void(0);">律動導師</a></li>

                    </ul>

                </li>
                <li><a href="javascript:void(0);">發掘更多</a></li>
                <li><a href="javascript:void(0);">與我們合作</a></li>
            </ul>

 -->


            <ul class="sns-menu-ul">
                <li>
                    <a href="javascript:void(0);" class="sns-icon sns-icon-1-a">
                        <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-1.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="sns-icon sns-icon-2-a">
                        <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-2.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="sns-icon sns-icon-3-a">
                        <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-3.png" alt="">
                    </a>
                </li>

            </ul>
        </div>

        <div class="menu-layer-click-area"></div>




    </div>

    <a class="menu-btn" href="javascript:void(0);">


        <div class="menu-btn-icon"></div>
        <!-- <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/menu-btn.png" alt=""> -->
        <div class="menu-btn-txt">Menu</div>
    </a>


    <div id="page" class="site">
        <a class="d-none skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'freeflow' ); ?></a>



        <div class="curve-bg"></div>


        <?php //get_template_part( 'template-parts/header/site-header' ); ?>

        <script type="text/javascript">
        $(function() {


            $('.menu-btn').click(function() {
                $(this).toggleClass('active');

                if ($(this).hasClass('active')) {

                    $('.menu-layer').fadeIn(200);
                } else {

                    $('.menu-layer').fadeOut(0);

                }
            })

            $('.menu-layer-click-area').click(function() {
                $('.menu-layer').fadeOut(0);
                $('.menu-btn').removeClass('active');

            })

            $('.menu-arrow').click(function() {
                $(this).toggleClass('active');
                if ($(this).hasClass('active')) {

                    $(this).next('.second-level').fadeIn(200);
                    // $('.menu-layer')
                } else {

                    $(this).next('.second-level').fadeOut(0);
                    // $('.menu-layer').fadeOut(0);

                }

            })
        })
        </script>