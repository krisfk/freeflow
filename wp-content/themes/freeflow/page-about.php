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




<div class="banner-div">



</div>

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-5">


            <table class="float-start">
                <tr>
                    <td> <img class="entry-img w-100"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-3@2x.png" alt="">

                    </td>
                    <td class="subtitle-td align-top">
                        計 <br>
                        劃<br>
                        背<br>
                        景
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

<div class="container yellow-bg-div gx-0 mt-120px">

    <div class="row">

        <div class="col-7">


            <div>
                女性一直被歷史和社會因素所規範。尤其是年輕女性，面對社教化的壓力和家庭的期望，個人發展難免受到影響。 <br><br>

                青少女正在面對來自不同方面的創傷性經歷，例如家庭、伴侶、社會。
                這些經歷往往使她們；<br>
                <div class="orange">
                    ･ 自信心下降 <br>
                    ･ 忽略了自我觀察，在意他人看法<br>
                    ･ 自我認同較低，缺乏安全感<br>
                    ･ 不懂如何應對衝突<br>
                    ･ 情緒狀態處於抑鬱、恐懼、焦慮之中<br>
                    ･ 經常否定自我價值，會覺得自己不值得被愛<br>
                    ･ 渴望被聆聽、被看見、被關心，與人連結<br>
                    ･ 承受著不同程度的壓力
                </div>
                <br>
                因此，認識身體是學習為自己負責的開始，讓少女們找回自己的樣子。透過身體的勞動感受自己的存在，重新建立安全感與自在，回歸自己面對身體時的感覺。

            </div>



        </div>

        <div class="col-5">


            <table class="float-end">
                <tr>

                    <td class="subtitle-td align-top">
                        妳 <br>
                        我<br>
                        同<br>
                        步
                    </td>
                    <td class=" align-bottom"> <img class="entry-img"
                            src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/Asset-4@2x.png" alt="">

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