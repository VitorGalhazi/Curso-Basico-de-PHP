<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="idade01.php" method="GET">

            <label for="nome">Digite o seu nome: 
                <Input type="text" name="nome" id="nome">
            </label>

            <br><br>

            <label for="idade">Digite seu ano de nascimento:
                <Input type="number" name="idade" id="idade">
            </label>

            <br><br>

            <Input type="radio" name="sexo" id="masculino" value="Masculino">
            <label for="masculino">Masculino</label>
            <Input type="radio" name="sexo" id="feminino" value="Feminino">
            <label for="feminino">Feminino</label>

            <br><br>
 
            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="idade01.php">Voltar</a>

        </formm>

        <?php
            if (isset($_GET['submit'])){
                
            $nome = $_GET["nome"];
            $ano_nasc = $_GET["idade"];
            $sexo = $_GET["sexo"];
            $ano_atual = date("Y");
            
            $idade = $ano_atual - $ano_nasc;

            echo "O nome do usuário é $nome, tem $idade anos e o sexo é $sexo";
                
        ?>
        <?php  }
        ?>
    </body>
</html>