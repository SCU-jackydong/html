<html>
<?php
$servername = "localhost";
$username = "root";
$password = "Madong1314.com";
echo " <h1> test </h1>";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
	echo "sad";
}
 else{
echo "<h2> 连接成功</h2>";
}
$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === TRUE ) 
{
echo "数据库创建成功";}
else{
echo "Error creating database:" . $conn->error;
}
$conn->close();
?>
</html>
