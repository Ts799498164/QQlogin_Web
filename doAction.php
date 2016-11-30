<?php 
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli("localhost","root@localhost","","test");
if($mysqli->errno){
    die('Connect Error:'.$mysqli->error);
}
else{
    $mysqli->set_charset('utf8');
}
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM quser WHERE username='$username' AND password='$password'";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
    echo "
        <script>
        alert('登陆成功');
        window.location.href='index.html';
        </script>
        ";
}else{
    echo "
        <script>
        alert('登陆失败');
        window.location.href='index.html';
        </script>
        ";
}











?>