<?php global $library; $library = get_template_directory_uri().'/library'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php wp_title('-', true, '-'); ?></title>

		<?php // Favicon ?>
		<link rel="icon" href="<?php echo $library; ?>/favicon.png" />
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo $library; ?>/favicon.ico" />
		<![endif]-->

		<?php // Grid, Normalize ?>
		<link rel="stylesheet" href="<?php echo $library ?>/css/core.css">

		<?php // Style ?>
		<link rel="stylesheet" href="<?php echo $library ?>/css/style.min.css">

		<?php // Modules ?>
		<?php get_template_part('content-modules-header', get_post_format()); ?>

		<?php // Pingback ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // Mobile tags ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // Force 'Internet Explorer' to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="wrap">
				<div class="logo">
					<a href="<?php echo get_site_url(); ?>" title="Página inicial do <?php bloginfo();?>">
						<figure>
								<img src="" alt="Logotipo <?php echo bloginfo(); ?>">
						</figure>
					</a>
				</div> <!-- end .logo -->
				<nav>
				</nav>
			</div> <!-- end .wrap -->
		</header>
		<main>
