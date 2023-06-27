<?php
/**
 * Template Name: Custom Page Template
 */

get_header(); ?>
<div class="container">
    <?php
    if (function_exists('rank_math_the_breadcrumbs') && !is_front_page()) {
        rank_math_the_breadcrumbs();
    }
    ?>
</div>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' );

        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer('template');
