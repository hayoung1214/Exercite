<?php
    session_start();

    $host='localhost';
    $user='team10';
    $password='team10';
    $dbname='team10';

    //변수지정
   
    $course_id=$_POST['button'];

    $current_user= '$_SESSION['user_id']'; 

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


   
    if(!$result){
        echo '결과없음';
    }
    else{
      
        $cnt_query="SELECT COUNT(r.user_id) AS current 
        FROM registeration GROUP BY course_number 
        WHERE rt.course_number='". $course_id."'"; 
        $result2 = mysqli_query($conn,  $cnt_query);
        
        if($result2){
            while ($newArray = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
               $cur_num= $newArray['course_number '];
        echo " <script> alert('수강신청 완료!해당 강의 현재 수강인원 ".$cur_num."'); </script>";
        // echo '<meta http-equiv='refresh' content='0 url=../php/main.php'>';
        }}
        exit();

    }



 
?>