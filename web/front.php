<?php
/**
 * Created by SlimApp.
 *
 * Date: 2018-12-24
 * Time: 16:32
 */


use Vendor\Doctrinecache\Doctrinecache;

/** @var Doctrinecache $app */
$app = require_once __DIR__ . "/../bootstrap.php";

$app->getHttpKernel()->run();

