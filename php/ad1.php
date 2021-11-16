<?php
session_start();
$host='localhost';
$user='team10';
$password='team10';
$dbname='team10';
    
$conn = new mysqli($host, $user, $password, $dbname);

$sql2 = "SELECT center_name, name, SUM(1) FROM course GROUP BY center_name, name";
$result2 = mysqli_query($conn, $sql2);

echo "<h2>센터별 보유 강좌 개수</h2>";
echo "<table><tr> </th><th>센터명</th> <th>난이도</th> <th>강좌 개수</th>  </tr> ";
echo "<br><br>";

if(mysqli_num_rows($result2) > 0) {
    while($row2 = mysqli_fetch_assoc($result2)) {
        
        echo "<tr>";
        echo "<td>". $row2["center_name"]."</td><td>" . $row2["name"]. "</td><td>" . $row2["SUM(1)"]. "</td>";
       
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