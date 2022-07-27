<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php

            $m = array(

                array(6,4),
                array(4,9),
                array(3,2)
            );

            $m[0][1] = $m[2][1];

            print_r($m[0]);
        ?>
    </body>
</html>