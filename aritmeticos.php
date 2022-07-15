<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php

            $num1 = 5;
            $num2 = 3;
            $media = ($num1 + $num2) / 2;

            echo "A soma entre $num1 e $num2 é " . ($num1 + $num2) . "<br>";
            echo "A multiplicação entre $num1 e $num2 é " . ($num1 * $num2) . "<br>";
            echo "A subtração entre $num1 e $num2 é " . ($num1 - $num2) . "<br>";
            echo "A divisão entre $num1 e $num2 é " . ($num1 / $num2) . "<br>";
            echo "O resto da divisão entre $num1 e $num2 é " . ($num1 % $num2) . "<br>";
            echo " A média entre $num1 e $num2 é " . $media;
        ?>
    </body>
</html>