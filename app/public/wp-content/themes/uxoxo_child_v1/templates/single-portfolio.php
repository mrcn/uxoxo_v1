<?php
/* Template Name: Portfolio With TOC */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <h1> it's alive? </h1>
        <?php
        while ( have_posts() ) : the_post();

            // Your portfolio content will go here.
            // For now, you can just display post content.
            the_title();
            the_content();

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
