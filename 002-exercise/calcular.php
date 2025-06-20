<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = floatval($_POST["value1"]);
    $num2 = floatval($_POST["value2"]);
    $num3 = floatval($_POST["value3"]);

    $soma = $num1 + $num2 + $num3;
    $media = $soma / 3;
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
        <p>(<?= $num1 ?> + <?= $num2 ?> + <?= $num3 ?>) = <strong>média: <?= $media ?></strong></p>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>