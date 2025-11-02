<?php
include_once 'database.php';

    function fetchAllData(){
        global $pdo;
        // write query statement
        $stmt = $pdo->prepare("SELECT * FROM `todo`");
        $stmt->execute();
        // get results
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $results;
    }

   $todos =  fetchAllData();


?>
