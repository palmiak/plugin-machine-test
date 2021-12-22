<?php
                

/**
* Plugin Name: Buddy test plugin
* Plugin URI: 
* Description: Just a buddy test pluing
* Version: 0.0.1
* Requires at least: 5.7
* Requires PHP:      7.1.0
* Author:            buddy
* Author URI:        https://buddy.works
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       buddy-test
* Domain Path:       /languages
*/

/**
* Include the autoloader
*/
add_action( 'plugins_loaded', function () {
    if ( file_exists(__DIR__ . '/vendor/autoload.php' ) ) {
        include __DIR__ . '/vendor/autoload.php';
    }
}, 1 );

include_once dirname( __FILE__ ). '/inc/functions.php';
include_once dirname( __FILE__ ). '/inc/hooks.php';
include_once dirname( __FILE__ ) . '/admin/buddy-test-plugin/init.php';
