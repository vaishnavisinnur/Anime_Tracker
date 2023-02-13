<?php
session_start();
include 'db.php';
if (isset($_SESSION['uname'])) {
    session_destroy();

    echo "<script>location.href='user_login.html'</script>";
} else {
    echo "<script>location.href='user_login.html'</script>";
}
