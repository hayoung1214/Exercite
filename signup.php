<!DOCTYPE html>
<html>

<body>

<form  action="signup_sql.php"  method="post">
              <h1>회원가입</h1>
                <hr>
                <table>
                    <tr>
                    <td><label for=""><b>아이디</b></label></td>
                    <td><input type="text" placeholder="Enter id" name="id" required></td>
                    </tr>
                    <tr>
                    <td><label for=""><b>비밀번호</b></label></td>
                    <td><input type="password" placeholder="Enter Password" name="password" required></td>
                    </tr>
                    <tr>
                    <td><label for="psw"><b>이름</b></label></td>
                    <td><input type="text" placeholder="Enter name" name="name" required></td>
                    </tr>
                    <tr>
                    <td><label for=""><b>나이</b></label></td>
                    <td><input type="text" placeholder="Enter age" name="age" required></td>
                    </tr>
                    <tr>
                    <td><label for=""><b>성별</b></label></td>
                    <td>남<input type="radio" name="gender" value="남"> 여<input type="radio" name="gender" value="여"></td>
                    </tr>
                    </table>
                    <div class="clearfix">
                        <button type="submit" class="signupbtn">가입하기</button>
                    </div>
</form>
    
</body>
</html>