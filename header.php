<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta name="description" content="">
		<meta name="author" content="@rickard2">
  		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="shortcut icon" href="<?php bloginfo("stylesheet_directory") ?>/images/favicon.png" type="image/x-icon">
		<link rel="apple-touch-icon" href="<?php bloginfo("stylesheet_directory") ?>/images/touchicon.png" type="image/png">
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
				
		<?php wp_head(); ?>
	</head>

	<!--[if lt IE 7 ]> <body <?php body_class('ie6'); ?>> <![endif]-->
	<!--[if IE 7 ]> <body <?php body_class('ie7'); ?>> <![endif]-->
	<!--[if IE 8 ]> <body <?php body_class('ie8'); ?>> <![endif]-->
	<!--[if IE 9 ]> <body <?php body_class('ie9'); ?>> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!--> <body <?php body_class('ie6'); ?>> <!--<![endif]-->

		<div id="container">
			<div class="top-box">
				<header role="banner">
					<hgroup>
						<h1><a rel="home" href="<?php bloginfo("url") ?>" title="Back to home page"><?php bloginfo("name") ?></a></h1>
						<h2><?php bloginfo("description") ?></h2>
					</hgroup>
				</header>
				<aside>
					<?php dynamic_sidebar("header") ?> 
				</aside>				
			</div>