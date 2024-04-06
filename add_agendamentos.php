<?php
    session_start();
    include_once('connection.php');
 
    if(isset($_POST['add_agendamentos'])){
        $database = new Connection();
        $db = $database->open();
        try{
            //use prepared statement to prevent sql injection
            $stmt = $db->prepare("INSERT INTO agendamentos (nome, assunto, sala, participantes, horario, dat) VALUES (:nome, :assunto, :sala, :participantes, :horario, :dat)");
            //if-else statement in executing our prepared statement
            $_SESSION['message'] = ( $stmt->execute(array(':nome' => $_POST['nome'] , ':assunto' => $_POST['assunto'], ':sala' => $_POST['sala'], ':participantes' => $_POST['participantes'], ':horario' => $_POST['horario'], ':dat' => $_POST['dat'])) ) ? 'Sala agendada' : 'Ops, Algo deu errado. Não foi realizar o agendamento';  
         
            //use prepared statement to prevent sql injection
            $stmt = $db->prepare("UPDATE salas SET status = 0 WHERE id = :sala");
            //if-else statement in executing our prepared statement
            $_SESSION['message'] = ( $stmt->execute(array(':sala' => $_POST['sala'] )) ) ? 'Sala agendada' : 'Ops, Algo deu errado. Não foi realizar o agendamento';

            //use prepared statement to prevent sql injection
            $stmt = $db->prepare("UPDATE agendamentos SET idsala = :sala WHERE sala = :sala");
            //if-else statement in executing our prepared statement
            $_SESSION['message'] = ( $stmt->execute(array(':sala' => $_POST['sala'] )) ) ? 'Sala agendada' : 'Ops, Algo deu errado. Não foi realizar o agendamento';  

            //use prepared statement to prevent sql injection
            $stmt = $db->prepare("UPDATE agendamentos SET sala = (SELECT nome FROM salas WHERE id = :sala) WHERE sala = :sala");
            //if-else statement in executing our prepared statement
            $_SESSION['message'] = ( $stmt->execute(array(':sala' => $_POST['sala'] )) ) ? 'Sala agendada' : 'Ops, Algo deu errado. Não foi realizar o agendamento';  


        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
 
        //close connection
        $database->close();
    }
 
    else{
        $_SESSION['message'] = 'Preencha o formulário antes.';
    }
 
    header('location: agendamentos.php');
     
?>