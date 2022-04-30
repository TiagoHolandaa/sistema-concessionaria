<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/galeria/logo car.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>AutoJVA - volvoXR90</title>
</head>

<body>
    <section>
        <?php
            require_once "header.php"
        ?>
    </section>
    <br><br><br>
    <div class="container">
        <div class="row gx-3 ">
            <div class="col-12 ">
                <div class=" ">
                    <img src="../img/car-volvo/xr90.webp" alt="camisa6 " width="100%" class="m-3 ms-1 py-5"></div>
            </div>
            <div class=" col m-0">
                <div class="p-0">
                    <h6 class="card-title">VOLVO SUV</h6>
                    <p class="card-text " style="font-size: 40px;">XR90 Recharge <span class="span "> Híbrido Plug-in</span></p>
                    <p class="card-text p " style="font-size: 50px;">A partir R$ 499.950</p>
                    <br><br>
                    <center>
                        <div>
                            <a href="check.php" class="btn btn-outline-dark" style="width: 80%;">Compra</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container ">
        <div class="row row-cols-3 ">
            <div class="col ">
                <p style="font-family: 'teko'; font-size: 25px; ">Formas de pagamentos</p>
                <img src="../img/galeria/icon-diners.svg " alt="diners ">
                <img src="../img/galeria/icon-elo.svg " alt="elo "><br>
                <img src="../img/galeria/icon-hipercard.svg " alt="hipercard ">
                <img src="../img/galeria/icon-boleto.svg " alt="boleto ">
            </div>
            <div class="vr "></div>
            <div class="col text-muted; text-lg-end ">
                <p style="font-size: 25px; ">Perguntas Frequentes</p>
                <a href="termos.hmtl " class="text-dark ">Termos de Uso </a><br>
                <a href="private.hmtl " class="text-dark ">Política de Privacidade</a><br>
                <a href="acess.html " class="text-dark ">Acessibilidade na web </a><br>
                <a href="politicTroca.html " class="text-dark ">Política de Troca de Produto</a><br>
            </div>
        </div>
    </div>
    <div class="container ">
        <footer class="py-3 my-4 ">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3 ">
                <li class="nav-item "><a href="" class="nav-link px-2 text-muted ">Nossa empresa</a></li>
                <li class="nav-item "><a href="" class="nav-link px-2 text-muted ">Crebilidade</a></li>
                <li class="nav-item "><a href="" class="nav-link px-2 text-muted ">Atendimento ao cliente</a></li>
            </ul>
            <p class="text-center text-muted ">© 2022 Company, Inc</p>
        </footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://code.jquery.com/jquery-3.5.1.js " integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin=" anonymous "></script>
<script src="https://code.jquery.com/jquery-3.5.1.js " integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin=" anonymous "></script>

<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 100) {
                $('.my-navbar').addClass('navbar-scroll');
            } else {
                $('.my-navbar').removeClass('navbar-scroll');
            }
        });
    });
</script>


</html>