<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <link href="Footers/footers.css" rel="stylesheet">
    <link rel="canonical" href="Sidebars/sidebars.css">
    <link rel="stylesheet" href="stilo.css">
    <link rel="shortcut icon" href="../img/galeria/logo car.png" type="image/x-icon">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Início - AutoJVA</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

       div .my-img:hover {
    animation: bounce 1.5s forwards;
    }

    @keyframes bounce {
        from {
            transform: scale(100%);
        }
        to {
            transform: scale(105%);
            
        }
    }
    p.p {
    color: #206EBB;
    }

    .blur {
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        background-color: rgba(10, 10, 10, 0.3);
    }

    .wrapperr {
    font-family: 'Josefin Sans', sans-serif;
    color: #fdfdff;
    position: absolute;
    left: 55%;
    bottom: 53%;
    box-sizing: content-box;
    height: 70px;
    padding: 50px 30px;
    display: flex;
    border-radius: 8px;
}

.words {
    overflow: hidden;
}

.btn-gradd {
    color: #ccc;
    position: absolute;
    left: 55%;
    bottom: 56%;
    background-color: transparent;
    padding: 10px 35px;
    padding-right: 28px;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    transition: 0.5s;
    border-radius: 10px;
}

.btn-gradd:hover {
    color: #616161;
}

    </style>
</head>
<body class="body">
    <section>
        <?php
            require_once "header.php";
        ?>
    </section>
    <!-- area principal -->
    <div class="container-flex">
        <!--<img src="../img/car-volvo/principal_c40.webp" height="100%" width="100%" class="">
        <div class="wrapperr display-6 blur">
            <p>COMPRE SEU</p>
            <div class="words fw-bold">
                <span class="rotating">VOLVO</span>
                <span class="rotating" >RENAULT</span>
                <span class="rotating">TOYOTA</span>
                <span class="rotating">FIAT</span>
                <span class="rotating">VOLVO</span>
            </div>
        </div>
        <a href="#confira"><button class="my-btnn btn-gradd border-0 fw-bold d-inline-block align-text-top">CONFIRA <i class='bx bx-chevron-right fw-bold d-inline-block align-text-bottom'></i></button></a>-->
        <video autoplay muted loop width="100%">
            <source src="../img/galeria/c40-video-2.mp4">
        </video>
    </div>
    
<br><br><br>
<div class="mb-5 container text-center">
    <p class="fs-1 p-5 fw-bold text-secondary" style="font-family: 'Poppins', sans-serif;"><span class="text-dark">Concessionária Autojva.</span> Apresentamos nossa nova linha de automóveis 100% elétricos e híbridos plug-in.</p>
