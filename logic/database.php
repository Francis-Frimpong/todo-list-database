<?php
    // database connection and configuration
    $pdo = new PDO('mysql:host=localhost;dbname=todo-list;charset=utf8mb4', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    
    // SELECT * FROM `todo`


?>