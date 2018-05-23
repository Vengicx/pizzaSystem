<?php
    include_once "../adm/conect.php";

    $nome = $_POST["nomemateria"];
    
    $valor = $_POST["valormateria"];

    $insert = $pdo->prepare("INSERT (id, nome, valor)INTO materiaPrima values = ?, ?, ?");
    $insert->bindParam(1, NULL);
    $insert->bindParam(2, $nome);
    $insert->bindParam(3, $valor);

    if($insert->execute()){
        echo "Matéria-Prima inserida com sucesso";
    }else{
        echo "Erro ao inserir matéria-prima";
    }
?>