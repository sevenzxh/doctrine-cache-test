#! /usr/bin/env php
<?php
/**
 * Created by SlimApp.
 *
 * Date: 2018-12-24
 * Time: 16:32
 */

use Vendor\Doctrinecache\Console\CreateGroup;
use Vendor\Doctrinecache\Console\CreateUser;
use Vendor\Doctrinecache\Console\ReadGroup;
use Vendor\Doctrinecache\Doctrinecache;

/** @var Doctrinecache $app */
$app = require_once __DIR__ . "/../bootstrap.php";

$console = $app->getConsoleApplication();

$console->addCommands(
    [
        new CreateUser(),
        new CreateGroup(),
        new ReadGroup(),
    ]
);

$app->getConsoleApplication()->run();

