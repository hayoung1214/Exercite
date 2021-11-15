<?php
    session_start();
    $host='localhost';
    $user='team10';
    $password='team10';
    $dbname='team10';

    //변수지정
    $delete_id=$_POST['number'];
    echo $delete_id;
   
    $conn=new mysqli($host, $user, $password, $dbname);
    if($conn){
        echo 'sucess mysql connect</p>';
    }
    else{
        echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
        exit;
    }

    $check="DELETE FROM registeration WHERE course_number='".$delete_id."'";
    $result = mysqli_query($conn, $check);
   
    if(!$result){
        echo "delete 에러";
    }
    else{
        echo " <script> alert('수강 신청이 취소되었습니다.'); </script>";
        echo "<meta http-equiv='refresh' content='0 url=mypage.php'>";
        exit();

    }
 
 
?>