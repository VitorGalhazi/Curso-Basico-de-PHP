<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="idadevotar.php" method="GET">
            <label for="ano_nasc">Digite o seu ano de nascimento
                <Input type="number" name="ano_nasc" id="ano_nasc"><br>
            </label>
            <Input type="submit" name="submit" value="ENVIAR">

        </formm>

        <?php
            if (isset($_GET['submit'])){
                $ano_nasc = $_GET['ano_nasc'];
                $ano = date("Y");
                $idade = $ano - $ano_nasc;
                if($idade >= 18 && $idade < 65){
                    $votar = "DEVE VOTAR";
                }else if($idade<16){
                    $votar = "NÃO PODE VOTAR";
                }else{
                    $votar = "NÃO NECESSITA VOTAR";
                }
                
                
                
        ?>
                <h3>O cidadão <?php echo $votar; ?></h3><br>
        <?php  }
        ?>
    </body>
</html>