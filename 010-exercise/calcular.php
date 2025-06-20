<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comprimento = floatval($_POST["value1"]);
    $largura = floatval($_POST["value2"]);
    $altura = floatval($_POST["value3"]);
    $calculo = number_format($comprimento * $largura * $altura, 2);
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <div class="resultado-box">
        <h2>Resultado</h2>
        <br>
        <p>Comprimento: <?= $comprimento ?>m</p>
        <br>
        <p>Largura: <?= $largura ?>m</p>
        <br>
        <p>Altura: <?= $altura ?>m</p>
        <br>
        <p>O volume da area é <?=$calculo?>m³</p>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>