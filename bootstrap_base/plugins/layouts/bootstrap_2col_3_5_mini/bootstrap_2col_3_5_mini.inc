<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Columns 3-5 Mini'),
  'category' => t('Bootstrap'),
  'icon' => 'two_3_5_mini.png',
  'theme' => 'bootstrap-2col-3-5-mini',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_2col_3_5_mini.css',
  'regions' => array(
  	'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right'),
	'bottom' => t('Bottom'),
  ),
);
