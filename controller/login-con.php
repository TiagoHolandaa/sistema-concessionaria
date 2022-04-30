<?php 
    if(isset($_POST['submit'])){
        require_once('../controller/conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //---------------------consulta------------------//
        $sql = "SELECT * from tb_email_cli WHERE cli_email = '$email' and cli_senha = '$senha'";
        $resul = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($resul);
        if($num == 1){
            header('location: ../view/index.php');
        }
        else{
            header('location: ../view/login.php');
        }
    }


?>