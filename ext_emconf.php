<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "bootstrap_grids"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Grids for bootstrap',
    'description'      => 'Grid Elements for Twitter Bootstrap v4 & 5. Column grids, tabs and accordion.',
    'category'         => 'misc',
    'author'           => 'Pascal Mayer,Daniel Corn',
    'author_email'     => 'typo3@lascap.ch,cod@iresults.li',
    'author_company'   => '',
    'version'          => '2.3.0',
    'state'            => 'stable',
    'clearCacheOnLoad' => true,
    'constraints'      => [
        'depends'   => [],
        'conflicts' => [],
        'suggests'  => [],
    ],
    'autoload'         => [
        'psr-4' => ['Laxap\\BootstrapGrids\\' => 'Classes']
    ],
];
