<?php
//sql connection
$link = mysqli_connect("localhost", "friokeyg_skip", "frio2rservice", "friokeyg_skip");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error());
}


$link1 = mysqli_connect("localhost", "friokeyg_skip", "frio2rservice", "friokeyg_skiphistory");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error());
}
    ?>


