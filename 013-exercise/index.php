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
    <label>Nome do Aluno:</label>  
    <input type="text"  name="name" required  placeholder="Digite o nome do aluno..."/>  
    <label>Nota 1:</label>
      <input type="number" step="0.01" name="value1" required />
      <br>
      <label>Nota 2:</label>
      <input type="number" step="0.01" name="value2" required />
      <br>
      <label>Nota 3:</label>
      <input type="number" step="0.01" name="value3" required />
      <br>
      <input type="submit" value="Calcular" />
    </form>
  </div>
</body>

</html>