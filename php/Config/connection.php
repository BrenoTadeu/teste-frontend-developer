<?php
$host = "localhost";
$user = "root";
$pass = "breno@banco";
$db = "launchExpress";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die("Error in the connection" . $e->getMessage());
}
?>