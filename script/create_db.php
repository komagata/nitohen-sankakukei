#!/usr/bin/env php
<?php
require_once dirname(dirname(__FILE__)).'/init.php';
require_once 'MDB2.php';

$conn =& MDB2::connect($DSN);
if (PEAR::isError($conn)) {
    die($conn->getMessage());
}

$sql = 'CREATE TABLE workshops (
    id INTEGER PRIMARY KEY,
    name TEXT, num INTEGER
)';

$affected =& $conn->exec($sql);
var_dump($affected);
if (PEAR::isError($affected)) {
    die($affected->getMessage());
}

$conn->disconnect();
?>
