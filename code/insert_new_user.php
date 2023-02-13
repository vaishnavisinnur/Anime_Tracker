<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anime";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_REQUEST['name'];
$email_id = $_REQUEST['email_id'];
$mno = $_REQUEST['mno'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO user  VALUES(NULL,'$name','$email_id','$mno','$password')";

if (mysqli_query($conn, $sql)) {

    include "user_login.html";
} else {
    echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
