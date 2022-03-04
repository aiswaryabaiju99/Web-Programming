<?php
    $host = "localhost";
    $user = "root";                     
    $pass = "";                                  
    $db = "movieticket";
    $port = 3306;
     $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
?>