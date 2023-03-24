<?php
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost     = 'localhost';
$databaseName     = 'db_chmbac';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
