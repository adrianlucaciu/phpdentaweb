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
                        <a class="nav-link lang" key="home" href="index.php">Acasa</a>
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
                            echo "<li><a href='paginaUtilizator.php'>Profile page</a></li>";
                            echo "<li><a href='programare.php'>Programeaza-te</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                        }
                        else if(isset($_SESSION["usersid"])){
                            echo "<li><a href='programariMedici.php'>Programari</a></li>";
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Day', 'Alex Mihnea', 'Tudor Pop'],
            ['1 Iunie', 4, 6],
            ['2 Iunie', 10, 0],
            ['3 Iunie', 2, 5],
            ['4 Iunie', 3, 7],
            ['5 Iunie', 3, 4],
            ['6 Iunie', 1, 6],
            ['7 Iunie', 2, 8],
            ['8 Iunie', 3, 6],
            ['9 Iunie', 3, 8],
            ['10 Iunie', 1, 4],
            ['11 Iunie', 4, 7],
            ['12 Iunie', 7, 2],
            ['13 Iunie', 5, 1],
            ['14 Iunie', 8, 2],
            ['15 Iunie', 5, 3],
            ['16 Iunie', 2, 2],
            ['17 Iunie', 6, 2],
            ['18 Iunie', 8, 1],
            ['19 Iunie', 3, 1],
            ['20 Iunie', 6, 3],
            ['21 Iunie', 7, 1],
            ['22 Iunie', 8, 3],
            ['23 Iunie', 7, 5],
            ['24 Iunie', 7, 6]

        ]);

        var options = {
            chart: {
                title: 'Programări medici',
                subtitle: 'Programările din luna Iunie 2021',
            }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
    </script>

<body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
</body>

</head>

<body>

    <div class="footer bg-dark">
        <a href="index.php?lang=ro">English</a> | Romanian
    </div>


</body>

</html>