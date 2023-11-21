<?php

// Remove scripts and styles from parent theme
add_action( 'wp_enqueue_scripts', 'child_deregister_styles_scripts', 11 );
function child_deregister_styles_scripts() {
	wp_dequeue_style( 'font-awesome' );
	wp_dequeue_style( 'cashier-style' );
	wp_dequeue_style( 'cashier-woocommerce' );
	wp_dequeue_style( 'wc-blocks-style' );
	wp_dequeue_script( 'cashier-navigation' );
}

// include custom jQuery
function remove_jquery() {
	wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'remove_jquery');


function add_styling(){
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'add_styling');

function add_custom_menus() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'add_custom_menus' );


// Automatic theme updates from the GitHub repository
// add_filter('pre_set_site_transient_update_themes', 'automatic_GitHub_updates', 100, 1);
// function automatic_GitHub_updates($data) {
//   // Theme information
//   $theme   = get_stylesheet(); // Folder name of the current theme
//   $current = wp_get_theme()->get('Version'); // Get the version of the current theme
//   // GitHub information
//   $user = 'muldbjerg'; // The GitHub username hosting the repository
//   $repo = 'birgitmarie'; // Repository name as it appears in the URL
//   // Get the latest release tag from the repository. The User-Agent header must be sent, as per
//   // GitHub's API documentation: https://developer.github.com/v3/#user-agent-required
//   $file = @json_decode(@file_get_contents('https://api.github.com/repos/'.$user.'/'.$repo.'/releases/latest', false,
//       stream_context_create(['http' => ['header' => "User-Agent: ".$user."\r\n"]])
//   ));
//   if($file) {
// 	$update = filter_var($file->tag_name, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
//     // Only return a response if the new version number is higher than the current version
//     if($update > $current) {
//   	  $data->response[$theme] = array(
// 	      'theme'       => $theme,
// 	      // Strip the version number of any non-alpha characters (excluding the period)
// 	      // This way you can still use tags like v1.1 or ver1.1 if desired
// 	      'new_version' => $update,
// 	      'url'         => 'https://github.com/'.$user.'/'.$repo,
// 	      'package'     => $file->assets[0]->browser_download_url,
//       );
//     }
//   }
//   return $data;
// }
