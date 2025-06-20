<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baseMaior = floatval($_POST["value1"]);
    $baseMenor = floatval($_POST["value2"]);
    $altura = floatval($_POST["value3"]);
    $calc1 = ($baseMaior + $baseMenor) * $altura;
    $calc2 = number_format($calc1 / 2, 2);
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
        <p>O calculo da área do trapézio é de <strong><?=$calc2?>m²</strong></p>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>