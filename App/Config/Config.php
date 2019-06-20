<?php

return[

    'site'=>[
        'email' => '2b186796ad-6667d4@inbox.mailtrap.io',
        'name'  =>  'Site Name'
    ],

    'db' =>[
        'host'      =>  'localhost',
        'dbname'    =>  'mvc',
        'username'  =>  'root', 
        'password'  =>  'root'  
    ],

    'controllers'=>[
        'folders' => [
            'Site', 'Admin'
        ]
    ],

    'smtp'  =>  [
        //https://mailtrap.io
        'host' => 'smtp.mailtrap.io',
        'port' => 587,
        'timeout' => 10 ,
        'username' => '2d5a155098e8e4',
        'password' => 'a1cc15feaef4ca',
        'charset' => 'utf-8',

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        // $this->SMTPDebug = SMTP::DEBUG_SERVER;
        'SMTPDebug' => '2',

        /**
         * SMTPsecure 
         *  ssl
         *  tls
         */
        'SMTPsecure' => 'ssl'
    ],
    'environment' => [
        /**
         *  0 = development
         *  1 = test
         *  2 = prodution
         */
        'type' => '0'
    ]
];