</div>
<main>
  <div class="container">

    <div class="p-0 mb-4 bg-light rounded-3">
      <div class="container-fluid p-0">
        <img src="../img/galeria/mo-ft1.webp" width="100%" alt="">
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-7">
        <div class="h-100 text-white rounded-3">
            <img src="../img/galeria/image2.jpg" width="100%" alt="">
        </div>
      </div>
      <div class="col-5">
        <div class="h-100 bg-light rounded-3">
            <img src="../img/galeria/image3.jpg" width="100%" height="100%" alt="">
        </div>
      </div>
    </div>
    <br><br><br>
    <!-- Area do Volvo -->
    <div class="container" id="confira">
        <div class="box "><img src="../img/car-volvo/volvo-nome-black.svg " alt="volvo " class="imgVolvo my-4 "></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card my-img border-0">
                    <a href="s90.php" style="text-decoration: none;">
                        <img src="../img/car-volvo/s90.webp " class="card-img-top " alt="... ">
                        <div class="card-body">
                            <h6 class="card-title ">SEDAN</h6>
                            <p class="card-text ">SC90 Recharge <span class="span "> Híbrido Plug-in</span></p>
                            <p class="card-text p ">A partir 399.950<i class='bx bx-chevron-right d-inline-block align-text-bottom'></i></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card my-img border-0">
                    <a href="xr40.php" style="text-decoration: none;">
                        <img src="../img/car-volvo/xr40.webp " class="card-img-top" alt="... ">
                        <div class="card-body">
                            <h6 class="card-title ">VOLVO SUV</h6>
                            <p class="card-text ">XC40 Recharge <span class="span "> 100% elétrico</span></p>
                            <p class="card-text p">A partir 409.950<i class='bx bx-chevron-right d-inline-block align-text-bottom'></i></p>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card my-img border-0">
                    <a href="xr60.php" style="text-decoration: none;">
                        <img src="../img/car-volvo/xr60.webp " class="card-img-top " alt="... ">
                        <div class="card-body">
                            <h6 class="card-title ">VOLVO SUV</h6>
                            <p class="card-text ">XC60 Recharge <span class="span"> Híbrido Plug-in</span></p>
                            <p class="card-text p ">A partir R$ 399.950<i class='bx bx-chevron-right d-inline-block align-text-bottom'></i></p>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card my-img border-0">
                    <a href="xr60.php" style="text-decoration: none;">
                        <img src="../img/car-volvo/xr90.webp " class="card-img-top" alt="... ">
                        <div class="card-body">
                            <h6 class="card-title ">VOLVO SUV</h6>
                            <p class="card-text ">XC90 Recharge <span class="span "> Híbrido Plug-in</span></p>
                            <p class="card-text p ">A partir R$ 499.950<i class='bx bx-chevron-right d-inline-block align-text-bottom'></i></p>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

    <!-- Area do Renault -->
    <div class="container" id="renault">
        <div class="box "><img src="../img/car-renault/Renault-Logo.png " alt="imgRenault " class="imgRenault my-4 "></div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col ">
                <div class="card my-img border-0">
                    <a href="# " style="text-decoration: none;">
                        <img src="../img/car-renault/duster.png " class="card-img-top border border-light" alt="... ">
                        <div class="card-body">
                            <h6 class="card-title ">RENAULT SUV</h6>
                            <p class="card-text ">Duster <span class="span "> Flex</span></p>
                            <p class="card-text p ">A partir R$ 99.990<i class='bx bx-chevron-right d-inline-block align-text-bottom'></i></p>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card my-img border-0">
                    <a href="# " style="text-decoration: none;">
                        <img src="../img/car-renault/captur.png " class="card-img-top border border-light" alt="... ">
                        <div class="card-body">
                            <h6 class="card-title ">RENAULT SUV</h6>
                            <p class="card-text ">Captur <span class="span "> Flex</span></p>
                            <p class="card-text p ">A partir R$ 141.740<i class='bx bx-chevron-right d-inline-block align-text-bottom'></i></p>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card my-img border-0">
                    <a href="# " style="text-decoration: none;">
                        <img src="../img/car-renault/stepway.png " class="card-img-top border border-light" alt="... ">
                        <div class="card-body">
                            <h6 class="card-title ">RENAULT SUV</h6>
                            <p class="card-text ">Stepway <span class="span "> Flex</span></p>
                            <p class="card-text p ">A partir R$ 94.740<i class='bx bx-chevron-right d-inline-block align-text-bottom'></i></p>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card my-img border-0">
                    <a href="# " style="text-decoration: none;">
                        <img src="../img/car-renault/logan.png " class="card-img-top border border-light" alt="... ">
                        <div class="card-body">
                            <h6 class="card-title ">SEDAN</h6>
                            <p class="card-text ">Logan <span class="span "> Flex</span></p>
                            <p class="card-text p ">A partir R$ 83.690<i class='bx bx-chevron-right d-inline-block align-text-bottom'></i></p>
                    </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <br><br><br>
    
    <section>

    </section>

    <section>
        <?php
        require_once "footer.php"
        ?>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js " integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin=" anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js " integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin=" anonymous "></script>
    <script src="bootstrap/js/bootstrap.js "></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 400) {
                    $('.my-navbar').addClass('navbar-scroll');
                } else {
                    $('.my-navbar').removeClass('navbar-scroll');
                }
            });
        });
    </script>

</body>
</html>