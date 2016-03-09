<?php

 /*
  * Remove menu items depending on user role.
  */
//add_action('admin_head', function () {
//    $items = [
//        'comments',
//        'dashboard',
//        'links',
//        'media',
//    ];
//
//    // Hide for none administrators.
//    if (!current_user_can('manage_options')) {
//        $items = array_merge($items, [
//            'appearance',
//            'plugins',
//            'settings',
//            'tools',
//        ]);
//    }
//
//    $elements = implode(', #menu-', $items);
//
//    echo sprintf('<style> #menu-%s { display: none !important; } </style>', $elements);
//});

/*
 * Remove links from admin toolbar.
 */
//add_action('admin_bar_menu', function ($menu) {
//    $items = [
//        'comments',
//        'wp-logo',
//        'edit',
//        'appearance',
//        'view',
//        'new-content',
//        'updates',
//        'search',
//    ];
//
//    foreach ($items as $item) {
//        //$menu->remove_node($item);
//    }
//}, 999);


/*
 * Remove dashboard widgets.
 */
//add_action('wp_dashboard_setup', function () {
//    global $wp_meta_boxes;
//
//    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
//    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
//    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
//    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
////     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
//    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
//    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
//    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
//    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
//});