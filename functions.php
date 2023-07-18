<?php

$active_plugins = get_option('active_plugins');

if (in_array('elementor/elementor.php', $active_plugins)) {
    // Elementor is active
    // Add your code or functionality here

    function my_custom_admin_notice() {
        include_once('elementor-addons/addons.php');
    }
    add_action( 'admin_notices', 'my_custom_admin_notice' );
    
} else {
    function my_custom_admin_notice() {
        ?>
        <div class="notice notice-warning">
        <p><?php echo 'this theme requires elementor to be installed.'; ?></p>
        </div>
        <?php
    }
    add_action( 'admin_notices', 'my_custom_admin_notice' );
}
