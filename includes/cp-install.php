<?php

// CollabPress Install
function cp_install() {

	// CollabPress Defaults
	$cp_defaults = array( 'dashboard_meta_box' => 'enabled', 'email_notifications' => 'disabled', 'num_recent_activity' => '4', 'user_role' => 'manage_options', 'settings_user_role' => 'manage_options', 'shortcode_user_role' => 'all', 'num_users_display' => '10', 'debug_mode' => 'disabled', 'presstrends' => 'no' );
	add_option('cp-options', $cp_defaults);
	
}