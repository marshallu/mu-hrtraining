<?php
/**
 * MU HR Training
 *
 * This plugin is for Human Resources to display available trainings and allow faculty, staff
 * or students to register for training.
 *
 * @package HR Training
 *
 * Plugin Name: HR Training
 * Plugin URI: https://www.marshall.edu
 * Description: This plugin is for Human Resources to display available trainings and allow faculty, staff or students to register for training.
 * Version: 1.0
 * Author: Christopher McComas
 */

require plugin_dir_path( __FILE__ ) . 'mutrain.php';
require plugin_dir_path( __FILE__ ) . 'hrregistration.php';

/**
 * Proper way to enqueue scripts and styles
 */
function mu_hrtraining_scripts() {
	wp_enqueue_style( 'mu_hrtraining', plugin_dir_url( __FILE__ ) . 'css/mu_hrtraining.css', '', true );
}
add_action( 'wp_enqueue_scripts', 'mu_hrtraining_scripts' );
