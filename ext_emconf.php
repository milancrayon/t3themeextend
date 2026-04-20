<?php
$EM_CONF['t3themeextend'] = [
    'title' => 'T3Theme Extend',
    'constraints' => [
        'depends' => [],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [ 
            "Crayon\\T3themeextend\\"=> "Classes",
        ],
    ],
    'category' => 'templates',
    'uploadfolder' => 0,
    'createDirs' => '',
    'author' => 'T3Element',
    'author_email' => 'info@t3theme.com',
    'author_company' => 'Crayonwebstudio private limited',
    'state' => 'stable',
    'version' => '1.0.0',
    'clearcacheonload' => 1,
];
