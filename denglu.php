

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test1";


$conn = new mysqli($servername, $username, $password, $dbname);
$postid = $_POST["username"];
$postwd = $_POST["password"];
$postwd1 = $_POST["password1"];


if($postwd1==$postwd)
{
    $sql = "INSERT INTO users(id,pswd)
    VALUES($postid,$postwd)";
    echo 'sign in success!';
}
else echo "Fail";
?>
