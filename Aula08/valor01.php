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
        <?php
            $valor = $_GET ["v"];
            $rq = sqrt($valor);
            echo "O valor enviado foi $valor";
            echo "<br/>e sua raiz quadrada é ".number_format($rq, 2, ",",".") ;

        ?>
        <br/>
        <a href="exercicio01.html"> Voltar</a>
    </div>
</body>
</html>