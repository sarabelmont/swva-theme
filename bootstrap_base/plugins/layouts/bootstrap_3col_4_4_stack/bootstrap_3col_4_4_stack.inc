<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Three Columns 4-4 Stack'),
  'category' => t('Bootstrap'),
  'icon' => 'three_4_4_stack.png',
  'theme' => 'bootstrap-3col-4-4-stack',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_3col_4_4_stack.css',
  'regions' => array(
  	'top' => t('Top'),
	'sidebar' => t('Left Sidebar'),
    'left1' => t('Row 1: Left'),
    'right1' => t('Row 1: Right'),
	'left2' => t('Row 2: Left'),
    'right2' => t('Row 2: Right'),
	'bottom' => t('Bottom'),
  ),
);
