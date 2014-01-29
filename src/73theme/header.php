<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		    <meta name='description' content='Mason and Rye' />
			<meta name='keywords' content='Mason, Rye, Food, Recipe, Recipes, homebrew, whiskey, dwarves, fortress' />
			<meta name='author' content='Beau Bouchard' />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
			<header id="header" role="banner">
				<section id="branding">
					<div id="site-title"><?php if ( ! is_singular() ) { echo '<h1>'; } ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?>
					</div>
					
				</section>
				<nav id="menu" role="navigation">
					
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); 
					
					//<div id="search">
					//	 get_search_form(); 
					//</div>
					//<div id="site-description"> bloginfo( 'description' ); </div> ?>
				</nav>
			</header>
			<div id="container">
			
			
			