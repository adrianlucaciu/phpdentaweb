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
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="navbar-img"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link lang" key="home" href="index.php"><?php echo $lang['home']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="news" href="#.php"><?php echo $lang['news']?></a>
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
                            echo "<li><a href='paginaUtilizator.php'>Profile page</a></li>";
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

    <!--- Noutati -->
    <div id="noutati" class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-5 lang" key="news"><?php echo $lang['news']?></h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead lang" key="card1"><?php echo $lang['card1']?></p>
            </div>

        </div>
    </div>
    </div>

    <!--- Cards Icon Img -->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-id-card"></i>
                <h3 class="lang" key="card2"><?php echo $lang['card2']?></h3>
                <p class="lang" key="card3"><?php echo $lang['card3']?></p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-tag"></i>
                <h3 class="lang">Discount %</h3>
                <p class="lang" key="card5"><?php echo $lang['card5']?></p>
            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fas fa-user-md"></i>
                <h3 class="lang" key="card6"><?php echo $lang['card6']?></h3>
                <p class="lang" key="card7"><?php echo $lang['card7']?></p>
            </div>
        </div>
        <hr class="my-4">
    </div>


    <?php
        $xml = simplexml_load_file('books.xml');
        $data = $xml->book;
        foreach($data as $showDescription){
            echo "<div style=\"display:flex;width:100%;justify-content:center;\"><strong style=\"width:45%;margin-right:15px; text-align:right;\">$showDescription->title:</strong>   <span style=\"width:49%;\">$showDescription->description</span> </div><br/>";
        }
  ?>

    <?php

$xml = simplexml_load_file('books.xml');
$data = $xml->book;
foreach($data as $showDescription){
    foreach($showDescription->description as $descriptions){

    }
}
?>

    <div class="footer bg-dark">
        <a href="noutati.php?lang=en">English</a> | <a href="noutati.php?lang=ro">Romanian</a>
    </div>

</body>

</html>