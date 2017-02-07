<?php
/**
 * This is part of the bb8-from-starwars-with-svg-gsap project.
 *
 * Created by   : Gary Martin
 * Date         : 2/6/17
 *
 * @email       : gary@labworkz.com
 * @domain      : https://www.labworkz.net
 *
 */

/**
 * Plugin Name: BB8 Motion Block
 * Plugin URI: http://www.labworkz.com
 * Description: Making a BB8 graphic (SVG) and bringing him to life (GSAP) was my way of getting some quality time and getting to know the little guy.
 * Version: 1.0
 * Author: <a href="http://www.labworkz.com">LabWorkz LLC</a>
 * Author URI: http://www.labworkz.com
 **/
class BB8
{
    private static $instance = false;

    public static function get_instance()
    {

        if ( ! self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;

    }

    public function __construct()
    {
        self::$instance = $this;

        add_action('init', array($this, 'init'));
    }

    public function init()
    {
        add_action('wp_enqueue_scripts', array($this, 'load_scripts'));
        add_shortcode('bb8-block', array($this, 'renderShortCode'));
    }


    public function load_scripts()
    {
        wp_enqueue_style("TweenMax-js", 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js');
        wp_enqueue_script('bb8-js', plugins_url("js/index.js", __FILE__),array('jquery',"TweenMax-js"));
        wp_enqueue_script('yneggb-js', plugins_url("js/yneggb.js", __FILE__));

    }

    public function load_styles()
    {
        wp_enqueue_style('normalize-css', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css');
        wp_enqueue_style("bb8-css", plugins_url('css/style.css', __FILE__));

    }

    public static function renderShortCode()
    {
        return file_get_contents(plugins_url('view.php', __FILE__));
    }
}

BB8::get_instance();
