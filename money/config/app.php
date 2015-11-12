<?php
$cnf['default_controller']='Index';
$cnf['default_method']='index';
$cnf['namespaces']['Controllers']='/var/www/money/controllers/';
$cnf['namespaces']['Models']='/var/www/money/models/';

$cnf['session']['autostart'] = true;
$cnf['session']['type'] = 'database';
$cnf['session']['name'] = '__sess';
$cnf['session']['lifetime'] = 3600;
$cnf['session']['path'] = '/';
$cnf['session']['domain'] = '';
$cnf['session']['secure'] = false;
$cnf['session']['dbConnection'] = 'default';
$cnf['session']['dbTable'] = 'sessions';
return $cnf;
