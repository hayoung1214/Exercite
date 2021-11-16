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


echo "<h2>", $row1['name']," 님의 수강 신청 내역입니다.</h2>";

//$sql2 = "SELECT *, COUNT(user_id) as current FROM registeration GROUP BY course_number";

// 현 수강인원 : $sql2 = "SELECT *, COUNT(user_id) as current FROM registeration GROUP BY course_number"; , $row2["current"] : 현 수강인원 
// 강좌 중 신청 수 많은 순서 : $sql2 = "SELECT course_number , cnt, RANK() OVER (ORDER BY cnt DESC) AS rnk FROM (SELECT course_number, COUNT(*) OVER (PARTITION BY course_number) AS cnt FROM registeration) AS counts"; , $row2["course_number"]: course number, $row2["cnt"]: 신청 수, $row2["rnk"] : 랭킹 순위
// "SELECT WHERE course.number=(SELECT *, COUNT(user_id) as current FROM registeration GROUP BY course_number)"
$result2 = mysqli_query($conn, $sql2);

echo "<table><tr> </th><th>course number</th> <th>현 수강인원</th> <th>랭킹</th></tr> ";
echo "<br><br>";
echo mysqli_num_rows($result2), "!!";

if(mysqli_num_rows($result2) > 0) {
    while($row2 = mysqli_fetch_assoc($result2)) {
        
        echo "<tr>";
        echo "<td>". $row2["course_number"]."</td><td>" . $row2["cnt"]. "</td><td>" . $row2["rnk"]. "</td>";
       
        echo "</tr>";
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
