<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "testeFront";

try{
    $PDO = new PDO("msyql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die("Error in the connection" . $e->getMessage());
}
?>