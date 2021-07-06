<?php

if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $servicii = $_POST["servicii"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputUpdate($id, $name, $email, $pwd, $servicii) !== false){
        header("location: ../paginaUtilizator.php?error=emptyinput");
        exit();
    }

    updateUser($conn, $name, $email, $pwd, $servicii, $id);
}
else{
    header("location: ../paginaUtilizator.php");
        exit();
}