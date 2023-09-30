<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>Atividade1.php</title>
    </head>
    <body>
        <?php
            function soma($iNum1,$iNum2,$iNum3){
                if($iNum1 > 10){
                    return('<p style="color:blue">O resultado da soma é: '.$iNum1+$iNum2+$iNum3.'</p>');
                }
                else if($iNum2 < $iNum3){
                    return('<p style="color:green">O resultado da soma é: '.$iNum1+$iNum2+$iNum3.'</p>');
                }
                else if($iNum3<$iNum1){
                    return('<p style="color:red">O resultado da soma é: '.$iNum1+$iNum2+$iNum3.'</p>');
                }
                else{
                    return('<p>O resultado da soma é: '.$iNum1+$iNum2+$iNum3.'</p>');
                }

            }

            if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["num3"])){
                echo soma(intval($_POST["num1"]),intval($_POST["num2"]),intval($_POST["num3"]));
            }else{
                echo '<p>Nenhum valor informado previamente.</p>';
            }
        ?>
        <h1>PREENCHA TRES VALORES PARA VER A SOMA ENTRE ELES:</h1>
        <form action="Atividade1.php" method="post">
            <input type="number" name="num1" id="num1">
            <br>
            <input type="number" name="num2" id="num2">
            <br>
            <input type="number" name="num3" id="num3">
            <br>
            <input type="submit" value="executar">
        </from>
    </body>
</html>