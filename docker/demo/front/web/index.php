<?php

require __DIR__.'/../vendor/autoload.php';

$data = file_get_contents('http://api.rtfm.docker');

if (!$data) {
    die('No data found');
}

dump(json_decode($data));
