<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

        <?php
                
            $X = "abc";
            $$X = "def";

        ?>
            <h3>O valor da primeira variável é <?php echo $X; ?> e da variável criada é <?php echo $abc;?></h3>

    </body>
</html>