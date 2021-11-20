<?php
include 'dbinfo.inc';

//변수지정
$user_name=$_POST['name'];
$user_id=$_POST['id'];
$user_pw=$_POST['password'];
$user_age=$_POST['age'];
$user_gender=$_POST['gender'];


echo $user_name, $user_id, $user_pw, $user_age, $user_gender;

$sql = "SELECT * FROM user WHERE id='".$_POST['id']."'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count>0){
    echo " <script> alert('이미 존재하는 아이디 입니다.'); </script>";
    echo "<meta http-equiv='refresh' content='0 url=../html/signup.html'>";
    exit();
} 

else{
    /* Start transaction */
    mysqli_begin_transaction($conn);

    try{
        /* set autocommit to off */
        mysqli_autocommit($conn, FALSE);
   
        $sql="INSERT INTO user (id, name, age, gender, password) VALUES ('$user_id','$user_name','$user_age','$user_gender','$user_pw')";
        $result = mysqli_query($conn, $sql);

        /* If code reaches this point without errors then commit the data in the database */
        mysqli_commit($conn);
    } catch (mysqli_sql_exception $exception) {
        mysqli_rollback($conn);

        throw $exception;
    }

    mysqli_close($conn);

    echo "<script type='text/javascript'>alert('회원가입이 완료되었습니다.');</script>";
    echo "<meta http-equiv='refresh' content='0 url=../html/login.html'> " ;// 회원가입 후 연결되는 페이지 

    
}
    

?>
