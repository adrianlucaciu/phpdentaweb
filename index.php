<?php
    session_start();
    include "includes/config.php";
?>


<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DentaWEB</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="language.js"></script>

</head>

<body>

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="navbar-img"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link lang" key="home" href="#slides"><?php echo $lang['home']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="news" href="noutati.php"><?php echo $lang['news']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="about" href="despreNoi.php"><?php echo $lang['about']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="doctors" href="medici.php"><?php echo $lang['doctors']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="offers" href="servicii.php"><?php echo $lang['offers']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="contact" href="contact.php"><?php echo $lang['contact']?></a>
                    </li>
                    <?php
                        if(isset($_SESSION["userid"])){
                            echo "<li><a href='paginaUtilizator.php' >Profile page</a></li>";
                            echo "<li><a href='programare.php'>Programeaza-te</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                        }
                        else if(isset($_SESSION["usersid"])){
                            echo "<li><a href='programariMedici.php'>Programari</a></li>";
                            echo "<li><a href='graficeMedici.php'>Grafice</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                            
                        }
                        else{
                            echo "<li><a href='signup.php'>Sign Up</a></li>";
                            echo "<li><a href='login.php'>Login</a></li>";
                            echo "<li><a href='paginaMedici.php'>Pagina Medici</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!--- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/background.jpg" class="carousel-image">

            </div>
            <div class="carousel-item">
                <img src="img/background2.jpg">
            </div>
            <div class="carousel-item">
                <img src="img/background3.jpg">
            </div>
            <div class="carousel-caption">
                <h1 class="display-4">DentaWEB</h1>
                <h4 class="lang" key="subtitle"><?php echo $lang['subtitle']?></h4>
                <a href="contact.html" class="btn btn-outline-light btn-lg">
                    Contact
                </a>
            </div>
        </div>
    </div>

    <!--- Info - Jumbotron -->
    <div class="container-fluid">
        <div class="row jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <p class="lead lang" key="description"><?php echo $lang['description']?></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <a href="servicii.php"><button type="button" class="btn btn-outline-secondary btn-lg lang"
                        key="services"><?php echo $lang['services']?></button></a>
            </div>
        </div>
    </div>

    <div class="footer bg-dark">
        <a href="index.php?lang=en">English</a> | <a href="index.php?lang=ro">Romanian</a>
    </div>


</body>

</html>