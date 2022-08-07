
<fieldset>
    <form action="excluir.php" method="POST">
        <label>Digite o nome do produto
            <input type="text" name="descricao"><br>
            <input type="submit" name="submit_curso" value="ENVIAR">
        </label>
    </form>
</fieldset>
<?php
    if (isset($_POST["submit_curso"])){

        $descricao = $_POST['descricao'];

        $conexao=mysqli_Connect("localhost", "root","","3tid");

        $sql = "SELECT * FROM tabela1 WHERE descricao = '$descricao'";

        $resultado = mysqli_query($conexao, $sql);

        $num_row = mysqli_num_rows($resultado);

        if($num_row > 0){
            while($Linha = mysqli_Fetch_array($resultado)){
                $desc =  $Linha['descricao'];
                $dtval =  $Linha['dtval'];
                $qtdade = $Linha['qtdade'];

                echo "Temos o produto $desc" . "<br>";
                echo "Data de validade " . date("d/m/Y", strtotime($dtval)). '<br>';
                echo "Quantidade  disponível $qtdade";
            }
        }else{
            echo "Não temos  o produto";
        }

    }

   
?>