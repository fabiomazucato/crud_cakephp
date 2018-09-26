<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'ConsultasPrime' => $baseDir . '/plugins/ConsultasPrime/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Iugu' => $baseDir . '/plugins/Iugu/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'Twit' => $baseDir . '/plugins/Twit/',
        'WyriHaximus/TwigView' => $baseDir . '/vendor/wyrihaximus/twig-view/'
    ]
];