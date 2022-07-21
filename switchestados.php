<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="switchestados.php" method="GET">

        <select id="estado" name="estado">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
        </select>

            <br><br>
 
            <Input type="submit" name="submit" value="ENVIAR"><br><br>
            <a href="switchestados.php">Voltar</a><br><br>

        </formm>

        <?php
            if (isset($_GET['submit'])){

            $semana = $_GET['estado'];

            switch ($semana){
                case "AM":
                case "RO":
                case "RR":
                case "AC":
                case "AP":
                case "PA":
                    echo "Você está na região NORTE.";
                    break;
                case "SE":
                case "PE":
                case "RN":
                case "PI":
                case "PB":
                case "MA":
                case "BA":
                case "CE":
                case "AL":
                    echo "Você está na região NORDESTE.";
                    break;
                case "SP":
                case "RJ":
                case "ES":
                case "MG":
                    echo "Você está na região SUDESTE.";
                    break;
                case "PR":
                case "SC":
                case "RS":
                    echo "Você está  na região SUL.";
                    break;
                case "MT":
                case "MS":
                case "TO":
                case "GO":
                case "DF":
                    echo "Você está  na região CENTRO-OESTE.";
            }

                
        ?>
        <?php  }
        ?>
    </body>
</html>