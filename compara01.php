<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="compara01.php" method="GET">
            <legend>Digite os valores</legend>
            <Input type="number" name="x"><br>
            <Input type="number" name="y"><br>
            <Input type="submit" name="submit" value="ENVIAR">

        </formm>

        <?php
            if (isset($_GET['submit'])){
                $n1 = $_GET['x'];
                $n2 = $_GET['y'];
                $media  = ($n1 + $n2) / 2;

                $situacao =  $media < 6? "REPROVADO": "APROVADO";

                ?>
                <h3>O aluno está <?php echo $situacao; ?></h3><br>
        <?php  }
        ?>
    </body>
</html>