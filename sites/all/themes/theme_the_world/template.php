<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 *
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

/**
 * Theme override for theme_menu_item()
 *
 * function theme_the_world_links($variables) {
 *   $links = $variables['og_node_create_links'];
 *
 *
 *  if (!empty($extra_class)) {
 *    $class .= ' '. $extra_class;
 *  }
 *
 *  // Add unique identifier
 *  static $item_id = 0;
 *  $item_id += 1;
 *  $id .= ' ' . 'link-item-custom-id-' . $item_id;
 *  // Add semi-unique class
 *  $class .= ' ' . preg_replace("/[^a-zA-Z0-9]/", "", strip_tags($link));
 *
 *  return '<li class="'. $class .'" id="' . $id . '">'. $link ."</li>\n";
 * }
 *
 */

// Register user/register and user login pages as templates

function theme_the_world_theme($existing, $type, $theme, $path){
  return array(
    'user_register' => array(
      'render element' => 'form',
      'template' => 'templates/user-register',
    ),
    'user_login' => array(
      'render element' => 'form',
      'template' => 'templates/user-login',
    ),
  );
}

// Make field_background_image on projects the background image if it exists

function theme_the_world_preprocess_page(&$vars) {
  $node = menu_get_object();
  if ($node->nid) {
    // We're on a node page
    if (isset($node->field_background_image[$node->language][0]['fid'])) {
      // Load the file object
      $file = file_load($node->field_background_image[$node->language][0]['fid']);

      // Get a web accessible URL for the image
      $path = file_create_url($file->uri);

      // Add the background to an inline CSS tag
      drupal_add_css('#inside-top { background:url(' . $path . ') left top no-repeat !important; }', 'inline');
    }
  }
}
