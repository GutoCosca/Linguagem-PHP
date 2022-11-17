<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        span {
            font-weight: bolder;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $ano = $_GET ["an"];
            $idade = 2014 - $ano;
            echo "Quem nasceu e, $ano tem a idade de $idade anos.";
            $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "FACULTATIVO";
            echo "<br/>E desa forma seu voto é <span>$tipo</span>."
        ?>
    </div>
</body>
</html>