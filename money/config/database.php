<?php
$cnf['default']['connection_uri']='mysql:host=money.dev;dbname=money';
$cnf['default']['username']='root';
$cnf['default']['password']='qwerty';
$cnf['default']['pdo_options'][PDO::MYSQL_ATTR_INIT_COMMAND]="SET NAMES 'UTF8'";
$cnf['default']['pdo_options'][PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;


$cnf['session']['connection_uri']='mysql:host=olble.dev;dbname=session';
$cnf['session']['username']='root';
$cnf['session']['password']='qwerty';
$cnf['session']['pdo_options'][PDO::MYSQL_ATTR_INIT_COMMAND]="SET NAMES 'UTF8'";
$cnf['session']['pdo_options'][PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

return $cnf;