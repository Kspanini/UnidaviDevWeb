<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>Atividade2</title>
    <head>
    <body>
        <?php
            function modulo($iNum){
                if ($iNum % 2 === 0){
                    return('par');
                }
                else{
                    return('impar');
                }
            }

            if(isset($_POST["numero"])){
                echo "O numero: ".intval($_POST["numero"]).' é: '.Modulo(intval($_POST["numero"])).'.';
            }
        ?>
        <hr>
        
        <h1>INSIRA UM NUMERO PARA VERIFICAR SE É PAR OU IMPAR:<h1>
        <br>
        <form action="atividade2.php" method="post">
            <label for="numero">Insira aqui:</label>
            <input type="number" name="numero" id="numero">
        </form>
    </body>
</html>