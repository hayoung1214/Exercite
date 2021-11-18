<?php
    session_start();
    include 'dbinfo.inc';
    
    //변수지정
   
    $user_id=$_SESSION['user_id'];
   

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