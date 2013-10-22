<?php

/**
 * Implements hook_panels_layouts().
 */
function theme_the_world_buildftw_2_10_panels_layouts() {
  $items['buildftw_2_10'] = array(
    'title' => t('Two Column 2-10 stacked'),
    'category' => t('BuildFTW: 12 Column Grid'),
    'icon' => '',
    'theme' => 'buildftw_2_10',
    'admin css' => '../buildftw_panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'left' => t('Left'),
      'right' => t('Right'),
      'bottom' => t('Bottom'),
    ),
  );

  return $items;
}
