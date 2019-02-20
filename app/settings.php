<?php

//This code return an object of settings to indicate to the application where to find our twig templates.

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
