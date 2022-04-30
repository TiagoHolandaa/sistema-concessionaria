<?php
    include_once "../controller/conexao.php";
    if(isset($_POST["submit"])) {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $uf = $_POST["uf"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $nm = $_POST["numero"];
    $compl = $_POST["complemento"];
    $cep = $_POST["cep"];

    $sql = "INSERT INTO tb_cliente (cd_nome, cd_sobrenome, cd_CPF) VALUES ('$nome', '$sobrenome', '$cpf')";
    $resultado = mysqli_query($conn, $sql);

    $pes = "SELECT * FROM tb_cliente WHERE cd_nome = '$nome' and cd_sobrenome = '$sobrenome' and cd_CPF = '$cpf'";
    $pes_con = mysqli_query($conn, $pes);

    if($dados = mysqli_fetch_assoc($pes_con)){
        $chave = $dados["cd_codigo"];

        $sql_email = "INSERT INTO tb_email_cli(cli_email, cli_senha, cd_cliente_codigo) VALUES ('$email', '$senha', '$chave')";
        $resultado_2 = mysqli_query($conn, $sql_email);

        $sql_end = "INSERT INTO tb_endereco_cli(edc_uf, edc_cidade, edc_bairro, edc_rua, edc_nm, edc_compl, edc_cep, cd_cliente_cd_codigo) VALUES ('$uf', '$cidade', '$bairro', '$rua', '$nm', '$compl', '$cep', '$chave')";
        $resultado_3 = mysqli_query($conn, $sql_end);
        
    }

    
   } else {
    //header("location: ../view/cadastro.php");
   } var_dump($resultado_3);
?>