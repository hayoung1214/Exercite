<!DOCTYPE html>
<html>
 
<body>
    <h1>Find your EXERCITE</h1>
        
  <h2>LOGIN</h2>

 <body>
      <!-- 로그인 폼 CSS -->
      <div id="loginer">
        <div id="form">
            <form action="login_sql.php" method="post">
                <table>
                    <tr>
                    <td><label for=""><b>아이디</b></label></td>
                    <td><input type="text" name="id" placeholder="Enter Your ID" required></td>
                    </tr>
                    <tr>
                    <td><label for=""><b>비밀번호</b></label></td>
                    <td><input type="password" name="pwd1" placeholder="Enter Your Password" required></td>
                    </tr>
                </table>
                <input type="submit" name="login "value="로그인">
			    <br><br>
			  
              <br><br></form>
              회원가입을 하신 적이 없나요?<br>
              <form action="signup.php" method="post">
			  <button>회원가입</button>
	
          
          </form>
        </div>
      </div>
      <!-- 하단 -->
      <footer>
        <p align="center">&copy; Copyright EXERCITE</p>
      </footer>
    </div>
 </body>
</html>

