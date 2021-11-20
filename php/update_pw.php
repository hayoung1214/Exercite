<!-- 1871048 장이제 작성 -->
<?php
    session_start();
    $host='localhost';
    $user='team10';
    $password='team10';
    $dbname='team10';

    //변수지정
   
    $user_id=$_POST['user_id']; //$_session??
    $user_pw=$_POST['re_pw']; 
 
   
    $conn=new mysqli($host, $user, $password, $dbname);
    if($conn){
        echo 'sucess mysql connect</p>';
    }
    else{
        echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
        exit;
    }

    $res="UPDATE user SET password = '".$user_pw."'
    WHERE user.id='".$user_id."'";
    $result = mysqli_query($conn, $res);



   
    if(!$result ){
        echo "update 에러";
    }
    else{
        echo " <script> alert('비밀번호가 변경되었습니다.'); </script>";
        // echo "<meta http-equiv='refresh' content='0 url=../php/mypage.php'>";
        exit();

    }
 
 
?>