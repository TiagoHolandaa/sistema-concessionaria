<?php

    include_once "../controller/conexao.php";

    if(isset($_POST["submit"])) {
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $cpf = $_POST["cpf"];
        $uf = $_POST["uf"];
        $cidade = $_POST["cidade"];
        $bairro = $_POST["bairro"];
        $rua = $_POST["rua"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $cep = $_POST["cep"];

        $sql = mysqli_query($conn, "INSERT INTO tb_cliente (cd_codigo, cd_nome, cd_sobrenome,cd_CPF) VALUES (null, '$nome', '$sobrenome', '$cpf')");

        $sql = mysqli_query($conn, "INSERT INTO tb_endereco_cli (edc_codigo, edc_uf ,edc_cidade, edc_bairro, edc_rua, edc_nm, edc_compl, edc_cep, cd_cliente_cd_codigo) VALUES (null, '$uf', '$cidade', '$bairro', '$rua', '$numero', '$complemento', '$cep', '1');");
    }
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="shortcut icon" href="Checkout example/logo-tipo.jpg" type="image/x-icon">
    <title>Autojva - pagamento</title>

    <link rel="canonical" href="Checkout example/bootstrap.bundle.min.js.download">



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
        
        .btn-dblue {
            background-color: #4e7385;
            color: white;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../css/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4 rounded-circle" src="../img/galeria/logo-car-preta.png" alt="" width="82" height="67">
                <h2>formulário de pagamento</h2>
            </div>
            <br>
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Seu carrinho</span>

                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Nenhum item</h6>

                            </div>

                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (BRL)</span>
                            <strong>R$0</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="código promocional">
                            <button type="submit" class="btn btn-dark">Inserir</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Endereço de Cobrança</h4>
                    <form class="needs-validation" novalidate method="POST">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Primeiro nome
                                </label>
                                <input type="text" class="form-control" name="nome" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    O primeiro nome válido é obrigatório.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Último nome</label>
                                <input type="text" class="form-control" name="sobrenome" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    O último nome válido é obrigatório.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">CPF</label>
                                <div class="input-group has-validation">
                                
                                    <input type="text" class="form-control" name="cpf" id="username" placeholder="Username" required>
                                    <div class="invalid-feedback">
                                        Seu nome de usuário é obrigatório.
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
                        </div>

                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">O endereço de entrega é o mesmo que meu endereço de cobrança</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">Salve esta informação para a próxima vez</label>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Pagamento</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Cartão de crédito</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Cartão de débito</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Nome no cartão</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Nome completo conforme exibido no cartão</small>
                                <div class="invalid-feedback">
                                    O nome no cartão é obrigatório
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Número do cartão de crédito</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    O número do cartão de crédito é obrigatório
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Expiração</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Data de expiração obrigatória
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Código de segurança obrigatório
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-dark btn-lg" type="submit" name="submit" >Continuar para finalizar a compra</button>
                    </form>
                </div>
            </div>
        </main>

        <div class="b-example-divider"></div>

        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Nossa empresa</a></li>
                    <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Crebilidade</a></li>
                    <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Atendimento ao cliente</a></li>
                </ul>
                <p class="text-center text-muted">© 2021 Company, Inc</p>
            </footer>
        </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="form-validation.js"></script>
</body>

</html>