<?php

$active_plugins = get_option('active_plugins');

if (in_array('elementor/elementor.php', $active_plugins)) {
    // Elementor is active
    // Add your code or functionality here

    function my_custom_admin_notice() {
        ?>
        <div class="notice notice-success is-dismissible">
            <p><?php esc_html_e( 'This is my custom admin notice.', 'text-domain' ); ?></p>
        </div>
        <?php
    }
    add_action( 'admin_notices', 'my_custom_admin_notice' );
    
} else {
    // Elementor is not active
    // Add alternative code or handle the situation
}
