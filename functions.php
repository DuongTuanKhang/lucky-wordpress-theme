<?php
/**
 * Theme setup and front-end assets for Lucky.
 *
 * @package Lucky
 */

/**
 * Build a URL for an asset bundled with this theme.
 *
 * @param string $path Asset path relative to the theme's assets directory.
 * @return string
 */
function lucky_theme_asset( $path ) {
    return trailingslashit( get_template_directory_uri() ) . 'assets/' . ltrim( $path, '/' );
}

/** Set up theme features. */
function lucky_theme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'lucky_theme_setup' );

/** Enqueue the original landing-page styles and fonts. */
function lucky_enqueue_assets() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();
    $styles = array(
        'lucky-reset'      => 'assets/css/reset.css',
        'lucky-styles'     => 'assets/css/styles.css',
        'lucky-responsive' => 'assets/css/responsive.css',
    );

    foreach ( $styles as $handle => $relative_path ) {
        $file = $theme_dir . '/' . $relative_path;
        wp_enqueue_style(
            $handle,
            $theme_uri . '/' . $relative_path,
            array(),
            file_exists( $file ) ? (string) filemtime( $file ) : null
        );
    }

    wp_enqueue_style(
        'lucky-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@100..800&display=swap',
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts', 'lucky_enqueue_assets' );