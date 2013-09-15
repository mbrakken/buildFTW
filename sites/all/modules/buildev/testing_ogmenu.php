<?php

/**
 * Return a form element with crafted links to create nodes for a given group.
 *
 * @param $gid
 *   The group ID.
 * @param $destination
 *   Optional; The destiantion after a node is created. Defaults to the
 *   destination passed in the URL if exists, otherwise back to the current
 *   page.
 * @param $types
 *   Optional; An array of type names. Restrict the created links to the given
 *   types.
 */
function og_node_create_links($gid, $destination = '', $types = NULL) {
  $group = og_get_group('group', $gid);
  if (!$group) {
    return;
  }

  $types = isset($types) ? $types : array_keys(node_type_get_types());
  foreach ($types as $type_name) {
    if (og_is_group_content_type('node', $type_name) && node_access('create', $type_name)) {
      $names[$type_name] = node_type_get_name($type_name);
    }
  }

  if (empty($names)) {
    return;
  }

  // Sort names.
  asort($names);

  // Build links.
  $options  = array(
    'query' => array(
      'gids_' . $group->entity_type . '[]' => $group->etid,
    ) + drupal_get_destination(),
  );

  $items = array();
  foreach ($names as $type => $name) {
    // theme_item_list's 'data' items isn't a render element, so use l().
    // http://drupal.org/node/891112
    $items[] = array('data' => l($name, 'node/add/' . str_replace('_', '-', $type), $options));
  }

  $element = array();
  $element['og_node_create_links'] = array(
    '#theme' => 'item_list',
    '#items' => $items,
  );

  return $element;
}
