<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Calculo Porcentagem</title>
  <link rel="stylesheet" href="estilo.css" />
</head>

<body>
  <div class="form-box">
    <h2>Calculo Porcentagem</h2>
    <form method="post" action="calcular.php">
      <label>Valor do produto</label>
      <input type="number" step="0.01" name="value1" required />
      <br>
      <label>Parcelas:</label>
      <select name="parcela" id="parcela">
        <option value="1">1x</option>
        <option value="2">2x</option>
        <option value="3">3x</option>
        <option value="4">4x</option>
        <option value="5">5x</option>
        <option value="6">6x</option>
        <option value="7">7x</option>
        <option value="8">8x</option>
        <option value="9">9x</option>
        <option value="10">10x</option>
        <option value="11">11x</option>
        <option value="12">12x</option>
      </select>
      <br>
      <br>
      <br>
      <input type="submit" value="Calcular" />
    </form>
  </div>
</body>

</html>