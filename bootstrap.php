<?php
/**
 * Created by SlimApp.
 *
 * Date: 2018-12-24
 * Time: 16:32
 */

use Vendor\Doctrinecache\Doctrinecache;
use Vendor\Doctrinecache\DoctrinecacheConfiguration;

require_once __DIR__ . "/vendor/autoload.php";

define('PROJECT_DIR', __DIR__);

/** @var Doctrinecache $app */
$app = Doctrinecache::app();
$app->init(__DIR__ . "/config", new DoctrinecacheConfiguration(), __DIR__ . "/cache/config");

return $app;

