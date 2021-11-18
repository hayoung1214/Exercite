<?php
    session_start();
    include 'dbinfo.inc';

    //변수지정
    $user_id=$_POST['userid'];
    $user_name = $_POST['name'];
    $user_pw1 = $_POST['re_pw1'];
    $user_pw2 = $_POST['re_pw2'];
    $age = $_POST['age'];

    $check="SELECT * FROM user WHERE id='".$user_id."'";
    
    $result = mysqli_query($conn, $check);
    $num=mysqli_num_rows($result);
    if($num==1){
        $row =  mysqli_fetch_array($result);
        if($user_pw1 != $user_pw2){
            echo " <script> alert('비밀번호가 일치하지 않습니다'); </script>";
            echo "<meta http-equiv='refresh' content='0 url=../php/mypage.php'>";
            exit();
          
        } elseif($user_pw1 == $row['password']){
            echo " <script> alert('이전 비밀번호와 같습니다.'); </script>";
            echo "<meta http-equiv='refresh' content='0 url=../php/mypage.php'>";
            exit();
        }
    }
    
    $res1="UPDATE user SET password = '".$user_pw1."' WHERE user.id='".$user_id."'";
    $res2="UPDATE user SET name='".$user_name."', age= '".$age."' WHERE id='".$user_id."'";
    $result1 = mysqli_query($conn, $res1);
    $result2 = mysqli_query($conn, $res2);
    if(!$result1 || !$result2){
        echo "update 에러";
    }
    else{
        echo " <script> alert('사용자 정보가 수정되었습니다.'); </script>";
        echo "<meta http-equiv='refresh' content='0 url=../php/mypage.php'>";
        exit();
    }
 
?>