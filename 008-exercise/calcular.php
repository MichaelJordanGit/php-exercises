<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = floatval($_POST["value1"]);
    $desconto = $valor * (9 / 100);
    $calculo =  $valor - $desconto;
    $valorDescontado = $valor - $calculo;
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
        <p>O valor de <strong>R$<?= $valor ?></strong> com 9% de desconto fica fica <strong>R$<?=$calculo?></strong></p>
        <p>Total de desconto: R$ <strong><?=$valorDescontado?></strong></p>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>