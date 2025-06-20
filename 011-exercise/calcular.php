<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = floatval($_POST["value1"]);
    $porcentagem = $valor * (27 / 100);
    $calculo = number_format($valor - $porcentagem, 2);
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
        <p>O valor de <strong>R$<?=$valor?></strong> com <strong>27%</strong> de desconto fica <strong>R$<?=$calculo?></strong></p>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>