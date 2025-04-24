<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
</head>
<body>
    <h1>Dados Recebidos:</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $telefone = $_POST["telefone"];
            $data_nascimento = $_POST["data_nascimento"];
            $cep = $_POST["cep"];
            $email = $_POST["email"];

            echo "<p><strong>Nome Completo:</strong> " . htmlspecialchars($nome) . "</p>";
            echo "<p><strong>CPF:</strong> " . htmlspecialchars($cpf) . "</p>";
            echo "<p><strong>Telefone Celular:</strong> " . htmlspecialchars($telefone) . "</p>";
            echo "<p><strong>Data de Nascimento:</strong> " . htmlspecialchars($data_nascimento) . "</p>";
            echo "<p><strong>CEP:</strong> " . htmlspecialchars($cep) . "</p>";
            echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";
        } else {
            echo "<p>Nenhum dado foi recebido via método POST.</p>";
        }
    ?>

    <p><a href="formulario.html">Voltar ao Formulário</a></p>
</body>
</html>