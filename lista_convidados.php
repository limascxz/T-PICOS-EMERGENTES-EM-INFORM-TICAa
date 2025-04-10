<?php
$vConvidados = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = trim($_POST['nome']);
        array_push($vConvidados, $nome);
    }

    if (isset($_POST['remover']) && !empty($vConvidados)) {
        array_pop($vConvidados);
    }
}

echo "<h2>Lista de Convidados</h2>";

if (count($vConvidados) > 0) {
    echo "<ul>";
    foreach ($vConvidados as $convidado) {
        echo "<li>$convidado</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Ainda não há convidados na lista.</p>";
}
?>

<h3>Adicionar Novo Convidado</h3>
<form action="lista_convidados.php" method="POST">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>
    <input type="submit" value="Adicionar">
</form>

<h3>Remover Último Convidado</h3>
<form action="lista_convidados.php" method="POST">
    <input type="submit" name="remover" value="Remover Último Convidado">
</form>
