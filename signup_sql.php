<?php
$host='localhost';
$user='team10';
$password='team10';
$dbname='team10';
//변수지정
//$user_type=$_POST['usertype'];
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
$sql="INSERT INTO user (id, name, age, gender, password) VALUES ('$user_id','$user_name','$user_age','$user_gender','$user_pw')";
$result = mysqli_query($conn, $sql);
if($result) { echo "insert success!"; }
else { echo "failure"; }
    
mysqli_close($conn);
   
?>