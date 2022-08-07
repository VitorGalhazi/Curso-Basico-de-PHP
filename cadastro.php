<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/cadastro.css">
    </head>
    <body>
        <fieldset>
            <form name="cadastro" method="POST" action="">
                <label for="idcod">Id do produto
                    <input type="number" name="idcod" id="idcod" required>
                </label><br><br>
                <label for="descricao">Descrição do produto
                    <input type="text" name="descricao" id="descricao" required>
                </label><br><br>
                <label for="dtval">Data de  validade
                <input onblur="validardata(this.value);" name="dtval" id="dataDeNascimento" type="date" required>
                </label><br><br>
                <label for="qtdade">Quantidade
                    <input type="number" name="qtdade" id="qtdade" min="1" required>
                </label><br><br>
                <label for="valor">Valor do produto
                    <input type="text" name="valor" id="valor" required>
                </label><br><br>
                <input type="submit" name="entrar" id="entrar" value="CADASTRAR">
            </form>
        </fieldset>
    </body>
</html>
<?php

if (isset($_POST["entrar"])){

    $conexao=mysqli_Connect("localhost", "root","","3tid");

    $idcod = $_POST['idcod'];
    $descricao = $_POST['descricao'];
    $dtval = $_POST['dtval'];
    $qtdade = $_POST['qtdade'];
    $valor = $_POST['valor'];

    $sql = "SELECT * FROM tabela1 WHERE idcod = '$idcod'";
    $result = mysqli_query($conexao,$sql);
    
    $num_rows = mysqli_num_rows($result);

    if($num_rows > 0) {
        echo '<script>
        alert("Cadastro já feito!")
        </script>';
    } else {
        $sql="INSERT INTO tabela1(idcod, descricao, dtval, qtdade, valor) 
                VALUES('$idcod','$descricao','$dtval','$qtdade','$valor')";
                        
                $result=mysqli_query($conexao,$sql); 
    }

}
?>