<?php
/**
 * Plugin Name: ak-set-animation
 * Description: アニメーションセッティング
 * Version: 1.1.0
 * Author: Aoba Koukoku Co., Ltd.
 */

defined( 'ABSPATH' ) || exit;

add_action('wp_enqueue_scripts', function() {
	wp_enqueue_style('ak-set-animation', plugin_dir_url( __FILE__ ) . 'style.css'); //style
	wp_enqueue_script('ak-set-animation', plugin_dir_url( __FILE__ ) . 'setAnimation.js');
});