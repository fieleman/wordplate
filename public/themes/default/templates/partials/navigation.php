<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			        aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ bloginfo('url') }}">{{ bloginfo('title') }}</a>
		</div>
		<?php wp_nav_menu(array(
			'menu'            => 'primary-menu',
			'theme_location'  => 'primary-menu',
			'depth'           => 2,
			'container'       => 'div',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'navbar',
			'menu_class'      => 'nav navbar-nav navbar-right',
			'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
			'walker'          => new wp_bootstrap_navwalker(),
		)); ?>
	</div>
</nav>