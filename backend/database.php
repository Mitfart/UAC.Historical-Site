<?php
const DB_HOST = 'localhost:3306';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'historical-site';


$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
$db = null;


try {
    $db = new PDO($dsn, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Error:' . $e->getMessage());
}


