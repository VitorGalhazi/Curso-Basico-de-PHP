<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <form action="atribuicao.php" method="GET">

        <Input type="number" name="preco">
        <Input type="submit" name="submit" value="ENVIAR">

    </formm>

        <?php
           
           if (isset($_GET['submit'])){
            $num1 = $_GET['preco'];
            $num1 = $num1 + ($num1 * 10/100);
            echo "<br>" . number_format($num1+=($num1 * 10/100));
            ?>
            <h3>O valor do produto é:  <?php echo number_format($num1); ?></h3>
    <?php  }
    ?>

    </body>
</html>