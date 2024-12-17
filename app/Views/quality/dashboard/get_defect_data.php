<?php

function connection(){
    $host = "localhost";
    $user = "ayconcu2";
    $pass = "6m6W2G4BerpN@(";

    $bd = "ayconcu2_qty";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>