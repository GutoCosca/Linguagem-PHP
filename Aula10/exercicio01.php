<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $op = isset($_GET["oper"]) ? $_GET["oper"] : 1;

        switch ($op) {
            case 1:
                $result = $n * 2;
                break;
            
            case 2:
                $result = $n ^ 3;
                break;
        
            case 3:
                $result = sqrt($n);
                break;
        }
        
        echo "O resultado da operação solicitada foi $result"
    ?>
    <p><a href="exercicio01.html">Voltar</a></p>
</div>
</body>
</html>
 