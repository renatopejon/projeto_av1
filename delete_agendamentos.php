<?php
    session_start();
    include_once('connection.php');
 
    if(isset($_GET['id'])){
        $database = new Connection();
        $db = $database->open();
        try{
            $sql = "DELETE FROM agendamentos WHERE id = '".$_GET['id']."'";
            //if-else statement in executing our query
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Agendamento cancelado com sucesso!' : 'Ops, Algo deu errado. Não foi possível cancelar o agendamento';
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
 
        //close connection
        $database->close();
 
    }
    else{
        $_SESSION['message'] = 'Selecione um agendamento para cancelar.';
    }
 
    header('location: agendamentos.php');
 
?>