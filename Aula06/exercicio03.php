<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencias</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $a1 = 3;
            $b1 = $a1;
            $b1 +=5;
            echo "Valor de a = $a1 e o valor de b = $b1";
            $a2 = 3;
            $b2 = &$a2; //referencia de b em relação a
            $b2 +=5;
            echo "<br/>Valor de a = $a2 e o valor de b = $b2";
        ?>
    </div>
</body>
</html>