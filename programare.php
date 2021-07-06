<?php
    include_once'includes/dbh.inc.php';
    session_start();
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
                        <a class="nav-link lang" key="home" href="index.php">Acasă</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="news" href="noutati.php">Noutăți</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="about" href="despreNoi.php">Despre Noi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="doctors" href="medici.php">Medici</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="offers" href="servicii.php">Servicii&Tarife</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="contact" href="contact.php">Contact</a>
                    </li>
                    <?php
                        if(isset($_SESSION["userid"])){
                            echo "<li><a href='paginaUtilizator.php'>Pagină profil</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <section class="appointment-form">
        <h2>Programeaza-te</h2>
        <form action="includes/programare.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name...">
            <input list="doctors" name="doctor" placeholder="Doctor...">
            <datalist id="doctors">
                <option value="Alex Mihnea">
                <option value="Tudor Pop">
            </datalist>
            <input type="text" name="date" placeholder="Date...">
            <button type="submit" name="submit">Adauga programare</button>

        </form>

        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all the fields!</p>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong!</p>";
            }
            else if($_GET["error"] == "none"){
                echo "<p>Appointment made!</p>";
            }
        }
    ?>
    </section>






</body>

</html>