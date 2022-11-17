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
        $atual = $_GET["aa"]; // comentário de linha pode ser assim ou
        echo "O ano atual é ".$atual." e o ano anterior é ".--$atual; # o comentário da linha pode er assim também
        echo "<br/> O ano atual é ".$atual--. " o ano anterior é $atual";
        /* 
        comentário para várias linhas ao mesmo tempo 
        como pro exemplo o que eu estou fazendo
        aqui!
        */
        ?>
    </div>
</body>
</html>