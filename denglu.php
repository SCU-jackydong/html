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

//$sql = "INSERT into tb1 (name,keyword) values ($_POST['fname'],$_POST['fkeyword'])";


$sql = "SELECT * FROM tb1 where name = '{$_POST['fname']}' ";
$resultname = $conn->query($sql);

if ($resultname->num_rows > 0) {
    // 输出数据

    while($row = $resultname->fetch_assoc()) {
    

        if ($row["name"] == $_POST['fname'] and $row["keyword"] == $_POST['fkeyword'] )
        {
          
            echo "<script>  alert('登录成功 \\n 欢迎你： {$row['name']} \\n你已经成为ikun世界的一员，加油！  ');
            location.href='c1.html'; 
            </script>";
            
        }
        else{
            echo "帐号或密码不对";
        }
    }
} else {
    echo "0 结果";
}


$conn->close();
?>

