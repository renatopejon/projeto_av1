<?php
    session_start();
    include_once('connection.php');
 
    if(isset($_POST['edit'])){
        $database = new Connection();
        $db = $database->open();
        try{
            $id = $_GET['id'];
            $nome = $_POST['nome'];
            $capacidade = $_POST['capacidade'];
            $tamanho = $_POST['tamanho'];
 
            $sql = "UPDATE salas SET nome = '$nome', capacidade = '$capacidade', tamanho = '$tamanho' WHERE id = '$id'";
            //if-else statement in executing our query
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Sala atualizada com sucesso' : 'Ops, Algo deu errado. Não foi possível atualizar a sala';
 
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
 
    header('location: salas.php');
 
?>
