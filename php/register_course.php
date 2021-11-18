<?php
    session_start();

    $host='localhost';
    $user='team10';
    $password='team10';
    $dbname='team10';

    //변수지정
   
    $course_id=$_POST['button'];

    $current_user= $_SESSION['user_id']; 
    //$_SESSION['user_id']; 

    // $current_user= $_SESSION['user_id']; //이렇게 연결 가능한 지 확인하기
   
    $conn=new mysqli($host, $user, $password, $dbname);
    if($conn){
        echo 'sucess mysql connect</p>';
    }
    else{
        echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
        exit;
    }

    $reg_sp="INSERT INTO registeration (user_id,course_number) VALUES($current_user, $course_id)"; 
    $result = mysqli_query($conn, $reg_sp);

    $conn2=new mysqli($host, $user, $password, $dbname);
   
    if(!$result){
        echo '결과없음';
    }
    else{
      
        $cnt_query="SELECT course_number, COUNT(user_id) AS current 
        FROM registeration AS rt GROUP BY course_number 
        HAVING rt.course_number=$course_id"; 

        echo"$course_id";
        $result2 = mysqli_query( $conn2, $cnt_query);

        
        if($result2){
            while ($newArray = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
               $cur_num= $newArray['current'];
            }


        $cnt_query2="SELECT AVG(user.age) AS avg_age 
        FROM registeration  AS rt ,user GROUP BY course_number 
        HAVING rt.course_number=$course_id"; 

        $result3 = mysqli_query( $conn2,  $cnt_query2);
        $row2=mysqli_fetch_array($result3);
        $avg_age=$row2['avg_age'];


        echo " <script> alert('수강신청 완료! 해당 강의 현재 수강인원: ".$cur_num."  신청자 평균 나이:  ".$avg_age."'); </script>";
        echo "<meta http-equiv='refresh' content='0 url=../php/main.php'>";
        }
        exit();

    }



 
?>