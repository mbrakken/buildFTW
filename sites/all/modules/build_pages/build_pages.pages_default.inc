<?php

function build_pages_default_page_manager_pages() {
  $pages = array();
  $path = drupal_get_path('module', 'build_pages') . '/pages';
  $files = drupal_system_listing('/\.inc$/', $path, 'name', 0);
  foreach ($files as $file) {
    include_once $path . '/' . $file->filename;
    $pages[$page->name] = $page;
  }
  return $pages;
}
