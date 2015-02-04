<?php

require_once 'vendor/autoload.php';
require_once 'tests/helper.php';

use Illuminate\Container\Container;

$app = new Container();

$app->bindShared('NotifierInterface', 'EmailNotifier');
$app->bindShared('BillerInterface', 'StripeBiller');

$biller = $app->make('BillerInterface');

$biller->bill(new stdClass, 100);
