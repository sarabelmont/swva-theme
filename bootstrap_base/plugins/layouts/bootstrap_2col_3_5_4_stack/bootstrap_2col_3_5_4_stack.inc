<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Columns 3-5-4 Stack'),
  'category' => t('Bootstrap'),
  'icon' => 'two_3_5_4_stack.png',
  'theme' => 'bootstrap-2col-3-5-4-stack',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_2col_3_5_4_stack.css',
  'regions' => array(
  	'top' => t('Top'),
    'col1-top' => t('Column 1, Row 1: Top'),
	'col1-left' => t('Column 1, Row 2: Left'),
	'col1-right' => t('Column 1, Row 2: Right'),
    'col2' => t('Column 2'),
	'bottom' => t('Bottom'),
  ),
);
