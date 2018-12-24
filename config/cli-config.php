<?php
/**
 * Created by SlimApp.
 *
 * Date: 2018-12-24
 * Time: 16:32
 */
 
 
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Vendor\Doctrinecache\Database\DoctrinecacheDatabase;

require_once __DIR__ . "/../bootstrap.php";

return ConsoleRunner::createHelperSet(DoctrinecacheDatabase::getEntityManager());
