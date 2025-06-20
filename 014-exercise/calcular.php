<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = floatval($_POST["value1"]);
    $parcela = $_POST["parcela"];
    $valorPorcento = $valor * (16/100);
    $valorTotal = $valor + $valorPorcento;
    $totalPorcentagem = $valor + $valorPorcento;
    $valorDiv = $totalPorcentagem / $parcela;
    
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
        <p>Sua compra fica no valor de R$<strong><?=$valorTotal?></strong> dividido em <strong><?=$parcela?></strong>x terá a parcela de <strong><?=$valorDiv?></strong></p>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>