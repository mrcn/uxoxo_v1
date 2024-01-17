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
                    the_title();

                    $content = get_the_content();
                    $doc = new DOMDocument();
                    @$doc->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
                    
                    $headings = [];
                    foreach (['h1', 'h2', 'h3', 'h4', 'h5', 'h6'] as $h) {
                        foreach ($doc->getElementsByTagName($h) as $node) {
                            $id = sanitize_title($node->textContent);
                            $headings[$id] = $node->textContent;
                            $node->setAttribute('id', $id);
                        }
                    }

                    echo $doc->saveHTML();

                endwhile; // End of the loop.
                ?>

 
            </div><!-- .portfolio-column -->
            <div class="toc-column">
                <div class="sticky-toc">
                <?php
                    if (!empty($headings)) {
                        echo '<ul>';
                        foreach ($headings as $id => $text) {
                            echo '<li><a href="#' . $id . '">' . esc_html($text) . '</a></li>';
                        }
                        echo '</ul>';
                    }
                ?>


                    <!-- Insert your code to generate the table of contents here -->
                </div><!-- .sticky-toc -->
            </div><!-- .toc-column -->
        </div><!-- .two-column-wrapper -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
