<?php
include 'db.php';
if (isset($_GET['did'])) {
    $id = $_GET['did'];
    $sql = "delete from anime1 where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:anime_watching.php');
    } else {
        die(mysqli_error($conn));
    }
}
