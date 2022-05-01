<?php
    include_once "../controller/conexao.php";
    if(isset($_POST["submit"])) {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $salario = $_POST["salario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $uf = $_POST["uf"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $nm = $_POST["numero"];
    $compl = $_POST["complemento"];
    $cep = $_POST["cep"];


    $sql = "INSERT INTO tb_func (func_nome, func_sobrenome, func_CPF, func_salario) VALUES ('$nome', '$sobrenome', '$cpf', '$salario')";
    $resultado = mysqli_query($conn, $sql);

    $pes = "SELECT * FROM tb_func WHERE func_nome = '$nome' and func_sobrenome = '$sobrenome' and func_CPF = '$cpf'";
    $pes_con = mysqli_query($conn, $pes);

    if($dados = mysqli_fetch_assoc($pes_con)){
        $chave = $dados["func_codigo"];

        $sql_email = "INSERT INTO tb_email_func(func_email, func_senha, cd_func_codigo) VALUES ('$email', '$senha', '$chave')";
        $resultado_2 = mysqli_query($conn, $sql_email);

        $sql_end = "INSERT INTO tb_endereco_cli(edc_uf, edc_cidade, edc_bairro, edc_rua, edc_nm, edc_compl, edc_cep, cd_cliente_cd_codigo) VALUES ('$uf', '$cidade', '$bairro', '$rua', '$nm', '$compl', '$cep', '$chave',)"
        header("location: ../view/index.php");
    }

    
   } else {
    header("location: ../view/cadastro-func.php");
   } 
?>