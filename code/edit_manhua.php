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
$sql = "SELECT * from `manhua` where `id`='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$chapter = $row['chapter'];
$status = $row['status'];
?>
<html>
    <head>
        <title>MANHUA</title>
        <link rel="stylesheet" href="add_anime.css">
        <style>
            body
{
    margin: 0;
    padding: 0;
    font-family: helvetica;
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("../images/wp8170262.png");
    background-position: center;
    background-size: cover;
}
        </style>
    </head>
    <body>
        <form class="box" action="#"  method="post" >
        <a href="manhua_page.html"><img src="../images/29.png" height="100px" width="100px" title="MANHUA PAGE"></a>
            <h1 class="dem">MANHUA</h1>
            <input type="text" name="name" placeholder=<?php echo $name; ?> required>
            <input type="text" name="chapter" placeholder=<?php echo $chapter; ?> required pattern="[0-9]{1,5}" title="Digits ONLY">
            <input type="text" name="status" required pattern="[A-Z]*" title="CAPS only" placeholder=<?php echo $status; ?>>
            <input type="submit" name="submit" value="SAVE">
            </a>
        </form>
    </body>
</html>
<?php

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $chapter = mysqli_real_escape_string($conn, $_POST['chapter']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $name = stripcslashes($name);
    $chapter = stripcslashes($chapter);
    $status = stripcslashes($status);
    $query = "UPDATE `manhua` SET `id`='$id', `name` = '$name', `chapter` = '$chapter', `status` = '$status' WHERE `manhua`.`id` = '$id'";
    if (mysqli_query($conn, $query)) {
        header('location:manhua_page.html');
    } else {
        echo " $query. "
        . mysqli_error($conn);
    }

}
// Close connection
mysqli_close($conn);

?>

