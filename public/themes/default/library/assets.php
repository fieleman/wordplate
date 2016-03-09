<?php

/*
 * Enqueue and register scripts the right way.
 */
add_action('wp_enqueue_scripts', function () {
	wp_deregister_script('jquery');

	// wp_enqueue_style('wordplate', elixir('styles/wordplate.css'));

	wp_register_script('default', asset('js/all.js'), '', '', true);
	wp_enqueue_script('default');
});