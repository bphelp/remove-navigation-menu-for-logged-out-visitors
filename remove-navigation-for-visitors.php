<?php
/*
Plugin Name: Remove Navigation Menu For Logged Out Visitors
Plugin URI: http://www.wordpress.com
Description: Removes the navigation menu if a visitor is not logged in.
Version: 1.0
Requires at least: WordPress 3.2.1 / BuddyPress 1.5.1
Tested up to: WordPress 3.5.1 / BuddyPress 1.7 beta 2
License: GNU/GPL 2
Author: @bphelp
Author URI: http://www.wordpress.com
*/

/* Prevent logged out users from accessing the navigation menu */
function bphelp_remove_nav_menu_for_logged_out_visitors() {
	if ( ! is_user_logged_in() ) {
?> 
	<style type="text/css">
        	div#navigation {
                	display: none;
        }
     
    </style>
<?php
	
	}

}
add_action ('bp_head', 'bphelp_remove_nav_menu_for_logged_out_visitors');
?>
