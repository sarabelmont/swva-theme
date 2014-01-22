<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Three Columns 4-4-4-stack'),
  'category' => t('Bootstrap'),
  'icon' => 'three_4_4_4_stack.png',
  'theme' => 'bootstrap-3col-4-4-4-stack',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_3col_4_4_4_stack.css',
  'regions' => array(
  	'top' => t('Top'),
    'left1' => t('Left1'),
	'middle1' => t('Middle1'),
    'right1' => t('Right1'),
	'left2' => t('Left2'),
	'middle2' => t('Middle2'),
    'right2' => t('Right2'),
	'bottom' => t('Bottom'),
  ),
);
