<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = floatval($_POST["value1"]);
    $num2 = floatval($_POST["value2"]);
    $quadrado1 = pow($num2, 2);
    $quadrado2 = pow($num1, 2);
    $soma = $quadrado1 + $quadrado2;
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
        <p>(<?= $num1 . '²' ?> )= <strong><?= $quadrado2 ?></strong></p>
        <br>
        <p>(<?= $num2 . '²' ?> )= <strong><?= $quadrado1?></strong></p>
        <br>
        <p>A soma dos quadrados é <?= $soma ?></p>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>