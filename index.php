<?php
define('BASEDIR',__DIR__);
require_once BASEDIR.'/sys/Autoload.php';
spl_autoload_register('\sys\Autoload::autoload');
$app = new sys\App;