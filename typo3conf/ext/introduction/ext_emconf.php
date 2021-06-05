<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "introduction".
 *
 * Auto generated 02-06-2021 13:46
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'The official Introduction Package',
  'description' => 'This package delivers a new website (page tree) and shows all out-of-the-box features of TYPO3, and includes a theme based on Twitter Bootstrap 3, and a style editor to customize the design. Sample backend groups are added',
  'category' => 'distribution',
  'version' => '4.2.0',
  'state' => 'stable',
  'clearcacheonload' => true,
  'author' => 'Introduction Package Team',
  'author_email' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '10.0.0-10.4.99',
      'bootstrap_package' => '11.0.0-11.5.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'uploadfolder' => true,
  'author_company' => '',
);

