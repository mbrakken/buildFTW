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

// function theme_the_world_item_list($vars) {
//   $items = $vars['items'];
//   $title = $vars['title'];
//   $type = $vars['type'];
//   $attributes = $vars['attributes'];

//   $output = '<div class="item-list">';
//   if (isset($title)) {
//     $output .= '<h3>' . $title . '</h3>';
//   }

//   if (!empty($items)) {
//     $output .= "<$type" . drupal_attributes($attributes) . '>';
//     $num_items = count($items);

//     foreach ($items as $i => $item) {
//       $attributes = array();
//       $children = array();
//       if (is_array($item)) {
//         foreach ($item as $key => $value) {
//           if ($key == 'data') {
//             $data = $value;
//           }
//           elseif ($key == 'children') {
//             $children = $value;
//           }
//           else {
//             $attributes[$key] = $value;
//           }
//         }
//       }
//       else {
//         $data = $item;
//       }

//       if (count($children) > 0) {
//         // Render nested list.
//         $data .= theme_item_list(array('items' => $children, 'title' => NULL, 'type' => $type, 'attributes' => $attributes));
//       }

//       if ($i == 0) {
//         $attributes['class'][] = 'donkey';
//       }

//       if ($i == $num_items - 1) {
//         $attributes['class'][] = 'banana';
//       }


//       $output .= '<li' . drupal_attributes($attributes) . '>' . $data . "</li>";
//     }

//     $output .= "</$type>";
//   }

//   $output .= '</div>';

//   return $output;
// }

