<?php
if(!isset($_SESSION)) 
    {
    	ob_start();
        session_start(); 
    }
error_reporting(0);

$conServername='localhost';
$conUsername='root';
$conPassword='99999nagum';
$database='neccanteen';

try {
    $con = new PDO("mysql:host=$conServername;dbname=$database", $conUsername, $conPassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>