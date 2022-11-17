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
      <pre>
        <?php
          $n = array(array(2,3),
                    array(3,4),
                    array(9,5)
                );
          print_r ($n);
          $n[2][0]=$n[1][1];
          print_r ($n);

          $n[2][0]="Guto";
          $n[1][1]="Coscarello";
          print_r ($n);
        ?>
      </pre>
  </div>
</body>
</html>