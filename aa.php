<!DOCTYPE html>
<html>
    <head>
<meta charset="uft-8">
<title>2022</title>
<style>
    #kuai{
        background-color: aquamarine;
        margin: auto;
        width: 500px;
    }
    .lie{
        list-style-type: none;
        text-align: center;
    }
</style>
    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
</div>
<script>
    function zhuce()
    {
       var name= document.getElementById("zhanghao").innerHTML;
       var keyword= document.getElementById("mima").innerHTML;
    }
</script>

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
$sql = "INSERT INTO tb1 (name, keyword)  VALUES ('{$_POST['fname']}', {$_POST['fkeyword']})";
if ($conn->query($sql) === TRUE) {
    echo "<script>  alert('注册成功 \\n 赶紧登录进入ikun的世界吧！ ');
   
    </script>";
} else {
    echo "<script>  alert('注册失败! ');
            location.href='c1.html'; 
            </script>";
}
 
$conn->close();
?>
    </body>
</html>











