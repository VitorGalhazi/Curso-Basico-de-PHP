<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php

            $v = array (
                "nome" => "Carlos",
                "idade" => 12,
                "peso" => 40.5
            );

            foreach($v as $k  =>  $c){
                echo "O campo $k possui o conteúdo $c" . "<br>";
            }

        ?>
    </body>
</html>