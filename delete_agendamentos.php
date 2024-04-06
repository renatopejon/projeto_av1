<?php
    session_start();
    include_once('connection.php');
 
    if(isset($_GET['id'])){
        $database = new Connection();
        $db = $database->open();
        try{
            $sql = "DELETE FROM agendamentos WHERE id = '".$_GET['id']."'";
            $sql2 = "UPDATE salas SET status = 1 WHERE id = (SELECT idsala FROM agendamentos WHERE id = '".$_GET['id']."')";
            //if-else statement in executing our query
            $_SESSION['message'] = ( $db->exec($sql2) ) ? 'Agendamento cancelado com sucesso! 222': 'Ops, Algo deu errado. Não foi possível cancelar o agendamento222';
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Agendamento cancelado com sucesso! ': 'Ops, Algo deu errado. Não foi possível cancelar o agendamento';

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