<?php
include 'db.php';
if (isset($_GET['did'])) {
    $id = $_GET['did'];
    $sql = "delete from anime1 where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:anime_view.php');
    } else {
        die(mysqli_error($conn));
    }
}
