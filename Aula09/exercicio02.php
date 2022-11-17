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
            $ano = isset($_GET ["ano"]) ? $_GET ["ano"] : 1900;
            $idade = date("Y") - $ano;
            echo "Você nasceu em $ano.";
            echo "<br/>Você tem $idade anos no ano de ".date("Y").".";
            if ($idade < 16) {
                $votar = "Não pode votar";
                $dirigir = "não pode dirigir";
            }
            elseif ($idade >= 16 && $idade <18) {
                $votar = "O voto é opcional";
                $dirigir = "não pode dirigir";
            }
            elseif($idade > 65) {
                $votar = "O voto é opcional";
                $dirigir = "já pode dirigir";
            }
            else {
                $votar = "O voto é obrigatório";
                $dirigir = "já pode dirigir";
            }
            echo "<br/>$votar e $dirigir.";
        ?>
        <br/><a href="exercicio02.html">Voltar</a>
    </div>
</body>
</html>