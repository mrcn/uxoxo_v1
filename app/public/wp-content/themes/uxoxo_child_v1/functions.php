<?php
function my_child_theme_enqueue_styles() {
    $parent_style = 'twentytwentyfour'; // This is the parent theme style handle.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_styles' );


function create_portfolio_post_type() {
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => __('Portfolio'),
                'singular_name' => __('Portfolio Piece')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
            'rewrite' => array('slug' => 'portfolio'),
            // Add other options as needed
        )
    );
}
add_action('init', 'create_portfolio_post_type');


function include_template_from_folder( $template ) {
    $post_types = array('portfolio'); // Add more post types if needed

    if (is_singular($post_types) && file_exists(get_stylesheet_directory() . '/templates/single-portfolio.php')) {
        $template = get_stylesheet_directory() . '/templates/single-portfolio.php';
    }

    return $template;
}
add_filter('template_include', 'include_template_from_folder');




?>
