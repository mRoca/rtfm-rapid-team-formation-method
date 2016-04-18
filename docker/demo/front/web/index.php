<?php

require __DIR__.'/../vendor/autoload.php';

$data = file_get_contents('http://api.rtfm.docker');

if (!$data) {
    echo 'No data found';
    die;
}

dump(json_decode($data));
