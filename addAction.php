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
$sql="INSERT quser(username,password) VALUES($username,$password)";
$mysqli_result=$mysqli->query($sql);
$sql1="SELECT * FROM quser WHERE username=$username";
$mysqli_result1=$mysqli->query($sql1);
if($mysqli_result1 && $mysqli_result1->num_rows>0){
    echo "
        <script>
        alert('注册成功');
        window.location.href='index.html';
        </script>
        ";
}else{
    echo "
        <script>
        alert('注册失败，请按账号为20位以内数字密码不为空再试');
        window.location.href='addUser.html';
        </script>
        ";
}
?>