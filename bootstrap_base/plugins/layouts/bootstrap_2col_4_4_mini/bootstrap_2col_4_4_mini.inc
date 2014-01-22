<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Columns 4-4 Mini'),
  'category' => t('Bootstrap'),
  'icon' => 'two_4_4_mini.png',
  'theme' => 'bootstrap-2col-4-4-mini',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_2col_4_4_mini.css',
  'regions' => array(
  	'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right'),
	'bottom' => t('Bottom'),
  ),
);
