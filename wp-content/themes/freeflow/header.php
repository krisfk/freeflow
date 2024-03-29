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


global $current_language_code;
$current_language_code = apply_filters( 'wpml_current_language', null );

$general_config_id =  $current_language_code=='zh-hant' ? 323:810;


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


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

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


    <div class="lightbox-layer search-layer">

        <div class="container yellow-bg-div gx-0 photo-yellow-bg-div position-relative">


            <div class="row">


                <div class="col-12">

                    <a href="javascript:void(0);" class="lightbox-close-btn"></a>

                </div>
                <div class="col-12">

                    <div class="lightbox-enlarge-photo-div position-relative">
                        <!-- <a href="javascript:void(0);" class="photo-album-arrow photo-album-arrow-l"></a> -->
                        <!-- <a href="javascript:void(0);" class="photo-album-arrow photo-album-arrow-r"></a> -->

                        <!-- <img class="w-100 lightbox-enlarge-photo" src="" alt=""> -->
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="lightbox-layer video-layer">

        <div class="container yellow-bg-div gx-0 photo-yellow-bg-div position-relative">


            <div class="row">


                <div class="col-12">

                    <a href="javascript:void(0);" class="lightbox-close-btn"></a>

                </div>
                <div class="col-12">

                    <div class="lightbox-enlarge-photo-div position-relative video">





                        <!-- <a href="javascript:void(0);" class="photo-album-arrow photo-album-arrow-l"></a> -->
                        <!-- <a href="javascript:void(0);" class="photo-album-arrow photo-album-arrow-r"></a> -->

                        <!-- <img class="w-100 lightbox-enlarge-photo" src="" alt=""> -->
                    </div>
                </div>
            </div>
        </div>



    </div>


    <div class="lightbox-layer photo-layer">

        <div class="container yellow-bg-div gx-0 photo-yellow-bg-div position-relative">


            <div class="row">


                <div class="col-12">

                    <a href="javascript:void(0);" class="lightbox-close-btn"></a>

                </div>
                <div class="col-12">

                    <div class="lightbox-enlarge-photo-div position-relative">
                        <a href="javascript:void(0);" class="photo-album-arrow photo-album-arrow-l"></a>
                        <a href="javascript:void(0);" class="photo-album-arrow photo-album-arrow-r"></a>

                        <img class="w-100 lightbox-enlarge-photo" src="" alt="">
                    </div>
                </div>
            </div>
        </div>



    </div>


    <div class="lightbox-layer term-1">


        <div class="container yellow-bg-div gx-0 terms-yellow-bg-div">


            <div class=" row">


                <div class="col-12">

                    <a href="javascript:void(0);" class="lightbox-close-btn"></a>

                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 ">
                    <h2 class="orange">

                        <?php echo get_field('term_title',$general_config_id);?>
                        <!-- 使用條款 -->

                    </h2>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12  terms-content-div">
                    <?php echo get_field('term_content',$general_config_id);?>

                    <!-- 本網站所含信息僅供一般參考之用。該信息由賽馬會「自主・流」身體律動計劃提供。本網站所載的全部內容及資料，包括但不限於網站的美術設計、瀏覽連繫及軟件程式，均屬賽馬會「自主・流」身體律動計劃所有，且受版權保護。任何人士如未獲計劃之合作機構事先給予書面許可，一律禁止轉載、發放或擅用本網站的任何內容或資料。
                    <br> <br>

                    賽馬會「自主・流」身體律動計劃會盡力發放最新以及最準確的信息，但不對網站或網站上包含的信息、產品、服務或相關圖形的適用而負上任何責任。因此，對此類信息的任何依賴均由用戶自行承擔風險。<br> <br>

                    在任何情況下，賽馬會「自主・流」身體律動計劃均不對任何損失或損害負責，包括任何損失或損害，或因使用本網站引起或與之相關的數據或利潤損失而引起的任何損失或損害。<br> <br>

                    本網站包含指向不受賽馬會「自主・流」身體律動計劃控制的第三者網站連結。賽馬會「自主・流」身體律動計劃無法控制這些網站的性質、內容和用途。因此，亦不為從任何連結網站接收得來的網絡播放或任何其他傳輸內容而負責。
                    <br> <br>
                    賽馬會「自主・流」身體律動計劃會盡一切努力保持網站正常運行，但並不會為無法控制的技術問題而導致網站暫時無法使用的相關情況承擔任何責任。<br> <br>

                    有關使用本網站任何部分的所有使用條款和條件以及免責聲明均以中文和英文書寫。中英文版本如有出入，概以英文為準。
                    <br> <br>
                    所有作品內容均由主辦單位/創作團隊獨立製作，並不代表本計劃及捐助機構之立場或意見。 -->
                </div>
            </div>
        </div>

    </div>

    <div class="lightbox-layer term-2">


        <div class="container yellow-bg-div gx-0 terms-yellow-bg-div">


            <div class=" row">


                <div class="col-12">

                    <a href="javascript:void(0);" class="lightbox-close-btn"></a>

                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 ">
                    <h2 class="orange">
                        <!-- 私隱政策 -->
                        <?php echo get_field('privacy_title',$general_config_id);?>


                    </h2>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12  terms-content-div">

                    <?php echo get_field('privacy_content',$general_config_id);?>


                    <!-- 本私隱政策描述了我們在閣下使用服務時收集、使用和披露信息的政策和程序，並列明閣下的私隱權以及法律保障。 <br><br>

                    我們會使用閣下的個人數據來提供和改進服務。通過使用服務，閣下同意按照本私隱政策收集和使用信息。 <br><br>

                    <span class="middle-size purple"> 定義</span> <br>
                    就本私隱政策而言： <br>
                    <ul>
                        <li><span class="orange">帳戶</span> 是指為閣下創建的用於使用我們的服務或我們的部分服務的唯一帳戶。</li>
                        <li><span class="orange">公司</span> (在本協議中稱為“公司”、“我們”、“我們”或“我們的”)是指賽馬會「自主・流」身體律 動計劃。</li>
                        <li><span class="orange">Cookie</span> 是網站放置在閣下的計算機、移動設備或任何其他設備上的小文件，其中包含閣下在該網站 的多種用途中的瀏覽歷史詳細信息。
                        </li>
                        <li> <span class="orange">國家</span> 是指：中國香港特別行政區。</li>
                        <li> <span class="orange">設備</span> 是指可以訪問服務的任何設備，例如計算機、手機或數字平板電腦。</li>
                        <li><span class="orange">個人數據</span> 是與已識別或可識別個人相關的任何信息。</li>
                        <li> <span class="orange">服務</span> 是指網站。</li>
                        <li><span class="orange">服務提供商</span> 是指代表公司處理數據的任何自然人或法人。指本公司僱用的第三方公司或個人，以促
                            進本服務、代表本公司提供本服務、執行與本服務相關的服務或協助本公司分析本服務的使用情況。</li>
                        <li> <span class="orange">第三方社交媒體服務</span> 是指用戶可以登錄或創建帳戶以使用服務的任何網站或任何社交網絡網站。</li>
                        <li><span class="orange">使用數據</span> 是指自動收集的數據，無論是通過使用服務還是從服務基礎設施本身生成的(例如，頁面訪 問的持續時間)。</li>
                        <li> <span class="orange">網站</span> 是指JCFreeFlow，可從 http://www.jcfreeflow.hk</li>
                        <li> <span class="orange">閣下</span> 是指使用服務的個人，或代表該個人訪問或使用服務的公司或其他法律實體(如適用)。</li>
                    </ul>

                    <span class="middle-size purple">
                        數據收集、使用和保留</span> <br>

                    <span class="orange">個人數據</span> <br>

                    在使用我們的服務時，我們可能會要求閣下向我們提供某些可用於聯繫或識別閣下的個人身份信息。使用服務時會自動收集使用數據。<br><br>

                    使用數據可能包括閣下設備的互聯網協議地址 (例如 IP
                    地址)、瀏覽器類型、瀏覽器版本、閣下使用的我們服務的頁面、使用的時間和日期、在這些頁面上花費的時間、唯一設備等信息標識符和其他診斷數據。<br><br>

                    當閣下使用服務時，我們可能會自動收集某些信息，包括但不限於閣下使用的手持設備類型、閣下的手持設備 ID、 IP 地址、操作系統、互聯網瀏覽器類型和相關數據。<br><br>

                    當閣下使用我們的服務或通過手提設備使用服務時，我們還可能收集閣下的瀏覽器發送的信息<br><br>。

                    <span class="orange">來自第三方社交媒體服務的信息</span> <br>
                    如果閣下決定通過第三方社交媒體服務註冊或以其他方式授予我們使用第三方社交媒體服務的權限，我們可能會收集閣下與第三方社交媒體服務帳戶相關聯的個人數據，例如閣下的姓名、電子郵件地址、活動或與該帳戶關聯的聯繫人列表。<br><br>

                    閣下還可以選擇通過第三方社交媒體服務的帳戶與公司分享其他信息。如果閣下選擇在註冊期間或以其他方式提供此類信息和個人數據，即表示閣下允許公司以符合本私隱政策的方式使用、共享和存儲這些信息和個人數據。<br><br>

                    <span class="orange"> Cookies</span><br>
                    我們使用 Cookies 和類似的跟踪技術來跟踪活動在我們的服務上並存儲某些信息。使用的跟踪技術是用於收集和跟踪信息以及改進和分析我們的服務的信標、標籤和腳本。
                    <br><br>
                    <span class="orange">個人資料收集和使用</span><br>
                    公司將僅在本私隱政策中規定的目的所需的時間內保留閣下的個人資料。我們將在必要的範圍內保留和使用閣下的個人數據，以履行我們的法律義務（例如，如果我們需要保留數據以遵守適用的法律）、解決爭議並執行我們的法律協議和政策。
                    <br><br>
                    公司還將保留使用數據用於內部分析。使用數據通常會保留較短的時間，除非該數據用於加強安全性或改進我們服務的功能，或者我們在法律上有義務將這些數據保留更長的時間。
                    <br><br>
                    <span class="orange">本私隱政策的更改</span> <br>
                    我們會更新私隱政策，建議閣下定期查看本私隱政策以了解任何更改。本私隱政策的更改一經發佈在此頁面上即生效。
                    <br><br>
                    <span class="orange"> 聯絡我們</span> <br>
                    如果閣下對本私隱政策有任何疑問，閣下可以通過電子郵件聯繫我們：
                    <a href="mailto:freeflowjc.info@gmail.com" target="_blank"
                        class="orange">freeflowjc.info@gmail.com</a> -->

                </div>
            </div>
        </div>

    </div>

    <div class="menu-layer">

        <div class="menu-div">

            <ul class="lang-switcher">

                <li class="me-3">

                    <?php
                $home_url = apply_filters( 'wpml_home_url', get_option( 'home' ) );

                ?>
                    <a href="<?php echo $home_url;?>/">
                        <?php

