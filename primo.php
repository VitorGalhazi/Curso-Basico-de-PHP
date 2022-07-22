<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="primo.php" method="GET">

            <legend for="tabuada">Escolha um número:
                <input type="number" name="num" id="num">
            </legend>

            <Input type="submit" name="submit" value="ENVIAR"><br><br>

        </formm>
        <?php if (isset($_GET['submit'])){ 
                $num = $_GET['num'];
                $primo = 0;
        ?>
            <?php 
            echo "Valores multiplos: ";
            for($cont = 1; $cont<=10; $cont++){ 
                if($num%$cont === 0){
                    $primo++; 
                   echo $cont;
                }
            ?>
                
            <?php 
                }
                echo "<br>";
                echo "TOTAL DE MULTÍPLOS: $primo" . "<br>";
                if($primo >= 3){
                    echo "$num NÃO É PRIMO" . "<br>";
                }else{
                    echo "RESULTADO: $num É  PRIMO" . "<br>";
                }

            }
            
            ?>
        <a href="primo.php">Voltar</a><br><br>
    </body>
</html>