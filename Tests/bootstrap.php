<?php

/*
 * Borrowed from https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Tests/bootstrap.php
 */

if (!is_file($autoloadFile = __DIR__.'/../vendor/autoload.php')) {
    throw new \LogicException('Could not find autoload.php in vendor/. Did you run "composer install --dev"?');
}

require $autoloadFile;

require_once __DIR__ . '/../DependencyInjection/Configuration.php';
require_once __DIR__ . '/../DependencyInjection/SparkcentralPSRedisExtension.php';