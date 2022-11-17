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
          $n = array(3,5,8,2);
          $n[] = 7;
          print_r ($n);

          $c = range(6,30,3);
          print_r($c);

          foreach($c as $valor){
          echo "$valor, ";
          }

          $v = array(1 => "A", 3 => 8, 8 => "C", 0 => "D");
          $v[] = 50;
          print_r ($v);
          unset($v[3]);
          print_r ($v);

          $v2 = array("nome" => "Ana", "idade" => 23, "peso" => 65.5);
          $v2["fuma"] = true;
          print_r ($v2);
          foreach($v2 as $c=>$valor) {
            echo "O valor do $c é $valor <br/>";
          }
        ?>
      </pre>
  </div>
</body>
</html>