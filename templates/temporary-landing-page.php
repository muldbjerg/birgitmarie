<?php
/**
 * Template Name: Temporary Landing Page Template
 * Template Post Type: page
 *
 */

?>

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




            <div class="index">

                <h1>Birgit Marie Studio</h1>
                <a href="https://www.instagram.com/birgitmariestudio/" target="_blank">@birgitmariestudio</a>
            </div>
        </div>
    </div>
    
    <style>
        /* body{
            background-color: #E9E1D6;
        } */
        
        .index{
            width: 100%;
            text-align: center;
        }
        
        h1{
            margin: 10vh 0 40px;
            font-size: 8vw;
            font-family: system-ui;
            text-transform: uppercase;
            color: #8F6B5D;
            
        }
        
        .index a,
        .index a:visited
        {
            font-size:  clamp(2rem, 5vw, 6rem);
            font-family: system-ui;
            text-decoration: none;
            color: #C88769;
            transition: all 0.15s ease-out;
        }
        
        .index a:hover{
            color: #67695E
        }
        </style>

</body>
</html>