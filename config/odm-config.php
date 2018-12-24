<?php
/**
 * Created by SlimApp.
 *
 * Date: 2018-12-24
 * Time: 16:32
 */
use Oasis\Mlib\ODM\Dynamodb\Console\ConsoleHelper;
use Vendor\Doctrinecache\Database\DoctrinecacheDatabase;

require_once __DIR__ . '/../bootstrap.php';

$itemManager = DoctrinecacheDatabase::getItemManager();

return new ConsoleHelper($itemManager);

