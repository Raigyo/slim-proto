<?php

//This code return an Array() of setting to indicate to the application where to find our twig templates.

return [

        'settings' => [
            'displayErrorDetails' => true,
            'view' => [
                'path' => __DIR__ . '/../templates',
                'twig' => [
                'cache' => false
                ]
            ],
        ]
];
