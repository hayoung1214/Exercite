<?php
    session_start();
    $host='localhost';
    $user='team10';
    $password='team10';
    $dbname='team10';

    //변수지정
    $user_id=$_POST['userid'];
    $user_name = $_POST['name'];
    $pw1 = $_POST['pw1'];
    $pw2 = $_POST['pw2'];
    $age = $_POST['age'];
   
    $conn=new mysqli($host, $user, $password, $dbname);
    if($conn){
        echo 'sucess mysql connect</p>';
    }
    else{
        echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
        exit;
    }

    $check="SELECT * FROM user WHERE id='".$user_id."'";
    
    $result = mysqli_query($conn, $check);
    $num=mysqli_num_rows($result);
    if($num==1){
        $row =  mysqli_fetch_array($result);
        if($pw1 != $pw2){
            echo " <script> alert('비밀번호가 일치하지 않습니다'); </script>";
            echo "<meta http-equiv='refresh' content='0 url=../php/mypage.php'>";
            exit();
          
        } elseif($pw1 == $row['password']){
            echo " <script> alert('이전 비밀번호와 같습니다.'); </script>";
            echo "<meta http-equiv='refresh' content='0 url=../php/mypage.php'>";
            exit();
        }
    }
   
    $sql1="UPDATE user SET password='".$pw1."' WHERE id='".$user_id."'";
    $sql2="UPDATE user SET name='".$user_name."', age= '".$age."' WHERE id='".$user_id."'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    if(!$result1 || !$result2){
        echo "update 에러";
    }
    else{
        echo " <script> alert('사용자 정보가 수정되었습니다.'); </script>";
        echo "<meta http-equiv='refresh' content='0 url=../php/mypage.php'>";
        exit();
    }
 
?>