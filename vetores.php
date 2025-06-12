<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de Vetores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #0056b3;
        }
        pre {
            background-color: #e7f1ff;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
        }
        .vetor {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<?php

$v1 = range(0, 12);
$v2 = range(0, 100, 10);
$v3 = range('a', 'i');
$v4 = range('e', 'a');

function exibirArray($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

?>

<div class="vetor">
    <h2>Vetor 1 (0 a 12):</h2>
    <?php exibirArray($v1); ?>
</div>

<div class="vetor">
    <h2>Vetor 2 (0 a 100, passo 10):</h2>
    <?php exibirArray($v2); ?>
</div>

<div class="vetor">
    <h2>Vetor 3 (a a i):</h2>
    <?php exibirArray($v3); ?>
</div>

<div class="vetor">
    <h2>Vetor 4 (e a a):</h2>
    <?php exibirArray($v4); ?>
</div>

</body>
</html>

