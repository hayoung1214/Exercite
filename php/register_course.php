<!-- 1871048 장이제 작성 -->

<?php
    session_start();
    include 'dbinfo.inc';

    //변수지정
   
    $course_id=$_POST['button'];

    $current_user= $_SESSION['user_id']; 
    //$_SESSION['user_id']; 

 
   

    $reg_sp="INSERT INTO registeration (user_id,course_number) VALUES($current_user, $course_id)"; 
    $result = mysqli_query($conn, $reg_sp);

   
    if(!$result){
        echo '결과없음';
    }
    else{
      
        $cnt_query="SELECT course_number, COUNT(user_id) AS current 
        FROM registeration AS rt GROUP BY course_number 
        HAVING rt.course_number=$course_id"; 

        echo"$course_id";
        $result2 = mysqli_query( $conn, $cnt_query);

        
        if($result2){
            while ($newArray = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
               $cur_num= $newArray['current'];
            }


<<<<<<< HEAD
            $cnt_query2="SELECT AVG(user.age) AS avg_age 
            FROM  registeration  LEFT JOIN user  ON registeration.user_id = user.id 
            GROUP BY course_number HAVING course_number=$course_id";


=======
        $cnt_query2="SELECT AVG(user.age) AS avg_age FROM  registeration  LEFT JOIN user  ON registeration.user_id = user.id GROUP BY course_number HAVING course_number=$course_id"; 
        
>>>>>>> b4f55e49cccbe157e71aa3d5916ee5d0d32a8868
        $result3 = mysqli_query( $conn,  $cnt_query2);
        $row2=mysqli_fetch_array($result3);
        $avg_age=$row2['avg_age'];



        echo " <script> alert('수강신청 완료! 해당 강의 현재 수강인원: ".$cur_num."  신청자 평균 나이:  ".$avg_age."'); </script>";
        echo "<meta http-equiv='refresh' content='0 url=../php/main.php'>";
        }
        exit();

    }



 
?>