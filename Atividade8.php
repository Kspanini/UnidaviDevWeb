<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset='utf-8'>
       <title>Atividade8</title>
   </head>
   <body>
        <?php
            const valorAvista = 8654;
            echo 'O valor a vista da moto é R$'
                 .valorAvista
                 .'<br>';
            for ($i = 0; $i< 4;$i++){
                echo 'O valor das parcelas em '
                     . 24+($i*12)
                     .' vezes é R$'
                     .(((1.5+(0.5*$i))/100+1) * valorAvista) / 24+($i*12)
                     .'<br>';
            }
        ?>
   </body>
</html>