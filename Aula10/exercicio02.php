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
        $ds = isset($_GET["ds"]) ? $_GET["ds"] : 0;

        switch ($ds) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar!";
                break;
            
            case 7:
            case 8:
                echo "Descance, pequeno gafanhoto!";
                break;
            default:
                echo "Dia da semana invalido";
        }
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</div>
</body>
</html>
 