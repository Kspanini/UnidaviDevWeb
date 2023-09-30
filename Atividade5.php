<DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>Atividade5</title>
    </head>
    <body>
        <?php
            function areaDoRetangulo($base,$altura){
                return(($base*$altura)/2);
            }

            if (isset($_POST["base"]) && isset($_POST["altura"])){
                echo 'A area do triangulo de base '
                    .floatval($_POST["base"])
                    .' e altura '
                    .floatval($_POST["altura"])
                    .' é: '
                    .areaDoRetangulo($_POST["base"],$_POST["altura"]);
            }
        ?>
        <hr>
        <form action="atividade5.php" method="post">
            <label for="base">insira o valor da <b>base</b> do trianguilo</label>
            <input type="text" name="base" id="base">
            <br>
            <label for="altura">insira o valor da <b>altura</b> do triangulo</lado>
            <input tupe="text" name="altura" id="altura">
            <input type="submit" value="executar">
        </form>
    </body>
</html>