echo $current_language_code=='zh-hant' ? '主頁' : 'Home';

?>
                    </a>

                </li>



                <?php

$langs= icl_get_languages('skip_missing=0&orderby=custom&order=asc&link_empty_to=');


if($current_language_code=='zh-hant')
{
?>
                <li class="me-3"><a class="active" href="<?php echo $langs['zh-hant']['url'];?>">中</a></li>
                <li><a href="<?php echo $langs['en']['url'];?>">EN</a></li>

                <?php
}

if($current_language_code=='en')
{
?>
                <li class="me-3"><a href="<?php echo $langs['zh-hant']['url'];?>">中</a></li>
                <li><a class="active" href="<?php echo $langs['en']['url'];?>">EN</a></li>
                <?php
}

?>


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
                    <a href="<?php echo get_field('ig_url',$general_config_id)?>" target="_blank"
                        class="sns-icon sns-icon-1-a">
                        <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-1.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_field('fb_url',$general_config_id)?>" target="_blank"
                        class="sns-icon sns-icon-2-a">
                        <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-2.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_field('youtube_url',$general_config_id)?>" target="_blank"
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


        <svg id="cursor" width="120" height="120">

            <circle cx="60" cy="60" r="20" fill="none" stroke="#605ed3" stroke-width="2" class="cursor-circle"></circle>
        </svg>



        <!-- <span id="circle" class="circle"> -->

        <!-- 
        <svg id="circle" class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="50" />
        </svg> -->

        <!-- </span> -->


        <a class="d-none skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'freeflow' ); ?></a>



        <div class="curve-bg fout"></div>


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


            // if (!$('body').hasClass('home')) {

            $('.curve-bg').css({
                'top': ($('.banner-div').height() / 1.5) + 'px'
            });

            $('.curve-bg').height($('body').height() - $('.banner-div').height());

            $('.curve-bg').css({
                'display': 'block'
            });

            // $('#page').height($('body').height());

            // }
        }

        window.onload = function() {
            settleBanner();
        }

        // function home_curve_fadein() {

        //     $('.curve-bg').animate({
        //         'opacity': '0.7'
        //     }, 4000, 'linear', function() {
        //         home_curve_fadeout();
        //     });
        // }


        // function home_curve_fadeout() {
        //     $('.curve-bg').animate({
        //         'opacity': '0.1'
        //     }, 4000, 'linear', function() {
        //         home_curve_fadein();
        //     });
        // }

        $(function() {


            $(window).scroll(function(event) {
                var scroll = $(window).scrollTop();


                if ($('.menu-btn').hasClass('active')) {
                    $('.menu-btn-txt').fadeIn(0);
                } else {
                    if (scroll > 100 && $(window).width() > 991) {
                        $('.menu-btn-txt').css({
                            'opacity': '0'
                        })
                    } else {
                        $('.menu-btn-txt').css({
                            'opacity': '1'
                        })

                    }
                }



            });




            $('.three-dots-a').click(function() {

                $(this).next('.addtoany_shortcode').fadeIn(200);
            })
            $('.form-submit-btn').click(function() {

                $('.wpcf7-submit').click();
            })

            // 7qB6dtbavXI


            // home_curve_fadein();

            //  $('#a').animate({left: '250px'}, 1000, 'linear');




            setTimeout(() => {


                $('#cursor').fadeIn(1000);

                // $('#page').height($('body').height() + $('footer').height() - $('.banner-img')
                //     .height() + 1000);
            }, 1000);


            let cursor = document.getElementById("cursor");
            let circle = document.querySelector(".cursor-circle");

            let setCursorPosition = function(e) {

                // $('.cursor').css({
                //     'opacity': '1'
                // });
                let xPosition = e.clientX - cursor.clientWidth / 2 + "px";
                let yPosition = e.clientY - cursor.clientHeight / 2 + "px";
                cursor.style.transform =
                    "translate(" + xPosition + "," + yPosition + ") scale(1)";
                return {
                    x: xPosition,
                    y: yPosition - 10
                };
            };

            document.addEventListener("mousemove", e => setCursorPosition(e));


            let scaleCursor = function(e, scale) {

                setCursorPosition(e);
                cursor.style.transform =
                    "translate(" +
                    setCursorPosition(e).x +
                    "," +
                    setCursorPosition(e).y +
                    ") scale(" +
                    scale +
                    ")";
            };




            setInterval(() => {
                settleBanner();
            }, 100);




            setInterval(() => {

                if ($('.curve-bg').hasClass('fout')) {
                    console.log('fin');
                    $('.curve-bg').removeClass('fout');
                } else {
                    console.log('fout');

                    $('.curve-bg').addClass('fout');
                }
            }, 4000);









            $('.menu-btn').click(function() {

                if ($(window).width() > 991) {
                    // $('.menu-btn-txt').fadeIn(0);
                    $('.menu-btn-txt').css({
                        'opacity': '1'
                    })
                }
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

                    var scroll = $(window).scrollTop();

                    if (scroll > 100 && $(window).width() > 991) {
                        $('.menu-btn-txt').css({
                            'opacity': '0'
                        })
                    } else {
                        $('.menu-btn-txt').css({
                            'opacity': '1'
                        })

                    }


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

            $('.lightbox-close-btn').click(function() {

                $('.video').html('');


                $('.lightbox-enlarge-photo').attr('src', '');
                $('.lightbox-layer').fadeOut(0);
                $('.lightbox-enlarge-photo').removeClass('lazyloaded')

            })

            $('.search-icon-a').click(function() {
                // $('.lightbox-layer.search-layer').fadeIn(200);


                $(this).fadeOut(0);
                $(this).css({
                    'opacity': '0'
                });
                $('.search-ui-div').fadeIn(200)
            })

            $('.term-1-btn').click(function() {

                $('.lightbox-layer.term-1').fadeIn(200);

            })

            $('.term-2-btn').click(function() {

                $('.lightbox-layer.term-2').fadeIn(200);


            })

            $('.orange-bubble-know-more').click(function() {

                var code = $(this).attr('rel');

                $('.lightbox-layer.video-layer').fadeIn(200);

                var video_html =
                    '<iframe width="560" height="315" src="https://www.youtube.com/embed/' + code +
                    '?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';

                $('.video').html(video_html);

            })






            var photo_arr = [];
            var current_index;

            for (i = 0; i < $('.album-a').length; i++) {
                photo_arr.push($('.album-a').eq(i).attr('rel'));
            }
            console.log(photo_arr);

            $('.album-a').click(function() {
                var select_url = $(this).attr('rel');
                console.log(photo_arr);
                console.log(select_url);

                var index = photo_arr.indexOf(select_url);
                current_index = index;

                if ($(this).attr('rel')) {
                    // alert(6);
                    $('.lightbox-layer.photo-layer').fadeIn(200);
                    var photo_url = $(this).attr('rel');
                    $('.lightbox-enlarge-photo').attr('src', '');
                    $('.lightbox-enlarge-photo').attr('src', photo_arr[current_index]);
                    $('.lightbox-enlarge-photo').addClass('lazyloaded');
                }


            })

            $('.m-album-a').click(function() {

                $(this).prev('.album-a').click();

                if (!$(this).prev('.album-a').length) {

                    // alert(6);
                    var enlarge_foto = $(this).attr('rel');
                    // alert(enlarge_foto);
                    $('.album-a[rel="' + enlarge_foto + '"]').click();
                }

            })
            $('.photo-album-arrow.photo-album-arrow-r').click(function() {

                current_index++;

                if (current_index >= photo_arr.length) {
                    current_index = 0;
                }

                $('.lightbox-enlarge-photo').attr('src', '');
                $('.lightbox-enlarge-photo').attr('src', photo_arr[current_index]);
                $('.lightbox-enlarge-photo').removeClass('lazyloaded');

                $('.lightbox-enlarge-photo').addClass('lazyloaded');


            });

            $('.photo-album-arrow.photo-album-arrow-l').click(function() {


                current_index--;

                if (current_index < 0) {
                    current_index = photo_arr.length - 1;
                }

                $('.lightbox-enlarge-photo').attr('src', '');
                $('.lightbox-enlarge-photo').attr('src', photo_arr[current_index]);
                $('.lightbox-enlarge-photo').removeClass('lazyloaded');

                $('.lightbox-enlarge-photo').addClass('lazyloaded');



            });
        })
        </script>