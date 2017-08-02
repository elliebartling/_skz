<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


/**
 * Some helper functions
 */

function asset_path($path) {
  return get_stylesheet_directory_uri() . '/dist/'. $path;
}

function SearchFilter($query) {
  if ($query->is_search) {
    $query->set('post_type', 'post');
  }
  return $query;
}

add_filter('pre_get_posts','SearchFilter');


function profile_photo() {
  $id = get_the_author_meta('ID');

  if(function_exists( 'mt_profile_img' )) {
    $photo = mt_profile_img( $id, array(
        'size' => 'large',
        'attr' => array( 'alt' => 'Alternative Text' ),
        'echo' => false )
    );

    if ($photo) {
      return $photo;
    }
    else {
      return '<img src="'. get_avatar_url($id, array( 'size' => 300, 'default' => '404')) . '"/>';
    }

  } else {
    return '<img src="'. get_avatar_url($id, array( 'size' => 300, 'default' => '404')) . '"/>';
  }
  return get_the_author_meta('ID');
}
