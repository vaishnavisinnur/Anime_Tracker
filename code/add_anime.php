<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anime";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$uname = $_SESSION['uname'];
$data = mysqli_query($conn, "SELECT * FROM user where name='$uname'");
$row = mysqli_fetch_array($data);
$id = $row['id'];

$anime = mysqli_real_escape_string($conn, $_POST['anime']);
$episode = mysqli_real_escape_string($conn, $_POST['episode']);
$status = mysqli_real_escape_string($conn, $_POST['status']);

$anime = stripcslashes($anime);
$episode = stripcslashes($episode);
$status = stripcslashes($status);
$query = "insert into anime1 values(NULL,'$id','$anime','$episode','$status')";
if (mysqli_query($conn, $query)) {
    include "anime_page.html";
} else {
    echo "ERROR: Hush! Sorry $query. "
    . mysqli_error($conn);

}
mysqli_close($conn);
