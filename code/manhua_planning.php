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
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(../images/26.jpg);
    background-size: cover;
    background-position: center;
}
        .hi
{
    text-align:center;
    font-family:sans-serif;
    font-weight:bold;
    width:100%;
    font-size:50px;
    color: white;
}
        .back
{
    position:relative;
    margin: 10px 730px;
}
        </style>
</head>
<body>
<div class="hi">PLANNING</div>

    <?php
$uname = $_SESSION['uname'];

$data = mysqli_query($conn, "SELECT * FROM user where `name`='$uname'");
$arr = mysqli_fetch_array($data);
$id = $arr['id'];
$sql = "SELECT * from manhua where user_id='$id' and status='PLANNING'";
$result = mysqli_query($conn, $sql);
echo "<table><thead><tr><th>Manhua</th><th>Edit</th><th>Delete</th></tr></thead>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . $row['name'] . "</td>
    <td><button type='button'><span></span><a href=\"http://localhost/anime/code/edit_manhua.php?editid=" . $row['id'] . "\">Edit</a></button></td>
    <td><button type='button'><span></span><a href=\"http://localhost/anime/code/delete_manhua_planning.php?did=" . $row['id'] . "\">Delete</a></button></td></tr>
";
}

?>
<div class="back">
    <button type="button"><span></span><a href="manhua_page.html">BACK</a></button>
</div>

</body>
</html>