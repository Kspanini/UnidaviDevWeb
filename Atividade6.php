<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset='UTF-8'>
       <title>Atividade6</title>
   </head>
   <body>
       <?php
        const flv = [
            1 => 4.99, #maca
            2 => 6,19, #melancia
            3 => 9.07, #laranja
            4 => 4.89, #repolho
            5 => 5.29, #cenoura
            6 => 4.99, #batatinha
        ];
        const valor = 50;

        function custo($vPer,$vFlv){
            $iNum=0;
            for ($i = 1; $i <= count($vFlv); $i++){
                $iNum = $iNum + ($vPer[$i] * $vFlv[$i]);
            }
            return($iNum);
        }

        function color($iNum){
            if ($iNum<0){
                return('#ff0000');
            }
            else if($iNum>0){
                return('#0000ff');
            }
            else{
                return('#00ff00');
            }
        }

        if (   isset($_POST["maca"])
            && isset($_POST["melancia"])
            && isset($_POST["laranja"])
            && isset($_POST["repolho"])
            && isset($_POST["cenoura"])
            && isset($_POST["batatinha"])){
            $vQtdJoao = array(
                1 => $_POST["maca"],
                2 => $_POST["melancia"],
                3 => $_POST["laranja"],
                4 => $_POST["repolho"],
                5 => $_POST["cenoura"],
                6 => $_POST["batatinha"],
            );   
            echo '<p style="color: '
            .color(valor - custo($vQtdJoao,flv))
            .'">valor do Joãozinho apos a compra: R$'
            .valor - custo($vQtdJoao,flv)
            .' o valor da compra foi de: '
            .custo($vQtdJoao,flv)
            .'</p>';
            }

       ?>
       <h1>INSIRA A QUANTIDADE DE CADA ITEM QUE JOÃOZINHO COMPROU:</h1>
       <p>Joãozinho foi a feira com R$50,00.</p>
       <p>deve ser inserido a quantia comprada em Kg.</p>
        <form action="Atividade6.php" method="post">
           <label fop="maca">Insira a quantidade de maças</label>
           <input type="text" name="maca" id="maca" >
           <br>
           <label fop="melancia">Insira a quantidade de melancia</label>
           <input type="text" name="melancia" id="melancia" >
           <br>
           <label fop="laranja">Insira a quantidade de laranjas</label>
           <input type="text" name="laranja" id="laranja" >
           <br>
           <label fop="repolho">Insira a quantidade de repolhos</label>
           <input type="text" name="repolho" id="repolho" >
           <br>
           <label fop="cenoura">Insira a quantidade de cenouras</label>
           <input type="text" name="cenoura" id="cenoura" >
           <br>
           <label fop="batatinha">Insira a quantidade de batatinhas</label>
           <input type="text" name="batatinha" id="batatinha" >
           <br>
           <input type="submit" value="executar">
        </form>
    </body>
</html>