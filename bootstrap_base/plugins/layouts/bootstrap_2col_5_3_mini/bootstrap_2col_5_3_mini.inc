<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Columns 5-3 Mini'),
  'category' => t('Bootstrap'),
  'icon' => 'two_5_3_mini.png',
  'theme' => 'bootstrap-2col-5-3-mini',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_2col_5_3_mini.css',
  'regions' => array(
  	'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right'),
	'bottom' => t('Bottom'),
  ),
);
