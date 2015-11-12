<?php
$cnf['admin']['namespace']='Controllers\Admin';
$cnf['admin']['controllers']['index']['to']='test';
$cnf['admin']['controllers']['index']['methods']['new']['to']='_new';
$cnf['admin']['controllers']['neznam']['to']='znam';
$cnf['admin']['controllers']['neznam']['methods']['pusha']['to']='nepusha';
$cnf['*']['namespace']='Controllers';

return $cnf;