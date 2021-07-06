<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $doctor = $_POST["doctor"];
    $date = $_POST["date"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputAppointment($name, $doctor, $date) !== false){
        header("location: ../programare.php?error=emptyinput");
        exit();
    }

    createAppointment($conn, $name, $doctor, $date);

    header("location: ../paginaUtilizator.php");
}
else{
    header("location: ../programare.php");
        exit();
}