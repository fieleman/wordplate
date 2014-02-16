<?php

/**
 * Add a simpler editor toolbar to ACF.
 *
 * @param string $toolbars
 * @return void
 */
add_filter('acf/fields/wysiwyg/toolbars', function($toolbars)
{
	$toolbars['Simple' ] = [];
	$toolbars['Simple' ][1] = ['bold', 'italic', 'underline'];

	if (!array_search('code' , $toolbars['Full' ][2]))
	{
		unset($toolbars['Full' ][2][$key]);
	}

	return $toolbars;
});

/**
 * Add custom login error message.
 */
add_filter('login_errors', function() use ($config)
{
	return $config['login_error_message'];
});

/**
 * Custom login logo url.
 *
 * @return string
 */
add_filter('login_headerurl', function() use ($config)
{
	return $config['login_header_url'];
});

/**
 * Custom footer text.
 *
 * @return string
 */
add_filter('admin_footer_text', function() use ($config)
{
	return $config['footer_text'];
});

/**
 * Force perfect JPG images.
 *
 * @return integer
 */
add_filter('jpeg_quality', function()
{
	return 100;
});

/**
 * Filters that allow shortcodes in text widgets.
 */
add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode');

/**
 * Force slug to update on save.
 *
 * @return array
 */
add_filter('wp_insert_post_data', function($data, $postarr) {
	if (!in_array($data['post_status'], ['draft', 'pending', 'auto-draft']))
	{
		$title = remove_accents($data['post_title']);
		$data['post_name'] = sanitize_title_for_query($title);
	}

	return $data;
}, 99, 2);

/**
 * Modifying TinyMCE editor to remove unused items.
 * http://www.tinymce.com/wiki.php/Controls
 *
 * @return array
 */
add_filter('tiny_mce_before_init', function($init) use ($config)
{
	// Add block format elements you want to show in dropdown
	$init['theme_advanced_blockformats'] = implode(',', $config['tinymce_blockformats']);
	$init['theme_advanced_disable'] = implode(',', $config['tinymce_disabled']);

	return $init;
});

/**
 * Remove screen options tab.
 *
 * @return void
 */
add_filter('screen_options_show_screen', function()
{
    return false;
});