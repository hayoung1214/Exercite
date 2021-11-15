<?php
session_start();
$host='localhost';
$user='team10';
$password='team10';
$dbname='team10';
    
$conn = new mysqli($host, $user, $password, $dbname);
echo  $_SESSION['user_id'],"님의 수강 신청 내역입니다.";
$sql = "SELECT  *, course.name AS course_name, center.name AS center_name FROM  course  LEFT JOIN center  ON course.center_name = center.name LEFT JOIN registeration ON registeration.course_number = course.number WHERE registeration.user_id='".$_SESSION['user_id']."'";
$result = mysqli_query($conn, $sql);

//echo "<style>td { border:1px solid #ccc; padding:5px; }</style>";
echo "<table><tr> <th>프로그램명</th> <th>강좌 시작 날짜</th> <th>강좌 끝나는 날짜</th> <th>센터명</th> <th>주소</th> <th>전화번호</th>  </tr> ";
echo "<br><br>";

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr>";
        echo "<td>". $row["course_name"]."</td><td>" . $row["start_date"]. "</td><td>" . $row["end_date"]. "</td><td>" . $row["center_name"]. "</td><td>" .$row["address"]."</td><td>".$row["phone"]."</td>";
        echo "</tr>";
    }

}
else{
    echo "테이블에 데이터가 없습니다.";
}

echo "</table>";

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
  }
</style>