<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="functionmultiparametros.php" method="GET">

            <legend for="inicio">Primeiro número:
                <input type="number" name="num1" id="inicio">
            </legend>
            <br>
            <legend for="fim">Segundo número:
                <input type="number" name="num2" id="fim">
            </legend>
            <br>
            <legend for="inicio">Terceiro número:
                <input type="number" name="num3" id="inicio">
            </legend>
            <br>
            <legend for="fim">Quarto número:
                <input type="number" name="num4" id="fim">
            </legend>


            <br>

            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="javascript:history.go(-1)">Voltar</a><br><br>

        </formm>
        <?php if (isset($_GET['submit'])){ 
                
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $num3 = $_GET['num3'];
                $num4 = $_GET['num4'];

                global $s;

                function soma (){
                    $p = func_get_args();
                    $tot = func_num_args();
                    $s = 0;
                    for($i = 0; $i < $tot; $i++){
                        $s += $p[$i];
                    }
                    return $s;
                }
                $r = soma($num1, $num2, $num2, $num4);
                echo "A soma dos valores  é $r"; 
            ?>

            <?php } 
            
        ?>
    </body>
</html>