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
                        <a class="nav-link lang" key="news" href="noutati.php"><?php echo $lang['news']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="about" href="despreNoi.php"><?php echo $lang['about']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="doctors" href="#.php"><?php echo $lang['doctors']?></a>
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

    <!--- Medici Titlu-->
    <div id="medici" class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-5" key="t1"><?php echo $lang['t1']?></h1>
            </div>
            <hr>
        </div>
    </div>

    <!--- Medici text -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/team1.jpg">
                    <div class="card-body">
                        <h4 class="card-title" key="card8"><?php echo $lang['card8']?></h4>
                        <p class="card-text" key="card-descrip1"><?php echo $lang['card-descrip1']?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/team2.jpg">
                    <div class="card-body">
                        <h4 class="card-title" key="card9"><?php echo $lang['card9']?></h4>
                        <p class="card-text" key="card-descrip2"><?php echo $lang['card-descrip2']?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/team3.jpg">
                    <div class="card-body">
                        <h4 class="card-title" key="card10"><?php echo $lang['card10']?></h4>
                        <p class="card-text" key="card-descrip3"><?php echo $lang['card-descrip3']?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="login-form">
        <h2>Login</h2>
        <form action="includes/loginMedici.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">Login</button>

        </form>
        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all the fields!</p>";
            }
            else if($_GET["error"] == "wronglogin"){
                echo "<p>Incorrect login info!</p>";
            }
        }
    ?>
    </section>

    <div class="footer bg-dark">
        <a href="medici.php?lang=en">English</a> | <a href="medici.php?lang=ro">Romanian</a>
    </div>


</body>

</html>