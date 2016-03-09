<?php

/*
 * Set theme defaults.
 */
add_action('after_setup_theme', function () {
	// Add primary WordPress menu.
	register_nav_menu('primary-menu', __('Primary Menu', 'default'));
});