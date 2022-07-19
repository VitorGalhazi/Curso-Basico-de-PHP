<!DOCTYPE html>
    <head>     
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="estruturaifmedia.php" method="GET">

            <label for="n1">Digite a primeira nota 
                <Input type="number" name="n1" id="n1">
            </label>

            <br><br>

            <label for="n2">Digite a segunda nota:  
                <Input type="number" name="n2" id="n2">
            </label>
            
            

            <br><br>
 
            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="idade01.php">Voltar</a>

        </formm>

        <?php
        if(isset($_GET['submit'])){

            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];

            $media =  ($n1 + $n2)/2;

            if($media >= 7){
                $situa = " APROVADO.";
            }else if($media >= 5 && $media < 7){
                $situa = " em RECUPERAÇÃO";
            }else{
                $situa = " RETIDO";
            }
        ?>
        <div>

            <h4>A média do aluno(a) é <?php echo $media; ?> e ele/ela está<?php echo $situa; ?></h4>

        </div>
        <?php  } 
        
        ?>

    </body>
</html>