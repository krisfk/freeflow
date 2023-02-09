<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

 global $current_language_code;

 
?>

<?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<footer class="footer-div mt-120px">


    <div class="container pt-4 pb-4 max-width-80p ">




        <div class="row  mt-5 gx-0 ">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">


                <div class="icons-div">

                    <table class="w-100">
                        <tr>
                            <td>
                                <?php

$general_config_id =  $current_language_code=='zh-hant' ? 323:810;


echo $current_language_code=='zh-hant' ? '主辦機構' : 'Organized by';


?>
                            </td>
                        </tr>
                        <tr>
                            <!--  -->
                            <td>



                                <?php if( have_rows('partnership_logos_group_1',$general_config_id )): ?>
                                <?php while( have_rows('partnership_logos_group_1',$general_config_id) ): the_row();                      ?>

                                <a href="<?php echo get_sub_field('link_url');?>" target="_blank"><img
                                        class="top-icon-img"
                                        src="<?php echo wp_get_attachment_image_src(get_sub_field('partnership_logo'),'full')[0];?>"
                                        alt=""></a>


                                <?php endwhile; ?>
                                <?php endif; ?>

                            </td>
                        </tr>
                    </table>

                    <table class="w-100">
                        <tr>
                            <td>

                                <?php
echo $current_language_code=='zh-hant' ? '捐助機構' : 'Funded by';


?>

                            </td>
                            <!-- <td>合作夥伴</td> -->
                        </tr>
                        <tr>
                            <td>




                                <?php if( have_rows('partnership_logos_group_2',$general_config_id )): ?>
                                <?php while( have_rows('partnership_logos_group_2',$general_config_id ) ): the_row();                      ?>

                                <a href="<?php echo get_sub_field('link_url');?>" target="_blank"><img
                                        class="top-icon-img"
                                        src="<?php echo wp_get_attachment_image_src(get_sub_field('partnership_logo'),'full')[0];?>"
                                        alt=""></a>


                                <?php endwhile; ?>
                                <?php endif; ?>


                            </td>
                            <!-- <td> <a href="https://www.hkbu.edu.hk/zh_hk.html" target="_blank"
                                    class="top-icon-img-a"><img style="height:55px;" class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2023/01/bu-logo-1.png"
                                        alt=""></a> <a href="https://www.cgds.com.tw/" target="_blank"
                                    class="top-icon-img-a"><img class="top-icon-img"
                                        src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/bottom-icon-3.png"
                                        alt=""></a></td> -->
                        </tr>
                    </table>

                    <table class="w-100">
                        <tr>
                            <td>

                                <?php
echo $current_language_code=='zh-hant' ? '合作夥伴' : 'In partnership with';


?>

                            </td>
                        </tr>
                        <tr>
                            <td>


                                <?php if( have_rows('partnership_logos_group_3',$general_config_id )): ?>
                                <?php while( have_rows('partnership_logos_group_3',$general_config_id) ): the_row();                      ?>

                                <a href="<?php echo get_sub_field('link_url');?>" target="_blank"><img
                                        class="top-icon-img"
                                        src="<?php echo wp_get_attachment_image_src(get_sub_field('partnership_logo'),'full')[0];?>"
                                        alt=""></a>


                                <?php endwhile; ?>
                                <?php endif; ?>



                            </td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12  form-div">


                <?php
            
            echo do_shortcode('[contact-form-7 id="843" title="freeflow contact form"]');
            ?>

                <!-- <h3 class="mb-3">與我們聯絡</h3>
                <input class="form-control mb-3" type="text" placeholder="姓名">
                <input class="form-control mb-3" type="text" placeholder="電郵">
                <input class="form-control mb-3" type="text" placeholder="訊息">


                <div class="text-end">
                    <a href="javascript:void(0);" class="form-submit-btn">提交</a>

                </div> -->
            </div>
        </div>

        <div class="row footer-small-word gx-0">
            <div class="col-12">

                <div>
                    <?php
                    echo get_field('footer_statement',$general_config_id);
                    ?>
                    <!-- 於新冠肺炎疫情期間拍攝之影像，在場人士均有嚴格遵從當時實行之防疫措施。 <br>
                    所有作品內容均由主辦單位/創作團隊獨立製作，並不代表本計劃及捐助機構之立場或意見。 -->
                </div>


                <div class="row align-items-center mt-4 gx-0">

                    <div class="col-lg-8 col-md-8 col-sm-9 col-9 ">
                        <ul class="footer-menu-ul p-0  ">
                            <li>&copy; 2022 JC FreeFlow</li>
                            <li><a href="javascript:void(0);" class="term-1-btn"><?php
                    echo get_field('footer_term_txt_1',$general_config_id);
                    ?></a></li>
                            <li><a href="javascript:void(0);" class="term-2-btn"><?php
                    echo get_field('footer_term_txt_2',$general_config_id);
                    ?></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 col-3 text-end">
                        <ul class="sns-menu-ul">
                            <li>
                                <a href="<?php echo get_field('ig_url',$general_config_id);?>" target="_blank"
                                    class="sns-icon sns-icon-1-a">
                                    <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-1.png"
                                        alt="">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_field('fb_url',$general_config_id);?>" target="_blank"
                                    class="sns-icon sns-icon-2-a">
                                    <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-2.png"
                                        alt="">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_field('youtube_url',$general_config_id);?>" target="_blank"
                                    class="sns-icon sns-icon-3-a">
                                    <img src="http://64.227.13.14/freeflow/wp-content/uploads/2022/12/sns-icon-3.png"
                                        alt="">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>


            </div>


        </div>

    </div>

</footer>

</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->



</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>