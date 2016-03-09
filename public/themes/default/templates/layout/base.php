<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	@if (is_search())
	<meta name="robots" content="noindex, nofollow"/>
	@endif

	<?php wp_head(); ?>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 8]>
<div class="alert alert-warning">
	{{ _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'cutlass') }}
</div>
<![endif]-->

@include('templates.partials.navigation')

<div class="wrap" role="document">
	<div class="content">
		@yield('content')
	</div>
</div>

@include("templates.partials.footer")
<?php wp_footer() ?>
</body>
</html>