<?php
include_once 'database.php';

    function fetchAllData() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM todo ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertData(){
        global $pdo;

        if(isset($_POST['add'])){
            $task = trim( $_POST['task']);
            

            if(empty($task)){
                return 'please enter an item.';
            }

            $stmt = $pdo->prepare("INSERT INTO todo (list) Values (:list)");
            $stmt->bindValue(':list', $task);
            $stmt->execute();
            
            // Redirect to avoid resubmitting
            header("Location: index.php");
            exit;
        
        }

        return null;

    }

    function deleteItem(){
        global $pdo;
        if(isset($_POST['delete'])){
            $id = $_POST['id'] ?? null;

            if($id && is_numeric($id)){
                $stmt = $pdo->prepare("DELETE FROM `todo` WHERE `todo`.`id` = :id");
                $stmt->bindValue(':id', $id, PDO::PARAM_INT );
                $stmt->execute();

                header("Location: index.php");
                exit;
            }else{
                echo "Invalide ID";
            }
        }
    }

   
?>
