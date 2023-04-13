<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Example1',
    'description' => 'Event Dispatcher Extension Example 1',
    'category' => 'plugin',
    'author' => 'Johannes Böttcher',
    'author_email' => 'johannes.boettcher@vancado.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
