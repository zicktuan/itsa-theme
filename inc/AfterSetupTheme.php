<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'No direct script access allowed' );
}

/**
* @package AfterSetupTheme
* @version 1.0
* @author lookawesome team
*
* Class after setup theme
*/
// file nay de setup cac setting luc active cai theme len nhe.
// vv/ noi chung ong can luc active len no lam gi thi viet vao day.
class AfterSetupTheme{

	public function __construct(){
		add_action( 'after_setup_theme', array( $this, 'setup' ) );

		add_filter( 'the_title', array( $this, 'siteTitle' ) );

		add_action( 'widgets_init', array( $this, 'widgetsInit' ) );

        add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );
	}
	
	public function setup(){
		load_theme_textdomain( 'bookawesome', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'menus' );

		// set kich thuoc anh upload. biet roi ys gi. them vao day
		// add_theme_support( 'post-thumbnails' );
		$this->registerSizeImg();

        global $content_width;

		if ( ! isset( $content_width ) ) $content_width = 640;

		// dang ky menu
		register_nav_menus(
			array(
				'awe-header-menu'   => __( 'Primary Menu', 'bookawesome' ),
				'awesome-footer-menu' => __( 'Footer Menu', 'bookawesome' )
			)
		);
	}

    function wpse156165_menu_add_class( $atts, $item, $args ) {
        if( $args->theme_location == 'main-menu' ) {
            $atts['class'] = 'menu-link';
        }
        return $atts;
    }

	public function registerSizeImg()
	{
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'itsa-thumbnail-74x74', 74, 74, array( 'center', 'center' ) );
		add_image_size( 'itsa-thumbnail-70x70', 70, 70, true );
		add_image_size( 'itsa-thumbnail-856x490', 856, 490, array( 'center', 'center' ) );
	}

	public function siteTitle($title){
		if ( $title == '' ) {
			return '&rarr;';
		} else {
			return $title;
		}
	}

	public function widgetsInit(){

		register_sidebar( array (
			'name'          => __( 'Blog Sidebar', 'bookawesome' ),
			'id'            => 'blog-sidebar-area',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => "</div>",
			'before_title'  => '<h5 class="widgettitle"><span>',
			'after_title'   => '</span></h5>',
			) 
		);

        register_sidebar(
            [
                'name'          => __( 'Footer Services', 'bookawesome' ),
                'id'            => 'awe-footer-service-area',
            ]
        );
        register_sidebar(
            [
                'name'          => __( 'Footer Contacts', 'bookawesome' ),
                'id'            => 'awe-footer-address-area',
            ]
        );


    }
}
new AfterSetupTheme;
