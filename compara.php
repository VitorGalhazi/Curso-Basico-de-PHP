<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="compara.php" method="GET">
            <legend>Digite os valores</legend>
            <Input type="number" name="x"><br>
            <Input type="number" name="y"><br>
            <input type="text" name="tipo">
            <Input type="submit" name="submit" value="ENVIAR">

        </formm>

        <?php
            if (isset($_GET['submit'])){
                $n1 = $_GET['x'];
                $n2 = $_GET['y'];
                $tipo = $_GET['tipo'];

                $r = ($tipo == "s") ? $n1  + $n2 : $n1 * $n2;
                ?>
                <h3>Valores recebidos: <?php echo "$n1 e $n2"; ?></h3><br>
                <h3>O resultado será: <?php echo "$r"; ?></h3>
        <?php  }
        ?>
    </body>
</html>