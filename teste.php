<?php
// Conexão com o banco de dados
$conexao = new mysqli("servidor", "usuario", "senha", "nome_do_banco");

// Verifica se a conexão foi estabelecida
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

// Consulta SQL para buscar os dados
$sql = "SELECT id, nome FROM tabela";
$resultado = $conexao->query($sql);

// Verifica se a consulta retornou linhas
if ($resultado->num_rows > 0) {
// Início do select
    echo '<select name="nome_do_select">';
    
    // Loop para percorrer os resultados
    while($linha = $resultado->fetch_assoc()) {
        echo '<option value="' . $linha["id"] . '">' . $linha["nome"] . '</option>';
    }
    
    // Fim do select
    echo '</select>';
} else {
    echo "0 resultados";
}

// Fecha a conexão
$conexao->close();
?>