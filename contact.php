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

<body class="contactBackground">

    <!-- Navigation -->
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
                        <a class="nav-link lang" key="doctors" href="medici.php"><?php echo $lang['doctors']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="offers" href="servicii.php"><?php echo $lang['offers']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="contact" href="#.php"><?php echo $lang['contact']?></a>
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

    <!---  Contact -->
    <div id="contact" class="contact" class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col 12">
                <h1 class="display-5">Contact</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <hr class="light">
                <h5>Contact</h5>
                <hr class="light">
                <p>0748546888</p>
                <p>dentaweb@gmail.com</p>
                <p>Bulevardul Eroilor 55</p>
                <p>Cluj-Napoca, Romania</p>
            </div>

            <div class="col-md-4">
                <hr class="light">
                <h5 key="program"><?php echo $lang['program']?> </h5>
                <hr class="light">
                <p key="program1"><?php echo $lang['program1']?></p>
                <p key="program2"><?php echo $lang['program2']?></p>

            </div>

            <div class="col-md-4">
                <hr class="light">
                <h5 key="t3"><?php echo $lang['t3']?></h5>
                <hr class="light">
            </div>

            <div class="contact-col">
                <?php
                if(isset($_POST['send'])){
                    $name = $_POST['name'];
                    $recipient = $_POST['mail'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    if(empty($name) || empty($recipient) || empty($subject) || empty($message)){
                       echo "All input fields are required!";
                    }else{
                        if(mail($name, $recipient, $subject, $message)){
                            echo "Your mail has been sent";
                        }else{
                            echo "Sending mail failed";
                        }
                    }
                }
                ?>
                <form action="contact.php" method="POST">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="mail" placeholder="Enter e-mail address" required>
                    <input type="text" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" name="send" class="hero-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer bg-dark">
        <a href="contact.php?lang=en">English</a> | <a href="contact.php?lang=ro">Romanian</a>
    </div>

</body>

</html>