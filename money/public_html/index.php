<?php
//WARNING
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include '../../gf/App.php';
$app= \GF\App::getInstance();
$app->run();
