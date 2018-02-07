<?php

define('ROOT', dirname(dirname(__FILE__)));

include_once ROOT . '/vendor/autoload.php';

$title    = $_GET['f'];
$filename = ROOT . '/src/' . $title;
if (!file_exists($filename)) {
    echo 'sorry, file not found!';
    exit;
}

$parse             = new ParsedownExtraPlugin();
$parse->code_class = '%s';
$body              = $parse->text(file_get_contents($filename));
$hostname          = 'http://your-domain.com/';

include_once ROOT . '/src/markdown.tp.php';
