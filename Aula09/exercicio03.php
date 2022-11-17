<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        span {
            font-weight: bold;
            color: #970101;
        }
        a {
            display: block;
            width: 60px;
            background-color: #045aa5;
            border: 1px solid #000000;
            border-radius: 5px;
            padding: 5px;
            margin-top: 10px;
            font-size: 1em;
            color: #ffffff;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $n1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
            $n2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
            $media = ($n1 + $n2)/2;
            if ($media < 5){
                $sit = "Reprovado";
            }
            elseif ($media >= 5 && $media < 7) {
                $sit = "Recuperação";
            }
            else {
                $sit = "Aprovado";
            }

            echo "A média entre <span>$n1</span> e <span>$n2</span> é <span>".number_format($media, 2, ",", ".")."</span><br/>O aluno está <span>$sit</span><br/>";
        ?>
        <a href="exercicio03.html">Voltar</a>
    </div>
</body>
</html>