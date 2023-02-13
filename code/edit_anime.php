<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anime";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['editid'];
$sql = "SELECT * from `anime1` where `id`='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$anime = $row['anime'];
$episode = $row['episode'];
$status = $row['status'];
?>
<html>
    <head>
        <title>Add Anime</title>
        <link rel="stylesheet" href="add_anime.css">
        <style>
            body
{
    margin: 0;
    padding: 0;
    font-family: helvetica;
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("../images/7.jpg");
    background-position: center;
    background-size: cover;
}
        </style>
    </head>
    <body>
        <form class="box" action="#"  method="post" >
        <a href="anime_page.html"><img src="..images/2.png" height="80px" width="120px" title="ANIME PAGE"></a>
            <h1 class="dem">ANIME</h1>
            <input type="text" name="anime" placeholder=<?php echo $anime; ?> required>
            <input type="text" name="episode" placeholder=<?php echo $episode; ?> required pattern="[0-9]{1,5}" title="Digits ONLY">
            <input type="text" name="status" required pattern="[A-Z]*" title="CAPS only" placeholder=<?php echo $status; ?>>
            <input type="submit" name="submit" value="SAVE">
            </a>
        </form>
    </body>
</html>
<?php

if (isset($_POST['submit'])) {
    $anime = mysqli_real_escape_string($conn, $_POST['anime']);
    $episode = mysqli_real_escape_string($conn, $_POST['episode']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $anime = stripcslashes($anime);
    $episode = stripcslashes($episode);
    $status = stripcslashes($status);
    $query = "UPDATE `anime1` SET `id`='$id', `anime` = '$anime', `episode` = '$episode', `status` = '$status' WHERE `anime1`.`id` = '$id'";
    if (mysqli_query($conn, $query)) {
        header('location:anime_page.html');
    } else {
        echo " $query. "
        . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

