<?php

return [
# if I unomment those settings, taken from here:
# https://developers.shopware.com/designers-guide/snippets/#snippets-during-plugin/theme-development
# I get following error:
# Warning: Unexpected character in input:  ' in /var/www/html/config.php on line 26
# Workaround for now is to just force this setting directly in SW5 engine code:
# \engine\Shopware\Components\Snippet\Manager.php
//    'snippet' => [
//        'readFromDb' => false,
//        'writeToDb' => false,
//        'readFromIni' => true,
//        'writeToIni' => true,
//        'showSnippetPlaceholder' => true //introduced in Shopware 5.0.2
//    ],
    'db' => [
        'host' => 'localhost',
        'port' => '3306',
        'username' => 'root',
        'password' => 'root',
        'dbname' => 'shopware',
    ],
    'template' => [
        'forceCompile' => true,
    ],
    'phpsettings' => [
        'error_reporting' => E_ALL & ~E_USER_DEPRECATED,
        'display_errors' => 1,
    ],
    'front' => [
        'throwExceptions' => true,
        'showException' => true,
    ],
    'httpcache' => [
        'debug' => true,
    ]
];
