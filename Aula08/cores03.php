<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <?php
        $txt = isset($_GET ["t"]) ? $_GET ["t"] : "Texto Genérico";
        $tam = isset($_GET ["tam"]) ? $_GET ["tam"] : "12pt";
        $cor = isset($_GET ["cor"]) ? $_GET ["cor"] : "#000000";
        $espe = isset($_GET ["espes"]) ? $_GET ["espes"] : "none";
    ?>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            font-weight: <?php echo $espe; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>"
        ?>
        <br/>
        <a href="exercicio03.html">Voltar</a>
    </div>
</body>
</html>