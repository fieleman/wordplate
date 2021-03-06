<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?php asset('css/style.css') ?>">
</head>
<body <?php body_class(); ?>>

    <header id="masthead" class="site-header" role="banner">
        <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
            <?php wp_nav_menu(['theme_location' => 'primary-menu', 'menu_class' => 'nav-menu']); ?>
        </nav>
    </header>
