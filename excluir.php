<?php
// Exclusão com risco de SQL Injection e sem confirmação
include("conexao.php");

$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id = $id";
new mysql($conn, $sql);

if ($conn->query($sql) === true) {
    echo "Registro excluído com sucesso";
} else {
    echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn -> close();
exit();

header("Location: index.php");
?>