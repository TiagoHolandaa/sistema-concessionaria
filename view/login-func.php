<?php

    include_once "../controller/conexao.php";

    if(isset($_POST["submit"])) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        //$sql = mysqli_query($conn, "INSERT INTO tb_email_cli (emc_codigo, cd_email, cd_senha, cd_cliente_codigo) VALUES (null, '$email', '$senha', '1')");
    }
?>

<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>login funcionário - AutoJVA</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      html {
            height: 100%;
        }

        body {
            height: 100%;
            display: flex;
            align-items: center;
            background:
            linear-gradient(
              rgba(0,0,0,.8),rgba(0,0,0,.8)
            ),
            url(../img/galeria/mo-ft1.webp) no-repeat;
            background-size: 125%;
            background-position: center;

        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .dv1 {
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: row;
            width: 100vw;
            height: 100vh;
        }
        
        .dv2 {
            width: 600px;
            background: white;
            border-radius: 20px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        a.a {
            text-decoration: none;
            color: rgb(73, 80, 87);
        }

        a.a:hover {
          
          color:rgb(12, 12, 12)
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <div class="dv1">
        <div class="dv2 pb-3">
            <main class="form-signin">
                <section class="form">
                    <div class="container px-0">
                        <div class="box">
                            <div class="row">
                                <main class="form-signin">
                                    <form method="POST" action="../controller/login-func-con.php">
                                      <img class="mb-4 ms-lg-5" src="../img/galeria/logo-car-preta.png" alt="" width="72" height="57">
                                      <h1 class="h3 mb-3 fw-normal">Inscreve-se</h1>
                                      <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email</label>
                                      </div>
                                      <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Senha</label>
                                      </div>

                                      <div class="checkbox mb-3">
                                        <label>
                                          <input type="checkbox" value="remember-me"> Lembra de mim
                                        </label>
                                      </div>
                                      <button class="w-100 btn btn-lg btn-dark" name="submit" type="submit">Entrar</button>
                                      <a href="cadastro-func.php" class="a text-center ">
                                        <p class=" text-center">Ainda não tem uma conta? Registre aqui</p>
                                      </a>
                                      
                                      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
                                    </form>
                                  </main>
                            </div>
                        </div>
                    </div>
                    </sectin>
            </main>
        </div>
    </div>
    



    
  </body>
</html>
