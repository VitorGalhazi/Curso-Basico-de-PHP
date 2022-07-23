<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php

            $c = 7;
            $fat = 1;
            do{

            $fat = $fat * $c;
            $c--;

            }while($c >= 1);
            echo $fat;

        ?>
    </body>
</html>