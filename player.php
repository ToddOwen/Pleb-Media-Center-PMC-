<?php
/**
 * Created by PhpStorm.
 * User: todd7
 * Date: 15/07/2017
 * Time: 02:29 PM
 */
include ("Scripts/Connect.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PLEBMEDIA - Player</title>
    <script src="/Scripts/cookieJS.js"></script>
    <link rel="stylesheet" type="text/css" href="/CSS/player.css">
</head>
<body onload="sourceSet()">


<div class="main">
    <center>
        <video id="movieplayer" height="400px" width="600px" autoplay>
            Web Browser Not Supported :/
        </video>
    </center>

    <div class="viewContainer">
        <p class="views"></p>
    </div>



</div>


<script>
    video = document.getElementById('movieplayer');
    video.controls = true;

    function sourceSet() {
        movieSource = Cookies.get("movieDir");
        moviePlayer = document.getElementById("movieplayer");
        moviePlayer.src = movieSource.toString();

    }

</script>


</body>
</html>
<?php

mysqli_close()
?>