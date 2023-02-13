<?php
include 'db.php';
if (isset($_GET['did'])) {
    $id = $_GET['did'];
    $sql = "delete from manga where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:manga_reading.php');
    } else {
        die(mysqli_error($conn));
    }
}
