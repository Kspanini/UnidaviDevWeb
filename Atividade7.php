<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset='utf-8'>
       <title>Atividade7</title>
   </head>
   <body>
       <?php
       const valorCarro = 22500;
       const qtdParcelas = 60;
       const valParcela = 489.65;
       echo 'o valor do carro a vista de Mariazinha é: '
            .valorCarro
            .'. Ela parcelou em '
            .qtdParcelas
            .' de '
            .valParcela
            .' e pagou em juros o valor de: '
            .(valParcela * qtdParcelas) - valorCarro;
       ?>
   </body>
</html>