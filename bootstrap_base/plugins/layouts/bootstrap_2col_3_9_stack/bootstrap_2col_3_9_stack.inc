<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Columns 3-9 Stack'),
  'category' => t('Bootstrap'),
  'icon' => 'two_3_9_stack.png',
  'theme' => 'bootstrap-2col-3-9-stack',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_2col_3_9_stack.css',
  'regions' => array(
  	'top' => t('Top'),
    'left1' => t('Row 1: Left'),
    'right1' => t('Row 1: Right'),
	'left2' => t('Row 2: Left'),
    'right2' => t('Row 2: Right'),
	'bottom' => t('Bottom'),
  ),
);
