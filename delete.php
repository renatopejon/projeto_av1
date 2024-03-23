<?php
    session_start();
    include_once('connection.php');
 
    if(isset($_GET['id'])){
        $database = new Connection();
        $db = $database->open();
        try{
            $sql = "DELETE FROM salas WHERE id = '".$_GET['id']."'";
            //if-else statement in executing our query
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Sala removida com sucesso!' : 'Ops, Algo deu errado. Não foi possível remover a sala';
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
 
        //close connection
        $database->close();
 
    }
    else{
        $_SESSION['message'] = 'Selecione uma sala para remover.';
    }
 
    header('location: index.php');
 
?>