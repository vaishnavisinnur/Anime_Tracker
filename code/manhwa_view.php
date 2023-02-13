<?php
session_start();
include "db.php";?>
<html>
    <head>
    <link rel="stylesheet" href="anime_viewing.css">
    <style>
        body
{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(../images/17.jpg);
    background-size: cover;
    background-position: center;
}
        .back
{
    position:relative;
    /* margin-left:48%; */
    margin: 10px 730px;
}
        </style>
</head>
<body>
    <?php
$uname = $_SESSION['uname'];
$data = mysqli_query($conn, "SELECT * FROM user where `name`='$uname'");
$arr = mysqli_fetch_array($data);
$id = $arr['id'];
$sql = "SELECT * from manhwa where user_id='$id'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Manhwa</th><th>Chapter</th><th>Status</th><th>Edit</th><th>Delete</th></tr></thead>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . $row['name'] . "</td>
    <td>" . $row['chapter'] . "</td>
    <td>" . $row['status'] . "</td>
    <td><button type='button'><span></span><a href=\"http://localhost/anime/code/edit_manhwa.php?editid=" . $row['id'] . "\">Edit</a></button></td>
    <td><button type='button'><span></span><a href=\"http://localhost/anime/code/delete_manhwa.php?did=" . $row['id'] . "\">Delete</a></button></td></tr>
";
}

?>
<div class="back">
    <button type="button"><span></span><a href="manhwa_page.html">BACK</a></button>
</div>

</body>
</html>