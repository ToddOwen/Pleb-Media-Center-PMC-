<?php
$serverName = "127.0.0.1";
$username = "MediaUser";
$password = "Watch1";
$dataBaseName = "plebmedia";

$connect = new mysqli($serverName, $username, $password, $dataBaseName,3306);

if ($connect->connect_error) {
    $connectError = (mysqli_connect_error());
    if ($connect->connect_error) {
        $connectError = addslashes(mysqli_connect_error());
        echo '<script>';
        echo 'note = document.getElementById("status");';
        echo 'note.innerHTML = "connection Failed :/";';
        echo '</script>';
    }

}




?>