<?php
    header("Access-Control-Allow-Origin: *");
    $hostName="database";
    $user="root";
    $pass="1111";
    $dbName="datanumer";
    $connect=mysqli_connect($hostName,$user,$pass,$dbName) or die( mysqli_connect_error() );
    echo "connect sucess"
?>