<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<!--
As mentioned in the official Bootstrap 3 documentation (http://getbootstrap.com/components/#thumbnails): You can either do it like in this pen, or see more options at:

https://masonry.desandro.com/
https://isotope.metafizzy.co/
http://salvattore.com/
-->

<div class="container position-relative" style="height:1000px;background:#000">



    <span id="circle" class="circle"></span>

</div>

<script type="text/javascript">
$(function() {

    var mouseX = 0,
        mouseY = 0;
    var xp = 0,
        yp = 0;

    $(document).mousemove(function(e) {
        // console.log(5);
        mouseX = e.pageX - 30;
        mouseY = e.pageY - 30;
        console.log(mouseX + ' ' + mouseY);
    });

    setInterval(function() {
        xp += ((mouseX - xp) / 6);
        yp += ((mouseY - yp) / 6);
        $("#circle").css({
            left: xp + 'px',
            top: yp + 'px'
        });
    }, 20);


})
</script>
<?php

get_footer();