<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Columns 3-9'),
  'category' => t('Bootstrap'),
  'icon' => 'two_3_9.png',
  'theme' => 'bootstrap-2col-3-9',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_2col_3_9.css',
  'regions' => array(
  	'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right'),
	'bottom' => t('Bottom'),
  ),
);
