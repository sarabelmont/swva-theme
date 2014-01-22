<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Columns 4-8 Stack - home pages'),
  'category' => t('Bootstrap'),
  'icon' => 'two_4_8_stack.png',
  'theme' => 'bootstrap-2col-4-8-stack',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_2col_4_8_stack.css',
  'regions' => array(
    'left1' => t('Left1'),
    'right1' => t('Right1'),
	'left2' => t('Left2'),
    'right2' => t('Right2'),
	'left3' => t('Left3'),
    'right3' => t('Right3'),
	'bottom' => t('Bottom'),
  ),
);
