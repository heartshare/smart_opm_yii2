<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
//         'db' => [
//          'class' => 'yii\db\Connection',
//             'dsn' => 'mysql:host=10.66.165.31;port=13001;dbname=smart',
//             'username'         => 'smart',
//             'password'         => '1u7OG1zM',
//             'emulatePrepare'   => true, // 开启pdo扩展
//             'charset'          => 'utf8',
//         ],
//        'view' => [
//            'renderers' => [
//                'php' => [
//                    'class' => 'yii\smarty\ViewRenderer',
//                    //'cachePath' => '@runtime/Smarty/cache',
//                ],
//            ],
//        ],
        'db'           => array(
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=10.104.34.222;dbname=wx_smart;port=3324',
            'tablePrefix' => 'smart_opm_',
            'username'         => 'wxsmart',
            'password'         => '7fFofe_4_6_10mCqDIebWCNVA',
            'emulatePrepare'   => true, // 开启pdo扩展
            'charset'          => 'utf8',
        ),
        'db_opensystem'           => array(
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=10.66.112.50;dbname=opensystem',
            'emulatePrepare'   => true,
            'username'         => 'opensystem',
            'password'         => 'wxmovie.com',
            'charset'          => 'utf8',
        ),
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
