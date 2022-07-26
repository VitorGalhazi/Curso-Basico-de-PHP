<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php

            function teste(&$a){

                $a += 2;
                return $a;

            }

            $x = 2;
            teste($x);
            echo $x;
            
        ?>
    </body>
</html>