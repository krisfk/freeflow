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

    <div class="d-none">
        <img src="http://64.227.13.14/freeflow/wp-content/themes/freeflow/assets/images/menu-arrow-blue.png" alt="">
        <img src="http://64.227.13.14/freeflow/wp-content/themes/freeflow/assets/images/menu-gradient-bg.jpg" alt="">
        <img src="http://64.227.13.14/freeflow/wp-content/themes/freeflow/assets/images/menu-btn-close-blue.png" alt="">
        <img src="http://64.227.13.14/freeflow/wp-content/themes/freeflow/assets/images/sns-icon-1-blue.png" alt="">
        <img src="http://64.227.13.14/freeflow/wp-content/themes/freeflow/assets/images/sns-icon-2-blue.png" alt="">
        <img src="http://64.227.13.14/freeflow/wp-content/themes/freeflow/assets/images/sns-icon-3-blue.png" alt="">
        <img src="http://64.227.13.14/freeflow/wp-content/themes/freeflow/assets/images/sns-icon-1-purple.png" alt="">
        <img src="http://64.227.13.14/freeflow/wp-content/themes/freeflow/assets/images/sns-icon-2-purple.png" alt="">
        <img src="http://64.227.13.14/freeflow/wp-content/themes/freeflow/assets/images/sns-icon-3-purple.png" alt="">
    </div>
    <!-- <div id="wptime-plugin-preloader"></div> -->

    <div class="lightbox-layer">


        <div class="yellow-bg-div gx-0 mt-120px"">


            <div class=" row">


            <div class="col-4">
                <h2 class="orange">使用條款</h2>
            </div>
            <div class="col-8">
                本網站所含信息僅供一般參考之用。該信息由賽馬會「自主・流」身體律動計劃提供。本網站所載的全部內容及資料，包括但不限於網站的美術設計、瀏覽連繫及軟件程式，均屬賽馬會「自主・流」身體律動計劃所有，且受版權保護。任何人士如未獲計劃之合作機構事先給予書面許可，一律禁止轉載、發放或擅用本網站的任何內容或資料。
                <br> <br>

                賽馬會「自主・流」身體律動計劃會盡力發放最新以及最準確的信息，但不對網站或網站上包含的信息、產品、服務或相關圖形的適用而負上任何責任。因此，對此類信息的任何依賴均由用戶自行承擔風險。<br> <br>

                在任何情況下，賽馬會「自主・流」身體律動計劃均不對任何損失或損害負責，包括任何損失或損害，或因使用本網站引起或與之相關的數據或利潤損失而引起的任何損失或損害。<br> <br>

                本網站包含指向不受賽馬會「自主・流」身體律動計劃控制的第三者網站連結。賽馬會「自主・流」身體律動計劃無法控制這些網站的性質、內容和用途。因此，亦不為從任何連結網站接收得來的網絡播放或任何其他傳輸內容而負責。
                <br> <br>
                賽馬會「自主・流」身體律動計劃會盡一切努力保持網站正常運行，但並不會為無法控制的技術問題而導致網站暫時無法使用的相關情況承擔任何責任。<br> <br>

                有關使用本網站任何部分的所有使用條款和條件以及免責聲明均以中文和英文書寫。中英文版本如有出入，概以英文為準。
                <br> <br>
                所有作品內容均由主辦單位/創作團隊獨立製作，並不代表本計劃及捐助機構之立場或意見。
            </div>
        </div>
    </div>

    </div>

    <div class="menu-layer">

        <div class="menu-div">

            <ul class="lang-switcher">
                <li class="me-3"><a class="active" href="javascript:void(0);">中</a></li>
                <li><a href="javascript:void(0);">EN</a></li>
            </ul>



            <ul class="level-1">
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
  
    echo '<li><a class="parent '.$class.'" href="'.$url.'">'.$title;
    ?>
                <!-- <img class="arrow" src="<?php echo get_template_directory_uri();?>/assets/images/white-arrow-enter.png"
                    alt=""> -->

                <?php
    echo'</a>';

 
    echo '<a href="javascript:void(0);" class="menu-arrow"></a><ul class="mobile-menu-submenu level-2">';
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
                    <a href="https://www.instagram.com/jcfreeflow/" target="_blank" class="sns-icon sns-icon-1-a">
                        <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-1.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/%E8%B3%BD%E9%A6%AC%E6%9C%83%E8%87%AA%E4%B8%BB%E6%B5%81%E8%BA%AB%E9%AB%94%E5%BE%8B%E5%8B%95%E8%A8%88%E5%8A%83-Jockey-Club-FreeFlow-Body-Movement-Project-101027252379175/"
                        target="_blank" class="sns-icon sns-icon-2-a">
                        <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-2.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCnDv1PeKwAusiCd5_ebm66A" target="_blank"
                        class="sns-icon sns-icon-3-a">
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
        function settleBanner() {

            // alert(4);
            if ($('.banner-img').width() > $(window).width()) {


                $('.banner-img').css({
                    'left': ($(window).width() - $('.banner-img').width()) / 2 + 'px',
                    'bottom': ($(window).height() - $('.banner-img').height()) / 2 + 'px',

                })


            } else {


                $('.banner-img').css({
                    'width': '100%'
                });

                $('.banner-img').css({
                    'height': 'auto'
                });



                // $('.banner-img').css({
                // 'left': ($(window).width() - $('.banner-img').width()) / 2 + 'px',
                // 'bottom': ($(window).height() - $('.banner-img').height()) / 2 + 'px'
                // })
                // settleBanner();




            }
        }

        window.onload = function() {
            settleBanner();
        }

        $(function() {

            setInterval(() => {
                settleBanner();
            }, 100);

            // setTimeout(() => {
            //     settleBanner()
            // }, 1000);


            // settleBanner();
            // alert(888);
            // settleBanner();

            // $(window).on("load", function() {
            //     // alert(3);
            //     settleBanner();
            //     // 
            //     // Handler for .load() called.
            // });



            $('.menu-btn').click(function() {
                $(this).toggleClass('active');

                if ($(this).hasClass('active')) {


                    $('.menu-layer').fadeIn(200);
                    // $('.menu-layer').css({
                    //     'opacity': '0'
                    // });
                    // $('.menu-layer').animate({
                    //     'opacity': '1'
                    // }, 200);
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

                    $(this).next('.level-2').fadeIn(200);
                    // $('.menu-layer')
                } else {

                    $(this).next('.level-2').fadeOut(0);
                    // $('.menu-layer').fadeOut(0);

                }

            })
        })
        </script>