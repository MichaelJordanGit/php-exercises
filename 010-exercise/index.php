<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Calculo Quadrado</title>
  <link rel="stylesheet" href="estilo.css" />
</head>

<body>
  <div class="form-box">
    <h2>Calculo de volume</h2>
    <form method="post" action="calcular.php">
      <label>Comprimento:</label>
      <input type="number" step="0.01" name="value1" required />
      <label>Largura:</label>
      <input type="number" step="0.01" name="value2" required />
      <label>Altura:</label>
      <input type="number" step="0.01" name="value3" required />
      <input type="submit" value="Calcular" />
    </form>
  </div>
</body>

</html>