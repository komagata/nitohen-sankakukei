#!/usr/bin/env php
<?php
require_once dirname(dirname(__FILE__)).'/init.php';
require_once 'DB.php';

$con = DB::connect($DSN);
$workshops = $con->getAll('SELECT * FROM workshops WHERE num < max');
print_r($workshops);
?>
