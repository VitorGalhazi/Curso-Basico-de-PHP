<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="tabuada.php" method="GET">

            <legend for="tabuada">Escolha um número:
            <select name="tabuada" id="tabuada">

            <?php for($i = 0; $i <= 10; $i++) { ?>

                <option value="<?php echo $i; ?>"><?php echo $i; ?></option> 

            <?php } ?>

            </select>
            </legend>

            <Input type="submit" name="submit" value="ENVIAR"><br><br>

        </formm>
        <?php if (isset($_GET['submit'])){ 
                $multi = $_GET['tabuada'];
        ?>
                <?php for($cont = 0; $cont<=10; $cont++){ 
                    $result = $multi * $cont;
                ?>
                <h3><?php echo "$multi X $cont = $result" . "<br>";?></h3>
                <?php } ?>
                

        

            <?php } ?>
        <a href="tabuada.php">Voltar</a><br><br>
    </body>
</html>