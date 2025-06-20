<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorms = floatval($_POST["value1"]);
    $formula = $valorms * 3.6;
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
        <p><?= $valorms ?> m/s = <strong><?= $formula ?> km/h</strong></p>
        <br>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>