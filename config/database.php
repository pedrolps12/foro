<?php

if(isset($_SERVER['HTTP_HOST'])) {
    $host = $_SERVER['SERVER_NAME'];
}else{
    $host='local';
}
switch ($host)
{
    case 'cym.nxm.pe':			$dom = 'cym';break;
    case 'damian.nxm.pe':		$dom = 'dam';break;
    case 'pj.nxm.pe':			$dom = 'pjn';break;
    case 'grafimar.nxm.pe': 	$dom = 'gra';break;
    case 'ec7.nxm.pe':			$dom = 'ec7';break;
    case 'hacyma.nxm.pe':		$dom = 'hac';break;
    case 'usi.nxm.pe':			$dom = 'usi';break;
    case 'nice.nxm.pe':  		$dom = 'nic';break;
    case 'amg.nxm.pe':			$dom = 'amg';break;
    case 'cicrp.nxm.pe':		$dom = 'cic';break;
    case 'myh.nxm.pe':			$dom = 'myh';break;
    case 'cmcrp.nxm.pe':		$dom = 'cmc';break;
    case 'niceprueba.nxm.pe':	$dom = 'nicp';break;
    case 'amgprueba.nxm.pe':	$dom = 'amgp';break;
    case 'www.nxm.pe':			$dom = 'nxm';break;
    case 'elwa.nxm.pe':			$dom = 'elw';break;
    case 'mallas.nxm.pe':		$dom = 'mal';break;
    case 'yanjian.nxm.pe':		$dom = 'yan';break;
    case 'saav.nxm.pe':			$dom = 'saa';break;
    case 'quipu.nxm.pe':		$dom = 'qui';break;
    case 'ramirez.nxm.pe':		$dom = 'ram';break;
    case 'artemio.nxm.pe':		$dom = 'art';break;
    case 'team.nxm.pe':			$dom = 'tea';break;
    case 'melis.nxm.pe':		$dom = 'mel';break;
    case 'pruebahcaya.nxm.pe':	$dom = 'pru';break;
    default:					$dom = 'loc';break;
}

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => PDO::FETCH_OBJ,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env($dom.'_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env($dom.'_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env($dom.'_HOST', 'localhost'),
            'port' => env($dom.'_PORT', '3306'),
            'database' => env($dom.'_DATABASE', 'forge'),
            'username' => env($dom.'_USERNAME', 'forge'),
            'password' => env($dom.'_PASSWORD', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env($dom.'_HOST', 'localhost'),
            'port' => env($dom.'_PORT', '5432'),
            'database' => env($dom.'_DATABASE', 'forge'),
            'username' => env($dom.'_USERNAME', 'forge'),
            'password' => env($dom.'_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
        'pgsql_tests' => [
            'driver' => 'pgsql_tests',
            'host' => env($dom.'_HOST', 'localhost'),
            'port' => env($dom.'_PORT', '5432'),
            'database' => 'foro_tests',
            'username' => env($dom.'_USERNAME', 'forge'),
            'password' => env($dom.'_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'cluster' => false,

        'default' => [
            'host' => env('REDIS_HOST', 'localhost'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
