<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
  <body>
    <div>
      <form action="Exercicio02.php" method="get">
          <?php
            $c = 1;
            while ($c <= 5) {
              echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br/>";
              $c++;
            }

            
          ?>
        <input type="submit" value="Enviar" class="botao">
      </form>
  </div>
</body>
</html>