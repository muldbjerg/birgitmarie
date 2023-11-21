<?php
/**
 * The header
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri()?>/assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri()?>/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri()?>/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri()?>/assets/favicon/site.webmanifest">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<svg class="filter">
  <filter id='noiseFilter'>
    <feTurbulence 
      type='fractalNoise' 
      baseFrequency='0.7' 
      stitchTiles='stitch'/>
  </filter>
</svg>

<div class="site-wrapper">

	<header class="main-header"> 
		<div class="logo">
			<a href="<?php echo home_url(); ?>">
				<span>Birgit</span> <span>Marie</span> <span>Studio</span>
			</a>
		</div>
		<div class="main-nav">
			<?php
				wp_nav_menu(array(
					'theme_location' => 'main-menu',
					'container' => 'nav',
					'container_class' => 'main-menu',
					'menu_class' => 'nav-menu',
				));
			?>
			<a class="instagram-icon" href="https://www.instagram.com/birgitmariestudio/" target="_blank" rel="noopener">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
					<rect width="256" height="256" fill="none"/>
					<circle cx="128" cy="128" r="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"/>
					<rect x="32" y="32" width="192" height="192" rx="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/>
					<circle cx="180" cy="76" r="12" fill="currentColor"/>
				</svg>
			</a>
		</div>
	</header>

	<div class="site-content">