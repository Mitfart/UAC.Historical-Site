<?php
const DBHOST ='localhost:3307';
const DBUSER ='root'; 
const DBPASS ='';
const DBNAME ='countries';

$dsn = 'mysql:host='.DBHOST.';dbname='.DBNAME.'';
$conn = null;
try{
    $conn=new PDO($dsn,DBUSER,DBPASS);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
} catch(PDOException $e){
    die('Error:'.$e->getMessage());
}
?>