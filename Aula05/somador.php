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
            $n1 = 3;
            $n2 = 2;
            $n3 = $_GET["a"];/* GET pegar valores externos (http../?x=3&y=8)*/
            $n4 = $_GET["b"];
            $s = $n1 + $n2;
            echo "O valor da soma de 3 + 2 = $s.</br>";
            echo "O valor da subtração de 3 - 2 = ". ($n1-$n2);
            echo "<br/>O valor da subtração de $n3 + $n4 = ". ($n3+$n4);
        ?>
    </div>
</body>
</html>