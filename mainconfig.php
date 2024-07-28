<?php
date_default_timezone_set('Asia/Jakarta');
ini_set('memory_limit', '128M');

/* CONFIG */
$config['web'] = array(
    'maintenance' => 0, // 1 = yes, 0 = no
    'short_title' => 'SAF ',
    'title' => 'Smm Panel Indonesia Termurah - Terbaik',
    'meta' => array(
        'description' => 'Jakshop - SMM Panel indonesia adalah sebuah website penyedia layanan sosial media terlengkap, termurah, dan berkualitas.',
        'keywords' => 'smm panel',
        'author' => 'SAF  - SMM Panel indonesia'
    ),
    'base_url' => 'https://member.saf.my.id/',
    'register_url' => 'https://member.saf.my.id/auth/register.php'
);

$config['register'] = array(
    'price' => array(
        'member' => 10000,
        'reseller' => 30000,
    ),
    'bonus' => array(
        'member' => 5000,
        'reseller' => 10000,
    )
);

$config['db'] = array(
    'host' => 'localhost',
    'name' => 'safsmm,
    'username' => 'safsmm',
    'password' => 'safsmm'
);
/* END - CONFIG */

require 'lib/db.php';
require 'lib/model.php';
require 'lib/function.php';

session_start();
$model = new Model();
