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
        $p = "leite";
        $pr = 4.5;

        printf ("O %s está custando R$ %.2f", $p, $pr);
        echo "<br/>";

        $x[0] = 4;
        $x[1] = 3.5;
        $x[2] = "r";

        print_r ($x);
        echo "<br/>";

        $v2 = array (3, 7, 6, 2, 1, 9);

        print_r($v2);

        var_dump ($x);

        var_export ($x);
        echo "<br/>";

        $txt = "Este é um exemplo de string gigante que vai mostrar com funciona o Wordwrap no PHP";
        $res = wordwrap ($txt, 15, "<br/>\n", false);
        echo $res;
        echo "<br/>";

        $tam = strlen($txt);
        echo $tam;
        echo "<br/>";

        $nome = "   José da Silva   ";
        $novo = trim($nome);
        echo "$nome - ";
        echo strlen($nome);
        echo "<br/>";
        echo "$novo - ";
        echo strlen($novo);
        echo "<br/><br/>";

        $count0 = str_word_count($txt,0);
        $count1 = str_word_count($txt,1);
        $count2 = str_word_count($txt,2);
        echo $count0,"<br/>";
        echo "<br/><br/>";
        print_r($count1);
        echo "<br/><br/>";
        print_r($count2);
        echo "<br/><br/>";

        $site = "Curso em video";
        $vetor = explode(" ", $site);
        print_r($vetor);
        echo "<br/>";

        $vet[0] = "Curso";
        $vet[1] = "em";
        $vet[2] = "video";
        $imp = implode("#", $vet);
        echo $imp;
        echo "<br/>";

        $letra =chr(67);
        echo $letra;
        echo "<br/>";

        $let = "T";
        $cod = ord($let);
        echo $cod;
        echo "<br/>";
      ?>
  </div>
</body>
</html>