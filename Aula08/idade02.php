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
        <?php  
            include_once("conexao.php");

            $nome = isset($_POST ["nome"]) ? $_POST["nome"] : "[não informado]";
            $ano = isset($_POST ["ano"]) ? $_POST ["ano"] : "[não informado]";
            $sexo = isset($_POST ["sexo"]) ? $_POST ["sexo"] : "[não informado]";
            $idade = date("Y") - $ano;
            if ($sexo == "M") {
                $sex = "Masculino";
            }
            else {
                $sex = "Feminino";
            }

            echo "$nome nasceu em $ano, tem $idade anos e é $sex";
            
            $sql = "insert into usuarios (nome, ano, sexo) values ('$nome', '$ano', '$sexo')";
            $salvar = mysqli_query($conexao, $sql);
            
            echo "<br/>Seus dados foram incluidos no banco de dados corretamente";
        ?>
        <br/>
        <a href="exercicio02.html"> Voltar </a>
    </div>
</body>
</html>