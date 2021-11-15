<?php
session_start();
$host='localhost';
$user='team10';
$password='team10';
$dbname='team10';
    
$conn = new mysqli($host, $user, $password, $dbname);
echo "<h2>", $_SESSION['user_id']," 님의 수강 신청 내역입니다.</h2>";
$sql = "SELECT  *, course.name AS course_name, center.name AS center_name FROM  course  LEFT JOIN center  ON course.center_name = center.name LEFT JOIN registeration ON registeration.course_number = course.number WHERE registeration.user_id='".$_SESSION['user_id']."'";
$result = mysqli_query($conn, $sql);

//echo "<style>td { border:1px solid #ccc; padding:5px; }</style>";
echo "<table><tr> </th><th>프로그램명</th> <th>강좌 시작 날짜</th> <th>강좌 끝나는 날짜</th> <th>센터명</th> <th>주소</th> <th>전화번호</th> <th>취소하기</th>  </tr> ";
echo "<br><br>";

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr>";
        echo "<td>". $row["course_name"]."</td><td>" . $row["start_date"]. "</td><td>" . $row["end_date"]. "</td><td>" . $row["center_name"]. "</td><td>" .$row["address"]."</td><td>".$row["phone"]."</td>";
        echo "<td><form action='coursedelete_sql.php' method='POST'>
            <input type=hidden name=number value=".$row["course_number"]." >
            <input type='submit' value=Delete>
            </form>
            </td>";
        echo "</tr>";
    }
    echo "</table>";
}

else{

    echo "</table><br><br>";
    echo "<center>수강신청 내역이 없습니다.";
}


$sql = "SELECT  * FROM user WHERE id='".$_SESSION['user_id']."'";
$result = mysqli_query($conn, $sql);
$row =  mysqli_fetch_array($result);

mysqli_close($conn); // 디비 접속 닫기         
?>

<!DOCTYPE html>
<html>
<body>
<section>
<div class="mainCon">
    <div class="updateTitle"><h3><br><br>회원정보</h3></div>
    <form action="userupdate_sql.php" method="POST">
        <input type="hidden" name="userid" value="<?= $_SESSION['user_id']?>">
        <table class="updateTable">
            <tr>
                <td width="50%" >아이디</td>
                <td><?= $_SESSION['user_id'] ?></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="pw1" required></td>
            </tr>
            <tr>
                <td>비밀번호 확인</td>
                <td><input type="password" name="pw2" required></td>
            </tr>
            <tr>
                <td>이름</td>
                <td><input type="text" name="name" placeholder=<?= $row['name']?> required></td>
            </tr>
            <tr>
                <td>나이</td>
                <td><input type="int" name="age" placeholder=<?= $row['age']?> required></td>
            </tr>
        </table>
        <div class="updateBtn">
        <input type="submit" value="수정">
        <input type="button" value="취소" onclick="location.href='main.php'">
        </div>
    </form>
</div>
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