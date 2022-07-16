<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <form action="atribuicao2.php" method="GET">
        <legend>Digite o ano atual.</legend>
        <Input type="number" name="ano">
        <Input type="submit" name="submit" value="ENVIAR">

    </formm>

        <?php
           
           if (isset($_GET['submit'])){
                $ano = $_GET['ano'];

        ?>
            <h3>O ano atual é <?php echo $ano; ?> e o ano anterior é <?php echo --$ano;?></h3>
    <?php  }
    ?>

    </body>
</html>