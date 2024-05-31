<?php

if ( ! function_exists( 'fjstarter_support' ) ) :
	function fjstarter_support() 
    {
		add_theme_support( 'custom-logo', array(
            'height' => 200,
            'width'  => 200,
        ) );
	}
endif;

add_action( 'after_setup_theme', 'fjstarter_support' );


if ( ! function_exists( 'fjstarter_styles' ) ) :
	function fjstarter_styles() 
    {
		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'fjstarter-style',
            get_template_directory_uri() . '/assets/css/main.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'fjstarter-style' );
	}
endif;

add_action( 'wp_enqueue_scripts', 'fjstarter_styles' );
add_action( 'login_enqueue_scripts', 'fjstarter_styles' );

if ( ! function_exists( 'fjstarter_register_menu' ) ) :
    function fjstarter_register_menu()
    {
        register_nav_menus(
            array(
                'main-menu' => __('Menu Principal'),
            )
        );
    }
endif;

add_action('init', 'fjstarter_register_menu');

/**
 * Desabilitar códigos do wordpress
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');


require get_template_directory() . '/inc/custom-login.php';