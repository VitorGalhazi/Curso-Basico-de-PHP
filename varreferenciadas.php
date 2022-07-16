<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <form action="varreferenciadas.php" method="GET">
        <legend>Digite um valor.</legend>
        <br>
        <Input type="number" name="a">
        <Input type="submit" name="submit" value="ENVIAR">

    </formm>

        <?php
           
           if (isset($_GET['submit'])){
                $a = $_GET['a'];
                $b = &$a;
                $b += 10;

        ?>
            <h3>O valor da primeira variável é <?php echo $a; ?> e da segunda é <?php echo $b;?></h3>
    <?php  }
    ?>

    </body>
</html>