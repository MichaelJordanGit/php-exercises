<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = floatval($_POST["num1"]);
    $num2 = floatval($_POST["num2"]);

    $soma = $num1 + $num2;
    $resultado = $soma * $num1;
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
        <p>(<?= $num1 ?> + <?= $num2 ?>) × <?= $num1 ?> = <strong><?= $resultado ?></strong></p>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>