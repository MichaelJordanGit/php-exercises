<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Calculadora PHP</title>
  <link rel="stylesheet" href="estilo.css" />
</head>

<body>
  <div class="form-box">
    <h2>Somar e Multiplicar</h2>
    <form method="post" action="calcular.php">
      <label>Primeiro número:</label>
      <input type="number" name="value1" required />

      <label>Segundo número:</label>
      <input type="number" name="value2" required />

      <input type="submit" value="Calcular" />
    </form>
  </div>
</body>

</html>