<?php

require_once __DIR__.'/../vendor/autoload.php';

use Vldivn\StrtotimeInRus;


$s = new StrtotimeInRus('3 декабря 2018');

$dt = $s->getDateTime();

echo $dt->format('Y m d').PHP_EOL;


echo StrtotimeInRus::DateTime('3 декабря 2018')->format('Y-m-d').PHP_EOL;