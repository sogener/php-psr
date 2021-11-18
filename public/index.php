<?php

use src\psr3\Main;

include '../vendor/autoload.php';
include '../lib/config/config.php';


$ob = new Main();
$ob->debug('тест123');
