<?php

declare(strict_types=1);

use Api\Exception\UndetectedEnvironmentException;
use Nette\Configurator;

umask(002);

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Configurator;

$configurator->setDebugMode(true);
$configurator->enableTracy(__DIR__ . '/../log');
$configurator->setTimeZone('UTC');
$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->addConfig(__DIR__ . '/config/config.neon');

return $configurator->createContainer();
