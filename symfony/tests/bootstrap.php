<?php

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

if (isset($_SERVER['APP_ENV'])) {
    putenv('APP_ENV='.$_SERVER['APP_ENV']);
}

(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

if ($_SERVER['APP_DEBUG']) {
    umask(0000);
}
