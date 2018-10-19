

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test1";


$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT username,password FROM users";
$result = $conn->query($sql);
$isright=0;


while($row = $result->fetch_assoc()){
    $postid = $_POST["password"];
    $postwd = $_POST["password1"];
    if($postid==$row['id']&&$postwd==$row['pswd']){
        echo "login success, welcome!";
        $isright=1;
        break;
    }
}
if($isright=0)
    echo "Fail";
?>
