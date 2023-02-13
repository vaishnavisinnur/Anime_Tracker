<?php
session_start();
include "db.php";?>
<html>
<head>
    <link rel="stylesheet" href="anime_viewing.css">
    <style>
    body {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(../images/20.jpg);
        background-size: cover;
        background-position: center;
    }
    .back {
        position: relative;
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
$sql = "SELECT * from anime1 where user_id='$id'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Anime</th><th>Episode</th><th>Status</th><th>Edit</th><th>Delete</th></tr></thead>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . $row['anime'] . "</td>
    <td>" . $row['episode'] . "</td>
    <td>" . $row['status'] . "</td>
    <td><a href=\"http://localhost/anime/code/edit_anime.php?editid=" . $row['id'] . "\"><button type='button'><span></span>Edit</button></a></td>
    <td><a href=\"http://localhost/anime/code/delete_anime.php?did=" . $row['id'] . "\"><button type='button'><span></span>Delete</button></a></td></tr>
";
}
?>
    <div class="back">
    <a href="anime_page.html"><button type="button"><span></span>BACK</button></a>
    </div>
</body>
</html>