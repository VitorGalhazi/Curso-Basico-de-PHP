<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="switchcondicional.php" method="GET">

            <select name="semana">
                <option>Escolha o dia da semana</option>
                <option value="1">Segunda-Feira</option>
                <option value="2">Terça-Feira</option>
                <option value="3">Quarta-Feira</option>
                <option value="4">Quinta-Feira</option>
                <option value="5">Sexta-Feira</option>
                <option value="6">Sábado-Feira</option>
                <option value="7">Domingo</option>
            </select>

            <br><br>
 
            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="switchcondicional.php">Voltar</a><br><br>

        </formm>

        <?php
            if (isset($_GET['submit'])){

            $semana = $_GET['semana'];

            switch ($semana){
                case 0:
                    echo "Escolha um dia da semana.";
                    break;
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    echo "Hoje tem aula.";
                    break;
                case 6:
                case 7:
                    echo "Hoje não tem aula.";
                    
            }

                
        ?>
        <?php  }
        ?>
    </body>
</html>