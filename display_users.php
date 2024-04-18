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

// Função para buscar todos os usuários
function getUsers() {
    global $conn;
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Nome: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
        }
    } else {
        echo "Não foram encontrados usuários.";
    }
}

// Exibe a lista de usuários
getUsers();

// Fecha a conexão
$conn->close();
?>
