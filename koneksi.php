<?php

    //Deklarasi Variable

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "spnj_crud";

    //Connect

    $conn = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_errno()){
        echo "Koneksii Gagal : ".mysqli_connect_error();
    }

?>