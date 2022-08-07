<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/cadastro.css">
    </head>
    <body>
        <fieldset>
                <form name="valor" action=" " method="POST">
                Digite o código: <input type="number" name="idcod" id="code"><br><br>
                    <label> Excluir o valor
                        <input type="submit" name="excluir" id="excluir" value="EXCLUIR">
                    </label>
                </form>
        </fieldset>
    </body>
</html>
<?php

    if(isset($_POST['excluir'])){
        $conexao=mysqli_Connect("localhost", "root","","3tid");

        $idcod = $_POST['idcod'];

        $sql = "DELETE FROM `tabela1` WHERE idcod  = $idcod";

        $result = mysqli_query($conexao,$sql);

        echo"O arquivo foi deletado";
                
    }
?>