<!-- 1871048 장이제 작성 -->
<?php
    session_start();
    include 'dbinfo.inc';
    //변수지정
   
    $user_id=$_POST['user_id']; //$_session??
    $user_pw=$_POST['re_pw']; 
 
   
    

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