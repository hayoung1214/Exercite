<?php
session_start();
$host='localhost';
$user='team10';
$password='team10';
$dbname='team10';
    
$conn = new mysqli($host, $user, $password, $dbname);
$sql1 = "SELECT  * FROM user WHERE id='".$_SESSION['user_id']."'";
$result1 = mysqli_query($conn, $sql1);
$row1 =  mysqli_fetch_array($result1);


echo "<h2> 현재 인기 수강 강좌입니다. </h2>";

//$sql2 = "SELECT *, COUNT(user_id) as current FROM registeration GROUP BY course_number";

// 현 수강인원 : $sql2 = "SELECT *, COUNT(user_id) as current FROM registeration GROUP BY course_number"; , $row2["current"] : 현 수강인원 
// 강좌 중 신청 수 많은 순서 : $sql2 = "SELECT course_number , cnt, RANK() OVER (ORDER BY cnt DESC) AS rnk FROM (SELECT course_number, COUNT(*) OVER (PARTITION BY course_number) AS cnt FROM registeration) AS counts"; , $row2["course_number"]: course number, $row2["cnt"]: 신청 수, $row2["rnk"] : 랭킹 순위

$sql2 = "SELECT course_number , cnt, DENSE_RANK() OVER  (ORDER BY cnt DESC) AS rnk FROM (SELECT course_number, COUNT(*) OVER (PARTITION BY course_number) AS cnt FROM registeration) AS counts";
$result2 = mysqli_query($conn, $sql2);


echo "<table><tr> <th>랭킹 </th><th> 강좌 이름  </th> <th>  </th> <th>센터명</th> <th>현 수강인원</th></tr> ";
echo "<br><br>";

$past_id=0;
if(mysqli_num_rows($result2) > 0) {
    while($row2 = mysqli_fetch_assoc($result2)) {
        if($past_id==$row2["course_number"]){
            continue;
        }
        $sql3 = "SELECT  * FROM  course  LEFT JOIN type  ON course.number = type.course_number  WHERE course.number='".$row2['course_number']."'";
        $result3 = mysqli_query($conn, $sql3);
        $row3 = mysqli_fetch_assoc($result3);
        echo "<tr>";
        echo "<td>". $row2["rnk"]."</td><td>".$row3["type"]."</td><td>" . $row3["name"]. "</td><td>" . $row3["center_name"]. "</td><td>" . $row2["cnt"]. "</td>";
       
        echo "</tr>";
        $past_id=$row2["course_number"];
    }
    echo "</table>";
}

else{

    echo "</table><br><br>";
    echo "<center>수강신청 내역이 없습니다.";
}




mysqli_close($conn); // 디비 접속 닫기         
?>

<!DOCTYPE html>
<html>
<body>
<section>

</section>

</body>
</html>
 
<style>
  table {
    width: 100%;
    border-top: 1px solid #444444;
    border-collapse: collapse;
  }
  th, td {
    border-bottom: 1px solid #444444;
    padding: 10px;
    text-align:center;
  }

  body{
    text-align:center;
  }


  
</style>
