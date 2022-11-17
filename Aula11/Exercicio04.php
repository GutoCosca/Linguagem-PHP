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
        $nome0 ="Gustavo Coscarello";
        print "Seu nome é ". strtolower($nome0);
        echo "<br/>";

        $nome1 ="Gustavo Coscarello";
        print "Seu nome é ". strtoupper($nome1);
        echo "<br/>";

        $nome2 ="gustavo coscarello";
        print "Seu nome é ". ucfirst($nome2);
        echo "<br/>";

        $nome3 ="gustavo coscarello";
        print "Seu nome é ". ucwords($nome3);
        echo "<br/>";

        $nome4 ="Gustavo Coscarello";
        print "Seu nome é ". strrev($nome4);
        echo "<br/>";

        $frase ="Estou aprendendo PHP";
        print $frase."<br/>A string 'PHP' foi encontrada na posição ".strpos($frase, "PHP");
        echo "<br/>";

        $frase1 ="Estou aprendendo PHP";
        print $frase1."<br/>A string 'PhP' foi encontrada na posição ".stripos($frase, "PHP");
        echo "<br/>";

        $frase2 ="Estou aprendendo PHP no Curso em video de PHP";
        $count = substr_count($frase2, "PhP");
        print ("PHP encontrada $count vezes<br/>");

        $site = "Curso em Video";
        print substr ($site, 3 ,5)."<br/>";

        $nome5 = 'Gustavo';
        $novo = str_pad($nome5, 30, "#", STR_PAD_BOTH);
        print $novo."<br/>";

        print str_repeat("Php, ", 5);
        echo "<br/>";
        print str_repeat("-", 80);
        echo "<br/>";

        $frase3 = "Gosto de estudar Matemática!!!";
        print $frase3."<br/>";
        print str_replace("Matemática", "PHP", $frase3);
        echo "<br/>";
      ?>
  </div>
</body>
</html>