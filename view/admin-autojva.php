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
    <link rel="stylesheet" href="stile.css">
    <link rel="shortcut icon" href="../img/galeria/logo car.png" type="image/x-icon">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Início - AutoJVA</title>
    <style>
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


/* Position text in the middle of the page/image */
    </style>
</head>
<body class="body">
    <section>
        <?php
            require_once "header.php";
        ?>
    </section>
    <!-- area principal -->
    <div class="container-fliud blur">
        <img src="../img/galeria/cq5dam.web.1920.webp" height="100%" width="100%" class="bg-image">
        
    </div>
    
<br><br><br>
    <!-- Area do Volvo -->
    <div class="container" id="confira">
        <div class="box display-6">Cadastrar carro</div>
    </div>
    
    <br>
    <div class="container bg-light border p-5 rounded-3">
        <form class="row g-3" method="POST" action="../controller/cadastro-car.php">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Marca</label>
                <input type="text" name="marca" class="form-control" id="inputEmail4" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" id="inputPassword4" required>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Preço</label>
                <input type="text" name="preco" class="form-control" id="inputAddress" placeholder="" required>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Cor</label>
                <input type="text" name="cor" class="form-control" id="inputAddress2" placeholder="" required>
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Quantidade de acento</label>
                <input type="number" name="quant-acento" class="form-control" id="inputCity" required>
            </div>
            <div class="col-md-4">
            <label for="ano" class="form-label">Ano</label>
                <input type="number" class="form-control" placeholder="0000" name="ano-car" id="ano" required>
            </div>
            <div class="col-md-4">
                <label for="inputZip" class="form-label">Quilômetros rodados</label>
                <input type="text" name="km-rodados" class="form-control" id="inputZip" required>
            </div>
            <div class="col-8 d-grid gap-2 col-6 mx-auto pt-3">
                <button type="submit" name="submit" class="btn btn-dark px-5">Cadastrar</button>
            </div>
        </form>
    </div>
    <section class="mt-5">
        <div class="container bg-light border p-5 rounded-3">
            <div class="card">
                <h5 class="card-header">Cadastrar Funcionários</h5>
                <div class="card-body">
                    <h5 class="card-title">Clique no botão para cadastrar seu funcionário</h5>
                    <p class="card-text text-danger">Somente o admin pode cadastar o funcionário</p>
                    <a href="cadastro-func.php" class="btn btn-outline-dark px-5">Cadastrar</a>
                </div>
            </div>
        </div>
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