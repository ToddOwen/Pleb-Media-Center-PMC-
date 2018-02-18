<?php
/**
 * Created by PhpStorm.
 * User: todd7
 * Date: 01/07/2017
 * Time: 02:14 PM
 */
$serverName = "127.0.0.1";
$username = "MediaUser";
$password = "Watch1";
$dataBaseName = "plebmedia";

$connect = new mysqli($serverName, $username, $password, $dataBaseName,3306);

if ($connect->connect_error){
    die($connect->connect_error);
}

$sql = "SELECT name, genre, dir FROM movies";
$result = mysqli_query($connect, $sql);


if($result->num_rows > 0){
    echo "<center>";
    echo "<table><tr><th>Title</th><th>Genre</th></tr>";
    while ($row = $result->fetch_assoc()){

        ?>
<tr>
    <td >
        <a  href="#" onclick="movieCookieCreator(this.id)" id="<?=htmlspecialchars($row['dir'])?>"
           style="cursor: pointer">
            <?=htmlspecialchars($row['name'])?>
        </a>
    </td>
    <td><?=htmlspecialchars($row['genre'])?></td>
</tr>
<?php

    }
    echo "</table>";
    echo "</center>";

}else{
    echo "0 Results Found";
}


$connect->close();
?>