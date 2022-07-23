<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="function.php" method="GET">

            <legend for="inicio">Primeiro número:
                <input type="number" name="num1" id="inicio">
            </legend>
            <br>
            <legend for="fim">Segundo número:
                <input type="number" name="num2" id="fim">
            </legend>

            <br>

            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="javascript:history.go(-1)">Voltar</a><br><br>

        </formm>
        <?php if (isset($_GET['submit'])){ 
                
                $num2 = $_GET['num2'];
                $num1 = $_GET['num1'];

                function soma($num1, $num2){

                    $s = $num1 + $num2;
                    return($s)
                }

                $res = soma($num1, $num2);
                echo "A soma dos números é $res";
                

            ?>

            <?php } 
            
        ?>
    </body>
</html>