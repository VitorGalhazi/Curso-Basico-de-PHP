<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="funcoesaritmeticas.php" method="GET">

            <Input type="number" name="x">
            <Input type="number" name="y">
            <Input type="submit" name="submit" value="ENVIAR">

        </formm>

        <?php
            if (isset($_GET['submit'])){
                $num1 = $_GET['x'];
                $num2 = $_GET['y']; 
                echo "<br><br>";
                echo "valor absoluto de $num1 é " . abs($num1) . "<br>";
                echo "valor absoluto de $num2 é " . abs($num2) . "<br>";  
                echo "$num1<sup>$num2</sup> é " . pow($num1, $num2) . "<br>"; 
                echo "A raiz quadrada arredondada de $num1 é " . round(sqrt($num1)) . "<br>";
                echo "A raiz quadrada arredondada de $num2 é " . round(sqrt($num2)) . "<br>";
                echo "A parte inteira de $num1 é " . intval($num1) . "<br>";
                ?>
                <h3>Valores recebidos: <?php echo "$num1 e $num2"; ?></h3>
        <?php  }
        ?>
    </body>
</html>