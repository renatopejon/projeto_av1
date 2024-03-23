<?php
    session_start();
    include_once('connection.php');
 
    if(isset($_POST['add'])){
        $database = new Connection();
        $db = $database->open();
        try{
            //use prepared statement to prevent sql injection
            $stmt = $db->prepare("INSERT INTO salas (nome, tamanho, capacidade) VALUES (:nome, :tamanho, :capacidade)");
            //if-else statement in executing our prepared statement
            $_SESSION['message'] = ( $stmt->execute(array(':nome' => $_POST['nome'] , ':tamanho' => $_POST['tamanho'] , ':capacidade' => $_POST['capacidade'])) ) ? 'Sala cadastrada com sucesso' : 'Ops, Algo deu errado. Não foi possível criar a sala';  
         
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
 
    header('location: index.php');
     
?>