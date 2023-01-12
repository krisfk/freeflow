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

<div class="container">
    <div class="row masonry-grid">
        <div class="col-md-6 col-lg-4 masonry-column">
            <div>
                <a href="http://placeholder.com" class="thumbnail"><img
                        src="http://via.placeholder.com/400x450/3F51B5/fff"></a>
            </div>
            <div>
                <a href="http://placeholder.com" class="thumbnail"><img
                        src="http://via.placeholder.com/400x250/3F51B5/fff"></a>
            </div>
            <div>
                <a href="http://placeholder.com" class="thumbnail"><img
                        src="http://via.placeholder.com/400x550/3F51B5/fff"></a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 masonry-column">
            <div>
                <a href="http://placeholder.com" class="thumbnail"><img
                        src="http://via.placeholder.com/400x150/3F51B5/fff"></a>
            </div>
            <div>
                <a href="http://placeholder.com" class="thumbnail"><img
                        src="http://via.placeholder.com/400x250/3F51B5/fff"></a>
            </div>
            <div>
                <a href="http://placeholder.com" class="thumbnail"><img
                        src="http://via.placeholder.com/400x650/3F51B5/fff"></a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 masonry-column">
            <div>
                <a href="http://placeholder.com" class="thumbnail"><img
                        src="http://via.placeholder.com/400x550/3F51B5/fff"></a>
            </div>
            <div>
                <a href="http://placeholder.com" class="thumbnail"><img
                        src="http://via.placeholder.com/400x450/3F51B5/fff"></a>
            </div>
            <div>
                <a href="http://placeholder.com" class="thumbnail"><img
                        src="http://via.placeholder.com/400x450/3F51B5/fff"></a>
            </div>
        </div>
    </div>
</div>
<?php

get_footer();