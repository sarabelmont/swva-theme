<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Three Columns 3-5-4'),
  'category' => t('Bootstrap'),
  'icon' => 'three_3_5_4.png',
  'theme' => 'bootstrap-3col-3-5-4',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_3col_3_5_4.css',
  'regions' => array(
  	'top' => t('Top'),
    'left' => t('Left'),
	'middle' => t('Middle'),
    'right' => t('Right'),
	'bottom' => t('Bottom'),
  ),
);
