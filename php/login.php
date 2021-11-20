<!-- 1871044 이하영 작성 -->
<?php
    session_start();
    include 'dbinfo.inc';
     
    //변수지정
    $user_id=$_POST['id'];
    $user_pw=$_POST['password'];
   

    $check="SELECT * FROM user WHERE id='".$_POST['id']."'";
    echo $check;
    $result = mysqli_query($conn, $check);
    $num=mysqli_num_rows($result);
    if($num==1){
        $row =  mysqli_fetch_array($result);
        if($row['password']==$user_pw){
            echo " <script> alert('로그인을 성공하였습니다.'); </script>";
            $_SESSION['user_id'] = $row["id"]; //세션에 로그인 성공한 유저의 아이디와 비밀번호 저장
            $_SESSION['user_password'] = $row["password"];
            
            mysqli_close($conn);
            echo " <meta http-equiv='refresh' content='0 url=../php/main.php'> "; // 로그인 후 연결되는 페이지 
        }
        else{
            echo " <script> alert('비밀번호가 맞지 않습니다.'); </script>";
            echo "<meta http-equiv='refresh' content='0 url=../html/login.html'>";
            exit();
        }
    }
    else{
        echo " <script> alert('해당 아이디가 존재하지 않습니다.'); </script>";
        echo "<meta http-equiv='refresh' content='0 url=../html/login.html'>";
        exit();

    }
 
 
?>