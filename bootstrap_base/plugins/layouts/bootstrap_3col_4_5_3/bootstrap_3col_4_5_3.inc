<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Three Columns 4-5-3'),
  'category' => t('Bootstrap'),
  'icon' => 'three_4_5_3.png',
  'theme' => 'bootstrap-3col-4-5-3',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_3col_4_5_3.css',
  'regions' => array(
  	'top' => t('Top'),
    'left' => t('Left'),
	'middle' => t('Middle'),
    'right' => t('Right'),
	'bottom' => t('Bottom'),
  ),
);
