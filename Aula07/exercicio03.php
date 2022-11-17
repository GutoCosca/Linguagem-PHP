<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
        $nota1 = $_GET ["n1"];
        $nota2 = $_GET ["n2"];
        $media = ($nota1 + $nota2)/2;
        echo "A média entre a $nota1 e a $nota2 é ".number_format($media, 2 ,",",".");
        echo "<br/> A situação do aluno é ".($media < 6 ? "reprovado" : "aprovado");//todo operador deve ser colocado etre parêntese nesta situação
        ?>
    </div>
</body>
</html>