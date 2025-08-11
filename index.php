<?php

include("conexao.php");

$sql = "SELECT * FROM usuarios"; 
$resultado = mysqli_query($conn, $sql);

echo "<h1>Lista de Usuários</h1>";

if($linha = mysqli_fetch_array($resultado)) {
    echo "Nome: " . $linha['nome'] . "<br>";
    echo "Email: " . $linha['email'] . "<br><br>";
} else {
    echo "Nenhum usuário encontrado.";
}
 $conn->close();
?>
<a href='cadastrar.php'>Cadastrar novo</a>