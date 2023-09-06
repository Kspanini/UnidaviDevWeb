<?php
    $iLinhas=10;
    $iColunas=14;
    $vVetor;
    for($i=0; $i<$iLinhas; $i++){
        for($j=0; $j<$iColunas; $j++){
            $vVetor[$i][$j] = rand(1, 1000);
        }
    }
    echo'<table style="border: 1px solid black;">'
      .'<tr style="border: 1px solid black;">';  
    for($i=0; $i<$iLinhas; $i++){
        for($j=0; $j<$iColunas; $j++){
            echo '<td style="border: 1px solid black;">'.$vVetor[$i][$j].'</td>';
        }
        echo'</tr>';
    }
    echo'</table>';
    
?>