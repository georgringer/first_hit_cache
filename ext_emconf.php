<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Force request to FE after changed content',
    'description' => 'To avoid hits with no caches this extensions makes the 1st hit',
    'category' => 'frontend',
    'author' => 'Georg Ringer',
    'state' => 'beta',
    'uploadfolder' => false,
    'version' => '0.1.0',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '9.4.0-9.9.99'
                ],
            'conflicts' =>
                [
                ],
            'suggests' =>
                [
                ],
        ],
    'clearcacheonload' => true,
];

