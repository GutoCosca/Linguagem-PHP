<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variável de Variaáveis</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável x é $x";
        echo "<br/>A variável abc é $abc";
        ?>
    </div>
</body>
</html>