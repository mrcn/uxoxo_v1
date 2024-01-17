<?php
/* Template Name: Portfolio With TOC */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="two-column-wrapper">
            <div class="portfolio-column">
                <?php
                while ( have_posts() ) : the_post();
                    // Your portfolio content will go here.
                    // For now, you can just display post content.
                    the_title();
                    the_content();
                endwhile; // End of the loop.
                ?>
            </div><!-- .portfolio-column -->
            <div class="toc-column">
                <div class="sticky-toc">
                    <h3>heading</h3>
                    <h3>heading</h3>
                    <h3>heading</h3>
                    <h3>heading</h3>
                    <h3>heading</h3>
                    <h3>heading</h3>
                    <h3>heading</h3>
                    <h3>heading</h3>
                    <h3>heading</h3>
                    <!-- Insert your code to generate the table of contents here -->
                </div><!-- .sticky-toc -->
            </div><!-- .toc-column -->
        </div><!-- .two-column-wrapper -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
