<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="raiz.php" method="GET">
            <label for="num">Digite o número
                <Input type="number" name="num" id="num">
            </label>
            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="raiz.php">Voltar</a>

        </formm>

        <?php
            if (isset($_GET['submit'])){
                
            $num = $_GET["num"];
            $rq = sqrt($num);
            
                
        ?>
                <h3>A raiz quadrada do número é <?php echo $rq; ?></h3><br>
        <?php  }
        ?>
    </body>
</html>