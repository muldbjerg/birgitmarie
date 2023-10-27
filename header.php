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

<div class="site-wrapper">

	<div class="site-content">
		<div class="wrapper">
