<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="dinamicidadefor.php" method="GET">

            <legend for="i">Quantos inputs você quer: 
                <input type="number" name="num" id="i">
            </legend>

            <?php if (isset($_GET['submit'])){ ?>

                <?php 
                    $j = $_GET["num"];
                    for ($i = 0; $i < $j; $i++) { 
                        
                ?>

                    <input type="text" value="<?php echo $i; ?>">

                <?php } ?>

            <?php } ?>

            <br>
 
            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="dinamicidadefor.php">Voltar</a><br><br>

        </formm>

    </body>
</html>