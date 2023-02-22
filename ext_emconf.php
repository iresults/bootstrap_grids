<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "bootstrap_grids"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Grids for bootstrap',
    'description'      => 'Gridelements for bootstrap. Column grids, grids for simple accordions, tabs and content slider.',
    'category'         => 'misc',
    'author'           => 'Pascal Mayer, Daniel Corn',
    'author_email'     => 'typo3@lascap.ch, cod@iresults.li',
    'author_company'   => '',
    'version'          => '1.4.3',
    'state'            => 'stable',
    'clearCacheOnLoad' => true,
    'constraints'      => [
        'depends'   => [
            'typo3'        => '8.7.0-10.4.99',
            'gridelements' => '8.0.0-10.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload'         => [
        'psr-4' => ['Laxap\\BootstrapGrids\\' => 'Classes'],
    ],
];
