<?php
//Register assets for Buddy Test Plugin
add_action('init', function () {
    $handle = 'buddy-test-plugin';
    if( file_exists(dirname(__FILE__, 3). "/build/admin-page-$handle.asset.php" ) ){
        $assets = include dirname(__FILE__, 3). "/build/admin-page-$handle.asset.php";
        $dependencies = $assets['dependencies'];
        wp_register_script(
            $handle,
            plugins_url("/build/admin-page-$handle.js", dirname(__FILE__, 2)),
            $dependencies,
            $assets['version']
        );
    }
});

//Enqueue assets for Buddy Test Plugin on admin page only
add_action('admin_enqueue_scripts', function ($hook) {
    if ('toplevel_page_buddy-test-plugin' != $hook) {
        return;
    }
    wp_enqueue_script('buddy-test-plugin');
});

//Register Buddy Test Plugin menu page
add_action('admin_menu', function () {
    add_menu_page(
        __('Buddy Test Plugin', 'buddy-test'),
        __('Buddy Test Plugin', 'buddy-test'),
        'manage_options',
        'buddy-test-plugin',
        function () {
            //React root
            echo '<div id="buddy-test-plugin"></div>';
        }
    );
});
