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
      <pre>
        <?php
            $v = array("A", "J", "M", "X", "K");
            print_r($v);
            var_dump($v);
            echo "O vetor tem ".count($v)." elementos.<br/>";

            array_push($v,"R");
            print_r($v);
            array_pop($v);
            print_r($v);

            array_unshift($v,"R");
            print_r($v);
            array_shift($v);
            print_r($v);
            
            $v = array("A", "J", "M", "X", "K");
            sort($v);
            print_r($v);

            $v = array("A", "J", "M", "X", "K");
            rsort($v);
            print_r($v);

            $v = array("A", "J", "M", "X", "K");
            asort($v);
            print_r($v);

            $v = array("A", "J", "M", "X", "K");
            arsort($v);
            print_r($v);

            $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
            print_r($v);
            ksort($v);
            print_r($v);

            $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
            print_r($v);
            krsort($v);
            print_r($v);
        ?>
      </pre>
  </div>
</body>
</html>