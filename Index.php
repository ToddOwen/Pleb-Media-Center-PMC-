<?php
/**
 * Created by PhpStorm.
 * User: todd7
 * Date: 30/06/2017
 * Time: 04:28 PM
 */


?>


<head>
    <title>PLEBMEDIA - Home</title>
    <meta charset="utf-8"/>
    <meta name="Todd Owen" content="Intellectual property of the separate owners" />
    <meta name="copyright" content="Copyright owner" />
    <link rel="stylesheet" type="text/css" href="/CSS/style.css">
    <script rel="script" src="/Scripts/cookieJS.js"></script>
</head>

<body>
<div class="DBStatusBar">
    <center>
        <p id="status"></p>
    </center>
</div>



<div class="main">
        <center>
        <h1 class="title">welcome to PLEBMEDIA</h1>
    </center>

<?php
/**
 * Created by PhpStorm.
 * User: todd7
 * Date: 30/06/2017
 * Time: 04:28 PM
 */

include ("Scripts/Connect.php");
include ("Scripts/recent.php");



mysqli_close(connect);
?>

</div>

</body>

<script>
    note = document.getElementById('status');
    if(note.innerHTML = "connection Failed :/"){
        note.style.color = "#F6A779";
    } if(note.innerHTML = "connection Success :)"){
        note.style.color = "#F2EDA7";
    }


    function movieCookieCreator(movieId) {
        Cookies.set('movieDir', movieId.toString());
        window.location = "/player.php";

       

    }

</script>

