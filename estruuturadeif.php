<!DOCTYPE html>
    <head>     
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="estruuturadeif.php" method="GET">

            <label for="nome">Digite o seu nome: 
                <Input type="text" name="nome" id="nome">
            </label>

            <br><br>

            <label for="nome">Digite a sua idade:  
                <Input type="number" name="idade" id="idade">
            </label>
            
            

            <br><br>
 
            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="idade01.php">Voltar</a>

        </formm>

        <?php
        if(isset($_GET['submit'])){

            $nome = $_GET["nome"];
            $idade = $_GET["idade"];

            if($idade < 18 && $idade >= 16){
                $situa = "NÃO PODE DIRIGIR E VOTAR É OPCIONAL";
            }else if($idade < 16){
                $situa = "NÃO PODE NEM DIRIGIR E NEM VOTAR";
            }else if($idade >= 65){
                $situa = "PODE DIRIGIR E VOTAR É OPCIONAL";
            }else{
                $situa = "PODE DIRIGIR E DEVE VOTAR";
            }
        ?>
        <div>

            <h4><?php echo $nome; ?>, você <?php echo $situa ?></h4>

        </div>
        <?php  } 
        
        ?>

    </body>
</html>