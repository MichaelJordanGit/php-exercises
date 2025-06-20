<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Calculo de média</title>
    <link rel="stylesheet" href="estilo.css" />
  </head>
  <body>
    <div class="form-box">
      <h2>Calculo de Média</h2>
      <form method="post" action="calcular.php">
        <label>Valor 1</label>
        <input type="number" name="value1" required />

        <label>Valor 2:</label>
        <input type="number" name="value2" required />
        
        <label>Valor 3:</label>
        <input type="number" name="value3" required />

        <input type="submit" value="Calcular" />
      </form>
    </div>
  </body>
</html>
