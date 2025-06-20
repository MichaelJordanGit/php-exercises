<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = floatval($_POST["value1"]);
    $altura = floatval($_POST["value2"]);
    $alturacm = number_format(($altura / 100), 2);
    $formula = number_format($peso / pow($alturacm, 2), 2, '.', '');
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
        <p>Seu Indice de Massa Corporal é <?= $formula ?></p>
        <br>
        <?php
        if ($formula < 18.5) {
            echo '<p>Voce esta abaixo do peso</p>';
        }

        if ($formula >= 18.5  && $formula <= 24.9) {
            echo '<p>Voce esta com peso normal</p>';
        }

        if ($formula >= 25  && $formula <= 29.9) {
            echo '<p>Voce esta com sobrepeso</p>';
        }

        if ($formula >= 30  && $formula <= 34.9) {
            echo '<p>Voce esta com obsidade Grau I</p>';
        }

        if ($formula >= 35  && $formula <= 39.9) {
            echo '<p>Voce esta com obesidade Grau II</p>';
        }

        if ($formula > 40) {
            echo '<p>Voce esta com obesidade Grau III procure ajuda imadiatamente</p>';
        }
        ?>
        <a class="btn-voltar" href="index.php">Voltar</a>
    </div>

</body>

</html>