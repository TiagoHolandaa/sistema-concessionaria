<?php 
    if(isset($_POST['submit'])){
        require_once('../controller/conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //---------------------consulta------------------//
        $sql = "SELECT * from tb_email_func WHERE func_email = '$email' and func_senha = '$senha'";
        $resul = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($resul);
        echo($num);
        if($num == 1){
            header('location: ../view/index.php');
        }
        else{
            header('location: ../view/login.php');
        }var_dump($num);
    }


?>