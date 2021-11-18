<!DOCTYPE html>

<html lang="en">

<head>

    <META NAME="GENERATOR" Content="Microsoft Visual Studio">

    <meta name="description" content="This is an HTML5 example">

    <meta name="keywords" content="HTML5, CSS3, JavaScript">

    <title> EXERCITE </title>

   

</head>


<body>
   <div class="wapper">
        <header>
            <a href="main.php">
             
            </a>
            <p>Let's find your EXERCITE</p>
        </header>



        <section>


<table id="user-table">
    <thead>
        <tr>

<th>운동 프로그램 결과</th>
<th></th>
<th></th>
        </tr>
    </thead>

    <tbody>



    </tbody>
</table>
</section>
<form method="POST" action="register_course.php">

      <?php
     $host='localhost';
     $user='team10';
     $password='team10';
     $dbname='team10';
     $wherecondition = "where";


     

    // if($_POST['sport_num']=='five'){
    //     $_POST['sport_num']=5;
    // }
    // else if($_POST['sport_num']=='ten'){
    //     $_POST['sport_num']=8;
    // }

    // else if($_POST['sport_num']=='fithteen'){
    //     $_POST['sport_num']=15;

    // }
    // else{
    //     $_POST['sport_num']=35;

    // }


     $mysqli = mysqli_connect($host, $user, $password, $dbname);
  
     $end_date='';
     $center_name='';

    // $test_type='검도';

     if(mysqli_connect_errno()){
       echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
       exit;
     }

 
    //  echo"<p>".$_POST['sport_num']."</p>";
    
    $sport_query=" SELECT 
    DISTINCT t.type AS sport_type  , 
    c.total AS total_num, 
    c.start_date AS start_date , c.end_date AS end_date , 
    c.center_name AS center_name , r.name AS region_name,
    c.number AS course_number
    FROM course AS c
    JOIN type AS t ON t.course_number=c.number
    JOIN region AS r ON r.course_number=c.number
    WHERE  t.type='".$_POST['sport_type']."' AND c.total >= '".$_POST['sport_num'] ."'  AND  c.start_date >= '".$_POST['start_date']."' AND  
    r.name= '".$_POST['region']."' ";




  
    //(SELECT COUNT(r.user_id) AS current FROM registeration GROUP BY course_number WHERE rt.course_number='".$newArray['course_number']."' ) 
   // AS current
   //COUNT(rt.user_id)  AS current  GROUP BY course_number 
   //JOIN registeration  AS rt  ON rt.course_number=c.number
   
   $result1 = mysqli_query( $mysqli, $sport_query);
  
    if($result1){
   
        
        while ($newArray = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
                   
        //  $sql2 = "SELECT COUNT(user_id) as current FROM registeration GROUP BY course_number
        //             WHERE registeration.course_number='".$newArray['course_number']."' "; 

        // $result2 = mysqli_query( $mysqli, $sql2);
        // $row2 = mysqli_array($result2);
        
        // $sql3 = "SELECT AVG(user_id) as current FROM registeration GROUP BY course_number
        // WHERE registeration.course_number='".$newArray['course_number']."' "; 
        // $result2 = mysqli_query( $mysqli, $sql2);
        // $row2 = mysqli_array($result2);
        
                $res_start=$newArray['start_date'];
                $res_end=$newArray['end_date'];
                $res_type = $newArray['sport_type'];
                $res_num=$newArray['total_num'];
                $res_center=$newArray['center_name'];
                $res_region=$newArray['region_name'];
                $course_number=$newArray['course_number'];
                //$cur_num= $newArray['current'];
            
                echo"<br>";
            echo "지역 : ". $res_region."  시작일 : ".$res_start." 
            마감일 :".$res_end." 
            종목  : ". $res_type." 최대인원 : ".$res_num." 센터명 : ".$res_center."";
            
            echo "<button type='submit' name='button' value='".$course_number."'> ".$course_number."  신청하기 </button>";

            
            echo"<br>";




            }

           



    }
    else{

        printf("Could not retrieve records: %s\n",mysqli_error( $mysqli));
    }
    
   
    mysqli_close( $mysqli); 
  ?>
    <br>
    <input type="button" value="뒤로가기" onclick="location.href='../php/main.php'">
   </form>

  <?php 




  ?>




        <!--풋터-->

        <footer></footer>

 </div>

</body>

</html>