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
                        <a class="nav-link lang" key="doctors" href="medici.php"><?php echo $lang['doctors']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" key="offers" href="#.php"><?php echo $lang['offers']?></a>
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

    <!--- Servicii -->
    <div id="servicii" class="container-fluid">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-5" key="t2"><?php echo $lang['t2']?></h1>
            </div>
            <hr>
        </div>
        <div class="tarife-wraper">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" key="numeS"><?php echo $lang['numeS']?></th>
                        <th scope="col" key="tarif"><?php echo $lang['tarif']?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" key="r1"><?php echo $lang['r1']?></th>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th scope="row" key="r2"><?php echo $lang['r2']?></th>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th scope="row" key="r3"><?php echo $lang['r3']?></th>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th scope="row" key="r4"><?php echo $lang['r4']?></th>
                        <td>700</td>
                    </tr>
                    <tr>
                        <th scope="row" key="r5"><?php echo $lang['r5']?></th>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <th scope="row" key="r6"><?php echo $lang['r6']?></th>
                        <td>250</td>
                    </tr>
                    <tr>
                        <th scope="row" key="r7">E<?php echo $lang['r7']?></th>
                        <td>250</td>
                    </tr>
                    <tr>
                        <th scope="row" key="r8"><?php echo $lang['r8']?></th>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th scope="row" key="r9"><?php echo $lang['r9']?></th>
                        <td>400</td>
                    </tr>
                    <tr>
                        <th scope="row" key="r10">C<?php echo $lang['r10']?></th>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th scope="row" key="r11"><?php echo $lang['r11']?></th>
                        <td>200</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="footer bg-dark">
        <a href="servicii.php?lang=en">English</a> | <a href="servicii.php?lang=ro">Romanian</a>
    </div>


</body>

</html>