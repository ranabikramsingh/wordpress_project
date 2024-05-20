<?php
/*
* Plugin Name: Contact Form
* Plugin URI: https://wordpress.org/plugins/
* Author: Bikram Singh
* Author URI: https://www.mysite.com/
* Description: This is my Form Contact plugin!
Plugin Name: WP Learn Debugging
* Version: 1.7.2
* Text Domain: admin-contact-form
*/

// Enable the WordPress admin bar
show_admin_bar(true);

function create_contact_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_form_data';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        subject varchar(255) NOT NULL,
        message text NOT NULL,
        submitted_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Hook the table creation function to the activation hook
register_activation_hook(__FILE__, 'create_contact_table');

// Add action hooks to handle form submissions
add_action('admin_post_save_contact_form', 'save_contact_form');
add_action('admin_post_nopriv_save_contact_form', 'save_contact_form');

// function save_contact_form()
// {
//     if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
//         global $wpdb;
//         $table_name = $wpdb->prefix . 'contact_form_data'; // Corrected table name

//         $name = sanitize_text_field($_POST['name']);
//         $email = sanitize_email($_POST['email']);
//         $subject = sanitize_text_field($_POST['subject']);
//         $message = sanitize_textarea_field($_POST['message']);

//         $wpdb->insert($table_name, array(
//             'name' => $name,
//             'email' => $email,
//             'subject' => $subject,
//             'message' => $message,
//         ));
//     }

//     // Redirect back to the referring page
//     wp_safe_redirect(wp_get_referer());
//     exit;
// }

function save_contact_form()
{
    if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'contact_form_data';
        // Log the incoming data

        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
        
        $inserted = $wpdb->insert($table_name, array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ));

        if ($inserted) {
            $redirect_url = add_query_arg('contact_form', 'success', wp_get_referer());
        } else {
            // error_log('Database insert failed');
            $redirect_url = add_query_arg('contact_form', 'error', wp_get_referer());
        }

        wp_safe_redirect($redirect_url);
        exit;
    }

    // Redirect with error if required fields are missing
    $redirect_url = add_query_arg('contact_form', 'error', wp_get_referer());
    wp_safe_redirect($redirect_url);
    exit;
}
