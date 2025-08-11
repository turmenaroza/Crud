<?php

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
    $res = mysqli_query($conn, $sql);
    if ($$conn->query($sql) === true) {
        echo "Usuário cadastrado com sucesso!";
    }else{
        echo "Erro ao cadastrar!". $sql . '<br>' . $conn->error;
    }
        $conn->close();
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
<form method="POST" action="cadastrar.php"> 

     <label for="name">Nome:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

    <input type="submit" value="Cadastrar">
</form>

</body>

</html>