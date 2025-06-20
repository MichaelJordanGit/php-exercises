<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Calculo Media de Consumo de Combustivel</title>
  <link rel="stylesheet" href="estilo.css" />
</head>

<body>
  <div class="form-box">
    <h2>Média de Consumo</h2>
    <form method="post" action="calcular.php">
      <label>Informe o valor total em KM:</label>
      <input type="number" step="0.01" name="value1" required />
      <br>
      <label>Informe o valor em Litros</label>
      <input type="number" step="0.01" name="value2" required />
      <br>
      <input type="submit" value="Calcular" />
    </form>
  </div>
</body>

</html>