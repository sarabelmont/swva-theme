<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Three Columns 3-5-4 Stack'),
  'category' => t('Bootstrap'),
  'icon' => 'three_3_5_4_stack.png',
  'theme' => 'bootstrap-3col-3-5-4-stack',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_3col_3_5_4_stack.css',
  'regions' => array(
  	'top' => t('Top'),
    'left1' => t('Row 1: Left'),
	'middle1' => t('Row 1: Middle'),
    'right1' => t('Row 1: Right'),
	'left2' => t('Row 2: Left'),
	'middle2' => t('Row 2: Middle'),
    'right2' => t('Row 2: Right'),
	'bottom' => t('Bottom'),
  ),
);
