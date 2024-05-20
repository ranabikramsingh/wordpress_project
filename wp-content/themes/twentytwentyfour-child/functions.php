
<?php
    // Call menu for show in Appearance > Menus option
	register_nav_menus(
		array(
			'primary-menu' => __('Top Menu'),
			'navigation-menu' => __('Side Menu')
		)
	);

	function create_contact_form_table()
	{
		global $wpdb;
		$table_name = $wpdb->prefix . 'contact_form_table';

		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			name varchar(255) NOT NULL,
			email varchar(255) NOT NULL,
			subject varchar(255) NOT NULL,
			message text NOT NULL,
			submitted_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
			PRIMARY KEY  (id)
		) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}

	// Hook the function to run when the theme is activated
	add_action('after_switch_theme', 'create_contact_form_table');


	function handle_contact_form_submission()
	{
		if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
			global $wpdb;

			$table_name = $wpdb->prefix . 'contact_form_table';

			$name = sanitize_text_field($_POST['name']);
			$email = sanitize_email($_POST['email']);
			$subject = sanitize_text_field($_POST['subject']);
			$message = sanitize_textarea_field($_POST['message']);

			$wpdb->insert(
				$table_name,
				[
					'name' => $name,
					'email' => $email,
					'subject' => $subject,
					'message' => $message
				]
			);

			wp_redirect(home_url('/thank-you'));
			exit;
		}
	}
    
	// call any one function
	add_action('admin_post_nopriv_contact_form', 'handle_contact_form_submission');
	add_action('admin_post_contact_form', 'handle_contact_form_submission');
  

?>
