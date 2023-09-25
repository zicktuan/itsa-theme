<?php

/**
 * 
 */
class AwesomeScripts
{

	public function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'frontendScripts'));
		add_action('wp_enqueue_scripts', array($this, 'frontendStyles'));
        add_action( 'admin_enqueue_scripts', array($this, 'backendScripts') );
	}

	public function frontendScripts()
	{
		global $awesomeTheme;

		wp_enqueue_script('jquer-1.12.4', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.11.2.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('popper-min', get_template_directory_uri() . '/assets/js/plugins/popper.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/plugins/bootstrap.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/plugins/swiper-bundle.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/plugins/aos.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/plugins/waypoints.min.js', array('jquery'), $awesomeTheme->version, true);
        wp_enqueue_script('back-to-top', get_template_directory_uri() . '/assets/js/plugins/back-to-top.js', array('jquery'), $awesomeTheme->version, true);
        wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/plugins/jquery.counterup.min.js', array('jquery'), $awesomeTheme->version, true);
        wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/plugins/appear.min.js', array('jquery'), $awesomeTheme->version, true);
        wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/js/plugins/jquery.magnific-popup.min.js', array('jquery'), $awesomeTheme->version, true);
        wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $awesomeTheme->version, true);

        wp_localize_script('appear', 'awe_admin',
            array(
                'url' => admin_url(),
            )
        );
	}

	public function frontendStyles()
	{
		global $awesomeTheme;
        wp_enqueue_style('all', get_template_directory_uri() . '/assets/css/plugins/all.min.css', $awesomeTheme->version, true);
        wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/plugins/flaticon.css', $awesomeTheme->version, true);
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/plugins/bootstrap.min.css', $awesomeTheme->version, true);
        wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/plugins/swiper-bundle.min.css', $awesomeTheme->version, true);
        wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/plugins/aos.css', $awesomeTheme->version, true);
        wp_enqueue_style('magnific', get_template_directory_uri() . '/assets/css/plugins/magnific-popup.css', $awesomeTheme->version, true);
		wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', $awesomeTheme->version, true);
	}

	public function backendScripts() {
        global $awesomeTheme;
        // wp_enqueue_script('sweetalert2', get_template_directory_uri() . '/assets/lib/sweetalert2/sweetalert2.js', array('jquery'), $awesomeTheme->version, true);
        // wp_enqueue_style('sweetalert2', get_template_directory_uri() . '/assets/lib/sweetalert2/sweetalert2.css', $awesomeTheme->version, true);
    }
}
?>