<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = floatval($_POST["value1"]);
    $percent = 5;
    $percent2 = 50; 
    $calc = $num1 * $percent / 100;
    $calc2 = $num1 * $percent2 / 100;
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
        <p>(<?= $percent . '%' ?> de  <?= $num1 ?> )= <strong><?= $calc ?></strong></p>
        <br>
        <p>(<?= $percent2 . '%' ?> de  <?= $num1 ?> )= <strong><?= $calc2 ?></strong></p>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>