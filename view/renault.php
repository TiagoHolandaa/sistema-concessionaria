<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="Footers/footers.css" rel="stylesheet">
    <link rel="canonical" href="Sidebars/sidebars.css">
    <link rel="shortcut icon" href="img/galeria/logo car.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>AutoJVA - Renault</title>
</head>

<body>
    <?php
        require_once "header.php";
    ?>
    <!-- area principal -->
    <div class="container-flex">
        <img src="../img/car-volvo/principal_c40.webp" height="100%" width="100%" class="">
        <div class="wrapper display-6">
            <p>COMPRE SEU</p>
            <div class="words ">
                <span class="rotating">VOLVO</span>
                <span class="rotating" >RENAULT</span>
                <span class="rotating">TOYOTA</span>
                <span class="rotating">FIAT</span>
                <span class="rotating">VOLVO</span>
            </div>
        </div>
        <a href="#confira"><button class="my-btn btn-grad border-0 fw-bold d-inline-block align-text-top">CONFIRA <i class='bx bx-chevron-right fw-bold d-inline-block align-text-bottom'></i></button></a>
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

    <!-- Area do footer -->
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