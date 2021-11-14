<?php
    $host='localhost';
    $user='team10';
    $password='team10';
    $dbname='team10';

    //변수지정
    $id=$_POST['id'];
    $pw=$_POST['password'];
   

    $conn=new mysqli($host, $user, $password, $dbname);
    if($conn){
        echo 'sucess mysql connect</p>';
    }
    else{
        echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
        exit;
    }

    $check="SELECT * FROM user WHERE id='".$_POST['id']."'";
    echo $check;
    $result = mysqli_query($conn, $check);
    $num=mysqli_num_rows($result);
    if($num==1){
        $row =  mysqli_fetch_array($result);
        if($row['password']==$pw){
            echo '로그인 하였습니다.';
        }
        else{
            echo '비밀번호가 맞지 않습니다.';
        }
    }
    else{
        echo '해당 아이디가 존재하지 않습니다.';
    }
    echo $member;
    //$stmt->bind_result($userID, $userPassword);
    

    // $check=0;
    // $method='"post"';
    // while($id_row=$stmt->fetch()){
    //     if($userEmail == $id && $userPassword == $pw){
    //     $check=1;
    //     $name="myvar";
    //     $value=$userUserID;
    //     setcookie($name,$value);
    //     $name="myvar2";
    //     $value=$id;
    //     setcookie($name,$value);
    //     $name="myvar10";
    //     $value= $userUserType;
    //     setcookie($name,$value);
    //     Header("Location:./ver2_main.php");

    //     if($userUserType==0){
    //         Header("Location:./customer_info.php");
    //     }
       
    //     exit;
    //     }
    // }
    // if($check==0) {
    //     Header("Location:./login_ye1.php");
    // }
 
?>