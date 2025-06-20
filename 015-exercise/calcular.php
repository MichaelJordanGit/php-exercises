<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distancia = floatval($_POST["value1"]);
    $combustivel = floatval($_POST["value2"]);
    $calc1 = number_format($distancia / $combustivel, 2);
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
        <p>A média de consumo do seu veiculo é de <strong><?=$calc1?>KM/L</strong></p>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>