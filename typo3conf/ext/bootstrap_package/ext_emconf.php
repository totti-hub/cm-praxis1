<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "bootstrap_package".
 *
 * Auto generated 02-06-2021 13:46
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Bootstrap Package',
  'description' => 'Bootstrap Package delivers a full configured frontend theme for TYPO3, based on the Bootstrap CSS Framework.',
  'category' => 'templates',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '9.5.0-10.4.99',
      'rte_ckeditor' => '9.5.0-10.4.99',
      'seo' => '9.5.0-10.4.99',
    ),
    'conflicts' => 
    array (
      'css_styled_content' => '*',
      'fluid_styled_content' => '*',
      'themes' => '*',
      'fluidpages' => '*',
      'dyncss' => '*',
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'BK2K\\BootstrapPackage\\' => 'Classes',
    ),
  ),
  'state' => 'stable',
  'uploadfolder' => false,
  'clearCacheOnLoad' => 1,
  'author' => 'Benjamin Kott',
  'author_email' => 'info@bk2k.info',
  'author_company' => 'private',
  'version' => '11.0.3',
  'clearcacheonload' => false,
);

