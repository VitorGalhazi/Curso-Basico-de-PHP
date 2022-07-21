<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="switch.php" method="GET">

            <br><br>

            <label for="numero">Digite um número:
                <Input type="number" name="numero" id="numero">
            </label>

            <br><br>

            <Input type="radio" name="conta" id="raiz" value="Raiz">
            <label for="raiz">Raiz</label>
            <Input type="radio" name="conta" id="potencia" value="Potencia">
            <label for="potenncia">Potencia</label>
            <Input type="radio" name="conta" id="dobro" value="Dobro">
            <label for="dobro">Dobro</label>

            <br><br>
 
            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="switch.php">Voltar</a><br><br>

        </formm>

        <?php
            if (isset($_GET['submit'])){
                
            $num = $_GET['numero'];
            $conta = $_GET["conta"];

            switch ($conta){
                case $conta=="Potencia":
                    $result = $num  ** $num;
                    echo "A potência desse número por ele mesmo é " . $result ;
                    break;
                case $conta=="Raiz":
                    $result = sqrt($num);
                    echo "A raiz desse número é " . $result;
                    break;
                case $conta=="Dobro":
                    $result = $num * 2;
                    echo "O dobro desse número é " . $result;
                    
            }

                
        ?>
        <?php  }
        ?>
    </body>
</html>