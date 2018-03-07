<?php

define('ROOT', dirname(dirname(__FILE__)));

include_once ROOT . '/vendor/autoload.php';

$title    = $_GET['f'];
$filename = ROOT . '/src/' . $title;
if (!file_exists($filename)) {
    exit('Sorry, the file is not exist!');
}

$parse = new Parsedown();
$body  = $parse->text(file_get_contents($filename));

include_once ROOT . '/template/markdown.tp.php';
