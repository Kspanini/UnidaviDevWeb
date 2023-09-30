<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="utf8">
        <title>atividade3</title>
    </head>
    <body>
        <?php
            function areaDoQuadrado($lado){
                return($lado*$lado);
            }

            try{
                if(isset($_POST["lado"])){
                    echo "A area do quadrado de lado ".floatval($_POST["lado"]).' é: '.areaDoQuadrado($_POST["lado"]).'.';
                }
            }
            catch(Exception $e){
                echo 'Exeção capturada: '.$e->getMessage();

            }
        ?>
        <hr>
        <form action="Atividade3.php" method="post">
            <label for="lado">Insira o valor da lateral do quandrado:</label>
            <input type="text" name="lado" id="lado">
            <input type="submit" value="executar">
        </form>
        </body>
</html>