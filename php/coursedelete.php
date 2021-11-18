<?php
    session_start();
    include 'dbinfo.inc';
    //변수지정
    $delete_id=$_POST['number'];
  

    $check="DELETE FROM registeration WHERE course_number='".$delete_id."'";
    $result = mysqli_query($conn, $check);
   
    if(!$result){
        echo "delete 에러";
    }
    else{
        echo " <script> alert('수강 신청이 취소되었습니다.'); </script>";
        echo "<meta http-equiv='refresh' content='0 url=../php/mypage.php'>";
        exit();

    }
 
 
?>