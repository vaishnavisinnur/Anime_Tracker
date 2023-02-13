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
$arr = mysqli_fetch_array($data);
$id = $arr['id'];

$name = mysqli_real_escape_string($conn, $_POST['name']);
$chapter = mysqli_real_escape_string($conn, $_POST['chapter']);
$status = mysqli_real_escape_string($conn, $_POST['status']);

$name = stripcslashes($name);
$chapter = stripcslashes($chapter);
$status = stripcslashes($status);
$query = "INSERT into `manhua` values(NULL,'$id','$name','$chapter','$status')";
if (mysqli_query($conn, $query)) {
    include "manhua_page.html";
} else {
    echo "ERROR: Hush! Sorry $query. "
    . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
