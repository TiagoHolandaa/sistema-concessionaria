<?php
  include_once "../controller/conexao.php";

  if(isset($_POST["submit"])) {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];

    $conn->query("INSERT INTO tb_cliente (cd_nome, cd_sobrenome, cd_cpf) VALUES ('$nome', '$sobrenome', '$cpf')");
  }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="shortcut icon" href="../img/galeria/logo car.png" type="image/x-icon">
    <title>Cadastro</title>
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
              rgba(0,0,0,.8),rgba(0,0,0,.7)
            ),
            url(../img/galeria/original.jfif) no-repeat;
            background-size: 100%;

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
            margin-bottom: -1px;
            border-radius: 0;
        }

        .form-signin input[name="confirma-senha"] {
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
</head>

<body>
    
<div class="dv1">
        <div class="dv2 pb-3">
            <main class="form-signin">
                <section class="form">
                    <div class="container px-0">
                        <div class="box">
                            <div class="row">
                              <form method="POST" action="../controller/cadastro-cli.php" class="row g-3 needs-validation">
                                <img class="mb-3" src="../img/galeria/logo-car-preta.png" alt="" style="width: 90px; margin-left: 35%;">
                                <h1 class="h3 mb-3 fw-normal text-center">Inscreve-se</h1>
                                <div class="col-md-6 position-relative">
                                    <label for="validationTooltip03" class="form-label">Nome*</label>
                                    <input type="text" class="form-control" name="nome" id="validationTooltip03" required>
                                    <div class="invalid-tooltip">
                                      Please provide a valid city.
                                    </div>
                                  </div>
                                  <div class="col-md-6 position-relative">
                                  <label for="validationTooltip04" class="form-label">Sobrenome*</label>
                                    <input type="text" class="form-control" name="sobrenome" id="validationTooltip04" required>
                                    <div class="invalid-tooltip">
                                      Please provide a valid city.
                                    </div>
                                  </div>
                                  <div class="col-md-12 position-relative">
                                    <label for="validationTooltip05" class="form-label">CPF*</label>
                                    <input type="text" class="form-control" name="cpf" id="validationTooltip05" required>
                                    <div class="invalid-tooltip">
                                      Please provide a valid zip.
                                    </div>
                                  </div>
                                <div class="col-md-12 position-relative">
                                    <label for="validationTooltip01" class="form-label">Email*</label>
                                    <input type="email" name="email" class="form-control" id="validationTooltip01" required>
                                    <div class="valid-tooltip">
                                      Looks good!
                                    </div>
                                  </div>
                                  <div class="col-md-6 position-relative">
                                    <label for="validationTooltip02" class="form-label">Senha*</label>
                                    <input type="password" name="senha" class="form-control" id="validationTooltip02" required>
                                    <div class="valid-tooltip">
                                      Looks good!
                                    </div>
                                  </div>
                                  <div class="col-md-6 position-relative">
                                    <label for="confirma-senha" class="form-label">Confirma senha*</label>
                                    <div class="input-group has-validation">
                                      <input type="password" name="confirma-senha" class="form-control" id="confirma-senha" aria-describedby="confirma-senhaPrepend" required>
                                      <div class="invalid-tooltip">
                                        Please choose a unique and valid username.
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-6">
                                <label for="username" class="form-label">UF</label>
                                <div class="input-group has-validation">
                                
                                    <input type="text" class="form-control" name="uf" id="uf" placeholder="uf" required>
                                    <div class="invalid-feedback">
                                        Seu nome de usuário é obrigatório.
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="username" class="form-label">Cidade</label>
                                <div class="input-group has-validation">
                                
                                    <input type="text" class="form-control" name="cidade" id="username" placeholder="Cidade" required>
                                    <div class="invalid-feedback">
                                        Seu nome de usuário é obrigatório.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Bairro</label>
                                <input type="text" name="bairro" class="form-control" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Por favor insira seu endereço de entrega.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address2" class="form-label">Rua</label>
                                <input type="text" name="rua" class="form-control" id="address2" placeholder="Apartment or suite">
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">Número</label>
                                <input type="text" class="form-control" name="numero" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    CEP obrigatório
                                </div>
                                <div class="invalid-feedback">
                                    POr favor insira o país válido
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label">complemento</label>
                                <input type="text" class="form-control" name="complemento" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    CEP obrigatório
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">CEP</label>
                                <input type="text" class="form-control" name="cep" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    CEP obrigatório
                                </div>
                            </div>
                                  
                                  <div class="col-12">
                                  <button class="w-100 btn btn-lg btn-dark mb-2" type="submit" name="submit">Entrar</button>
                                  </div>
                                  <a href="cadastro.php" class="a text-center ">
                                    <p class=" text-center">Ainda não tem uma conta? Registre aqui</p>
                                  </a>
                                <p class="mt-5 mb-3 text-muted text-center">&copy; 2017–2022</p>
                              </form> 
                            </div>
                        </div>
                    </div>
                    </sectin>
            </main>
        </div>
    </div>
    <script src="../js/bootstrap.js "></script>
</body>

</html>