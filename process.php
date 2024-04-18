<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "nathalia";
$password = "12345";
$database = "my_database";

// Conecta ao banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Insere os dados na tabela de usuários
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Novo usuário criado com sucesso.";
    } else {
        echo "Erro ao criar usuário: " . $conn->error;
    }
}

// Fecha a conexão
$conn->close();
?>
