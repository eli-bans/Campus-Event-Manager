<?php
/**
 * This file contains the configuration for the database connection
 */

$host = 'localhost';
$dbname = 'es_db';
$dbusername = 'root';
$dbpassword = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$dbusername,$dbpassword); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die('Connection failed: ' . $e->getMessage());
}
