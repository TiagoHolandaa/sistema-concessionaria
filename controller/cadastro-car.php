<?php

use LDAP\Result;

    require_once "conexao.php";
    if(isset($_POST["submit"])){
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $preco = $_POST["preco"];
        $cor = $_POST["cor"];
        $qAcento = $_POST["quant-acento"];
        $ano = $_POST["ano-car"];
        $kmR = $_POST["km-rodados"];

        $sql = "INSERT INTO tb_carro(cr_marca, cr_modelo, cr_preco, cr_cor, cr_quant_acent, cr_ano, cr_km) VALUES ('$marca', '$modelo', '$preco', '$cor', '$qAcento', '$ano', '$kmR')";
        $resul = mysqli_query($conn, $sql);

        header("Location: ../view/admin-autojva.php");
    } else {
        echo("erro no cadastro");
    }


?>