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
                        <a class="nav-link lang" key="home" href="#slides">Acasă</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="news" href="noutati.html">Noutăți</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="about" href="despreNoi.html">Despre Noi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="doctors" href="medici.html">Medici</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="offers" href="servicii.html">Servicii&Tarife</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="contact" href="contact.html">Contact</a>
                    </li>
                    <?php
                            echo "<li><a href='login.php'>Login</a></li>";
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat password...">
            <button type="submit" name="submit">Sign Up</button>

        </form>

        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all the fields!</p>";
            }
            else if($_GET["error"] == "invaliduid"){
                echo "<p>Choose a proper username!</p>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<p>Choose a proper email!</p>";
            }
            else if($_GET["error"] == "passworddontmatch"){
                echo "<p>Password doesn't match!</p>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong!</p>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<p>Choose another username!</p>";
            }
            else if($_GET["error"] == "none"){
                echo "<p>You have signed up!</p>";
            }
        }
    ?>
    </section>






</body>

</html>