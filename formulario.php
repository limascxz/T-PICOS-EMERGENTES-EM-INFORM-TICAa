<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];

    
    if ($idade > 18) {
        
        echo "<h1>Dados recebidos:</h1>";
        echo "Nome: " . $nome . "<br>";
        echo "Idade: " . $idade . "<br>";
        echo "Sexo: " . $sexo . "<br>";
        echo "Endereço: " . $endereco . "<br>";
        echo "Minha idade é: " . $idade . "<br>";
    } else {
        echo "<h1>Dados recebidos:</h1>";
        echo "Nome: " . $nome . "<br>";
        echo "Idade: " . $idade . "<br>";
        echo "Menor de idade";
    }
} else {
    echo "Formulário não enviado corretamente.";
}
?>
