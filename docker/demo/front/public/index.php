<?php

include __DIR__.'/../vendor/autoload.php';

$data = file_get_contents('http://api');

if (!$data) {
    die('No data found');
}

echo '<h1>Front page</h1>';

function_exists('dump') ? dump(json_decode($data)) : var_dump(json_decode($data));
