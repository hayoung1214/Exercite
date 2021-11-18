<?php
    session_start();
    $host='localhost';
    $user='team10';
    $password='team10';
    $dbname='team10';

    //변수지정
   
    $user_id=$_SESSION['user_id'];
   
    $conn=new mysqli($host, $user, $password, $dbname);
    if($conn){
        echo 'sucess mysql connect</p>';
    }
    else{
        echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
        exit;
    }

    $del_reg="DELETE FROM registeration WHERE registeration.user_id='".$user_id."'";
    $result = mysqli_query($conn, $del_reg);

    $del_user="DELETE FROM user WHERE user.id='".$user_id."'";
    $result2 = mysqli_query($conn, $del_user);

   
    if(!$result || !$result2){
        echo "delete 에러";
    }
    else{
        echo " <script> alert('계정이 삭제되었습니다.'); </script>";
        echo "<meta http-equiv='refresh' content='0 url=../html/login.html'>";
        exit();

    }
 
 
?>