<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Columns 5-7'),
  'category' => t('Bootstrap'),
  'icon' => 'two_5_7.png',
  'theme' => 'bootstrap-2col-5-7',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_2col_5_7.css',
  'regions' => array(
  	'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right'),
	'bottom' => t('Bottom'),
  ),
);
