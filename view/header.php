<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="Footers/footers.css" rel="stylesheet">
    <link rel="canonical" href="Sidebars/sidebars.css">
    <link rel="shortcut icon" href="../img/galeria/logo-tipo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/stilo.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>AutoJVA - Toyota</title>
    <style>
        
        * {
            text-decoration: none;
        }
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
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white my-navbar">
            <div class="container-fluid m-1 me-5 px-5">
                <a class="navbar-brand logo" href=""> <img src="../img/galeria/logo-car-preta.png" width="50px" class="d-inline-block align-text-bottom me-1">AutoJVA</a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown  text-end">
                            <a href="#" class="nav-link active d-block" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias<i class='bx bx-chevron-down d-inline-block align-text-bottom'></i>
                            </a>
                            
                            <ul class="dropdown-menu dropdown-menu-dark mx-0 border-0 shadow" aria-labelledby="dropdownUser2" style="width: 220px;">
                                <li>
                                <a class="dropdown-item d-flex gap-2 align-items-center" href="volvo.php">
                                <i class='bx bx-car'></i>
                                    Volvo
                                </a>
                                </li>
                                <li>
                                <a class="dropdown-item d-flex gap-2 align-items-center" href="renault.php">
                                <i class='bx bx-car'></i>
                                    Renault
                                </a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </li>
                    </ul>
                    <form>
                        <input class="form-control btn-secondary btn btn-pesquisa bg-light link-dark text-start" type="text" placeholder="Pesquisar" aria-label="Pesquisar" style="border: 0.5px solid #adb5bd;">

                    </form>
                    <div class="dropdown  text-end px-3">
                        <a href="#" class="d-block link-dark text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="35" height="35" class="rounded-circle"><i class='bx bx-chevron-down d-inline-block align-text-bottom'></i>
                        </a>
                        
                    <ul class="dropdown-menu dropdown-menu-dark mx-0 border-0 shadow" aria-labelledby="dropdownUser1" style="width: 220px;">
                        <li>
                        <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                        <i class='bx bx-user'></i>
                            Conta
                        </a>
                        </li>
                        <li>
                        <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                        <i class='bx bx-heart'></i>
                            Favoritos
                        </a>
                        </li>
                        <li>
                        <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                        <i class='bx bx-notification'></i>
                            Notificações
                        </a>
                        </li>
                        <li>
                        <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                        <i class='bx bx-error-circle'></i>
                            Ajuda
                        </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                        <a class="dropdown-item d-flex dropdown-item-white gap-2 align-items-center" href="#">
                        <i class='bx bx-trash'></i>
                            Sair
                        </a>
                        </li>
                        </ul>
                    </div>
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-dark login"><a href="login.php" class=" text-white ">Log in</a></button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js " integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin=" anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js " integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin=" anonymous "></script>
    <script src="../js/bootstrap.js"></script>

</body>

</html>