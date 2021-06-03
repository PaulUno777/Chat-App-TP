<?php
    $serveur ="localhost";
    $username ="root";
    $pass= "";
    
    $conn = new PDO("mysql:host=$serveur; dbname=chat", $username , $pass);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $e = $conn->errorInfo();
    
?>