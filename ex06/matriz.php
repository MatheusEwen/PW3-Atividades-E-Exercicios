<!DOCTYPE html>
<html>
<head>
<title>Vetor</title>
</head>
<body>


<?php
    
    $dados = array();
    $dados[0][0] = "1";
    $dados[0][1] = "Rovilson";
    $dados[0][2] = "18";
    $dados[0][3] = "789548";

    $dados[1][0] = "2";
    $dados[1][1] = "Maria";
    $dados[1][2] = "28";
    $dados[1][3] = "598473";

    $dados[2][0] = "3";
    $dados[2][1] = "joão";
    $dados[2][2] = "25";
    $dados[2][3] = "489652";


    echo "<table border=1>";
    for($linha=0;$linha<=2;$linha++){

        echo"<tr>";

        for($coluna=0;$coluna<=3;$coluna++){
            echo'<td>'.$dados[$linha][$coluna].'</td>';
        }
        echo"</tr>";
    }
    echo"</table>";

?>
</body>
</html>