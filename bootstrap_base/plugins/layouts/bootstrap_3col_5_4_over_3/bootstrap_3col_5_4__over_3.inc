<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Three Columns 5-4 over 3'),
  'category' => t('Bootstrap'),
  'icon' => 'three_5_4_over_3.png',
  'theme' => 'bootstrap-3col-5-4-over-3',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_3col_5_4_over_3.css',
  'regions' => array(
  	'top' => t('Top'),
	'sidebar' => t('Left Sidebar'),
	'header' => t('Title'),
    'left1' => t('Row 1: Left'),
    'right1' => t('Row 1: Right'),
	'left2' => t('Row 2: Left'),
	'middle2' => t('Row 2: Middle'),
    'right2' => t('Row 2: Right'),
	'bottom' => t('Bottom'),
  ),
);
