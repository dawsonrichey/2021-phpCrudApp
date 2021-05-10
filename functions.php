<?php
include_once('private.php');


function pdo_connect_mysql() {
    $DATABASE_HOST = $db_host;
    $DATABASE_USER = $db_user;
    $DATABASE_PASS = $db_pass;
    $DATABASE_NAME = $db_name;
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}