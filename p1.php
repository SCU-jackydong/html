<html>
<?php
$servername = "localhost";
$username = "root";
$password = "Madong1314.com";
$dbname = "myDB";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 use myDB;
 $sql = "CREATE TABLE MyGuests
 (id int(6) unsigned auto_increment primary key,firstname varchar(30) not null,lastname varchar(30) not null,email vachar(50),reg_date timestamp)";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
 
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "select id,firstname lastname from MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}
 
$conn->close();
?>
</html>