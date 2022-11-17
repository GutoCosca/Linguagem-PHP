<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <form action="" method="get">
            Filtrar por sexo: <input type="text" name="filtro" required autofocus>
            <input type="submit" value="pesquisar">
        </form>
        <?php  
            include_once("conexao.php");

            $filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";
            if ($filtro == "Masculino" || $filtro == "masculino" || $filtro == "M" || $filtro == "m") {
                $filtrar = "M";
            }
            elseif ($filtro == "Feminino" || $filtro == "feminino" || $filtro == "F" || $filtro == "f") {
                $filtrar = "F";
            }
            else {
                $filtrar = "";
            }
            $sql = "select * from usuarios where sexo like '$filtrar' order by ano";
            $consulta = mysqli_query($conexao, $sql);
            $registros = mysqli_num_rows($consulta);

            echo "<br/>Resultado da pesquisa com a palavra $filtro<br/>";
            echo "<br/>$registros registros encontrados:<br/>";
            echo "<br/>";

            while ($exibirRegistros = mysqli_fetch_array($consulta)) {
                $codigo = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                $ano = $exibirRegistros[2];
                $sexo = $exibirRegistros[3];
                $idade = date("Y") - $ano;
                if ($sexo == "M" ) {
                    $sex = "Masculino";
                }
                else {
                    $sex = "Feminino";
                }

                echo "$codigo<br/>";
                echo "Nome: $nome - $idade anos<br/>";
                echo "Ano de Nascimento: $ano<br/>";
                echo "Sexo: $sex<br/><br/>";
            }
        ?>
        <br/>
        <a href="exercicio02.html"> Voltar </a>
    </div>
</body>
</html>