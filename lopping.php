<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="lopping.php" method="GET">

            <legend for="inicio">Inicio:
                <input type="number" name="inicio" id="inicio">
            </legend>
            <br>
            <legend for="fim">Fim:  
                <input type="number" name="fim" id="fim">
            </legend>
            <br>
            <legend for="incre">Incremento:
                <select name="incre" id="incre">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </legend>

            <br>
 
            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="lopping.php">Voltar</a><br><br>

        </formm>
        <?php if (isset($_GET['submit'])){ 
                
                $inicio = $_GET['inicio'];
                $fim = $_GET['fim'];
                $incre = $_GET['incre'];

                for($i =  $inicio; $i < $fim; $i+=$incre){
                    echo $i . "  ";
                }
                

            ?>

            <?php } 
            
        ?>
    </body>
</html>