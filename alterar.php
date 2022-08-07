<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/cadastro.css">
    </head>
    <body>
        <fieldset>
                <form name="validade" action=" " method="POST">
                    <label> Mostrar os produtos fora da validade:
                        <input type="submit" name="mostrar" id="mostrar" value="MOSTRAR">
                    </label>
                </form>
                <form name="valor" action=" " method="POST">
                Digite o código: <input type="number" name="idcod" id="code"><br><br>
                    <label> Trocar o valor <br>
                        Digite o valor: <input type="number" name="val" id="code">
                        <input type="submit" name="valor" id="altval" value="TROCAR">
                    </label>
                    <br><br>
                    <label> Trocar a quantidade <br>
                        Digite a quantidade: <input type="number" name="qtdade" id="code">
                        <input type="submit" name="altqtd" id="altqtd" value="TROCAR">
                    </label>
                </form>
        </fieldset>
    </body>
</html>
<?php

    if(isset($_POST['mostrar'])){
        $conexao=mysqli_Connect("localhost", "root","","3tid");
        date_default_timezone_set('America/Sao_Paulo');
        $dataAtual = date('Y/m/d');


        $sql = "SELECT * FROM tabela1 WHERE dtval < '$dataAtual'";
        
        $result = mysqli_query($conexao,$sql);
    
        $num_row = mysqli_num_rows($result);

        if($num_row > 0){
            while($Linha = mysqli_Fetch_array($result)){
                if($Linha['descricao'] === ""){

                }else{
                    $data =  $Linha['dtval'];
                    $desc = $Linha['descricao'];
                    echo "O produto " . $desc . " tem a validade " . date("d/m/Y", strtotime($data)). '<br>';
                }
            }
        }
    }

    
    if(isset($_POST['valor'])){

        $conexao=mysqli_Connect("localhost", "root","","3tid");

        $idcod = $_POST['idcod'];
        $val = $_POST['val'];

        $sql="SELECT * FROM tabela1 WHERE idcod='$idcod'";
        $result=mysqli_query($conexao,$sql);
        $cadastroEncontrado=mysqli_num_rows($result);

        while ($linha = mysqli_fetch_array($result)) {
            echo "Descrição:".$linha["descricao"]."<br>";
            
            $novovalor = $val;
                echo "O novo valor é ". $novovalor.'<br><hr>';
            $alt="UPDATE tabela1 SET valor='$novovalor' WHERE idcod='$idcod'";
            $result1=mysqli_query($conexao,$alt);
        }    
        
        
    }

    if(isset($_POST['altqtd'])){

        $conexao=mysqli_Connect("localhost", "root","","3tid");

        $idcod=$_POST['idcod'];
        $novaqtdade=$_POST['qtdade'];
        
        $sql="SELECT * FROM tabela1 WHERE idcod='$idcod'";
        $result=mysqli_query($conexao,$sql);
        $cadastroEncontrado=mysqli_num_rows($result);
        if ($cadastroEncontrado > 0){
        
            while ($linha = mysqli_fetch_array($result)) {
            echo "Descrição:".$linha["descricao"]."<br>";
            echo "Quantidade:".$linha["qtdade"]."<br>";
            
            $novaqtdade = $linha['qtdade'] + $novaqtdade;
                echo "A nova quantidade é " . $novaqtdade.'<br><hr>';
            $alt="UPDATE tabela1 SET qtdade='$novaqtdade' WHERE idcod='$idcod'";
            $result2=mysqli_query($conexao,$alt);
        }
        
        }else{
            echo "Cadastro Não Encontrado";
        }
    }
        
        


?>