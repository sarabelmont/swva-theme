<?php

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition
$plugin = array(
  'title' => t('Two Columns 4-8 Flip'),
  'category' => t('Bootstrap'),
  'icon' => 'two_8_4.png',
  'theme' => 'bootstrap-2col-4-8-flip',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'css' => 'bootstrap_2col_4_8_flip.css',
  'regions' => array(
  	'top' => t('Top'),
    'left' => t('Left'),
    'right' => t('Right'),
	'bottom' => t('Bottom'),
  ),
);
