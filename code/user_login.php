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
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);

    $name = stripcslashes($name);
    $pwd = stripcslashes($pwd);

    $result = mysqli_query($conn, "SELECT * FROM user WHERE name='$name' AND password='$pwd' ")
    or die("Database failed to connect" . mysqli_error());
    $row = mysqli_fetch_array($result);
    if ($row['name'] == $name && $row['password'] == $pwd) {
        $_SESSION['uname'] = $_POST['name'];
        echo "<link rel='stylesheet' href='home_page.css'>";
        echo " <style>";
        echo "  .banner";
        echo "{";
        echo "width: 100%;";
        echo "height: 100vh;";
        echo "background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(../images/30.jpg);";
        echo "background-size: cover;";
        echo "background-position: center;";
        echo "}";
        echo "
        .footer{
        color:rgba(255,255,255,0.5);
        position:absolute;
        top:95%;
        left:63%;
        transform: translate(-95%, -63%);
      }";
        echo "</style>";
        echo "<div class='banner'>";
        echo "<div class='content'>";?>

    <h1>welcome <?php echo $_SESSION['uname']; ?></h1>
    <?php
echo "<h1>ANIME TRACKER</h1>";
        echo "<p>Track your Anime,Manga,Manhwa,Manhua here</p>";
        echo "<div>";
        echo "<a href='http://localhost/anime/code/logout.php'><button type='button'><span></span>LOGOUT</button></a>";
        echo "<a href='home_page.html'><button type='button'><span></span>HOME PAGE</button></a>";
        echo "</div>";
        echo "</div>";
        echo "
<div class='footer'>
        <p>Copyright &copy; MVJCE 2022 Designed By Srivathsa Kunikullaya H</p>
      </div>";

        echo "</div>";
    } else {
        echo " <script>alert('Oops!! failed to login!!Username or password incorrect') ;</script>";
        echo "<script>location.href='user_login.html'</script>";
    }
}
mysqli_close($conn);

?>
