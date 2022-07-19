<!DOCTYPE html>
    <head>
    <?php
        if(isset($_GET['submit'])){

            $nome = $_GET["nome"];
            $color = $_GET["color"];
            $tam = $_GET["tam"];

        }       
        ?>
        <meta charset="UTF-8">
        <style>

            span.texto{
                color: <?php echo $color?>;
                font-size: <?php echo $tam?>;

            }

        </style>
    </head>
    <body>
        <form action="cssphp.php" method="GET">

            <label for="nome">Digite o seu nome: 
                <Input type="text" name="nome" id="nome">
            </label>

            <br><br>

            <label for="tam">Escolha o tamanho da fonte:
                <select name="tam" id="tam">
                    <option value="8px">8px</option>
                    <option value="12px">12px</option>
                    <option value="16px">16px</option>
                    <option value="25px">25px</option>
                    <option value="40px">40px</option>
                </select><br>
            </label>

            <br>

            <label for="color">

                <input type="color" name="color" id="color">

            </label>
            

            <br><br>
 
            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="idade01.php">Voltar</a>

        </formm>

        <div>

                <span class="texto"><?php echo $nome;?></span>

        </div>

    </body>
</html>