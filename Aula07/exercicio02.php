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
            $a = 3; //inteiro
            $b = "3"; //String
            $r = $a == $b ? "SIM" : "NÃO";
            echo "As variáves A e B são iguais? $r";
            $r = $a === $b ? "SIM" : "NÃO";
            echo "<br/>As variáves A e B são idênticas? $r";
        ?>
    </div>
</body>
</html>