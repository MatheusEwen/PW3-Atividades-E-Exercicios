<?php 
    $nomeTemp = $_FILES["arquivo"]["tmp_name"];
    $nomeArq = $_FILES["arquivo"]["name"];
    $destino = "arquivos/$nomeArq";

    //função para upload de arquivo
    move_uploaded_file($nomeTemp, $destino);
    echo "Upload realizado com sucesso";
    echo "<img src='arquivos/$nomeArq'>";

?>