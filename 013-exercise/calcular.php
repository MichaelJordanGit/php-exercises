<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name']; 
    $nota1 = floatval($_POST["value1"]);
    $nota2 = floatval($_POST["value2"]);
    $nota3 = floatval($_POST["value3"]);
    $peso1 = 2;
    $peso2 = 3;
    $peso3 = 5;
    $media = number_format(($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3)) / ($peso1 + $peso2 + $peso3);
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
        <p>O aluno <strong><?=$name?></strong> teve média <strong><?=$media?></strong></p>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>