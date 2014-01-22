<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Three Columns 4-4-4'),
  'category' => t('Bootstrap'),
  'icon' => 'three_4_4_4.png',
  'theme' => 'bootstrap-3col-4-4-4',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_3col_4_4_4.css',
  'regions' => array(
  	'top' => t('Top'),
    'left' => t('Left'),
	'middle' => t('Middle'),
    'right' => t('Right'),
	'bottom' => t('Bottom'),
  ),
);
