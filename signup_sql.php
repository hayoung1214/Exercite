<?php
$host='localhost';
$user='team10';
$password='team10';
$dbname='team10';

//변수지정
$user_name=$_POST['name'];
$user_id=$_POST['id'];
$user_pw=$_POST['password'];
$user_age=$_POST['age'];
$user_gender=$_POST['gender'];

$conn=new mysqli($host, $user, $password, $dbname);
if($conn){
    echo 'sucess mysql connect</p>';
}
else{
    echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
    exit;
}
echo $user_name, $user_id, $user_pw, $user_age, $user_gender;

$sql = "SELECT * FROM user WHERE id='".$_POST['id']."'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count>0){
    echo " <script> alert('이미 존재하는 아이디 입니다.'); </script>";
    echo "<meta http-equiv='refresh' content='0 url=signup.php'>";
    exit();
} 

else{
    $sql="INSERT INTO user (id, name, age, gender, password) VALUES ('$user_id','$user_name','$user_age','$user_gender','$user_pw')";
    $result = mysqli_query($conn, $sql);
}

if($result) { echo "insert success!"; }
else { echo "failure"; }
    
mysqli_close($conn);
?>
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=login.php"> <!-- 회원가입 후 연결되는 페이지 -->