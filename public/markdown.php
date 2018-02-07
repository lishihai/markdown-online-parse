<?php

define("ROOT", dirname(dirname(__FILE__)));

include_once ROOT . '/vendor/autoload.php';

$title    = $_GET['f'];
$filename = ROOT . '/markdown/' . $title;
if (!file_exists($filename)) {
    echo "Sorry, file not found!";
    exit;
}

$parse             = new ParsedownExtraPlugin();
$parse->code_class = '%s';
$body              = $parse->text(file_get_contents($filename));
$hostname          = "http://example.com/";
include_once ROOT . '/markdown/markdown.tp.php';