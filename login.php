<!DOCTYPE html>
<html>
 
<body >
    <h1>당신의 EXERCITE 를 골라주세요!</h1>
        <br><br><br><br>
  

 
      <!-- 로그인 폼 CSS -->
      <div class="loginer" style=background-color:lightgrey>
      <br><br>
      <h2>LOGIN</h2>
        <div id="form">
            <form action="login_sql.php" method="post">
                <table class="logintable">
                    <tr>
                    <td><label for=""><b>아이디</b></label></td>
                    <td><input type="text" name="id" placeholder="Enter Your ID" required></td>
                    </tr>
                    <tr>
                    <td><label for=""><b>비밀번호</b></label></td>
                    <td><input type="password" name="password" placeholder="Enter Your Password" required></td>
                    </tr>
                </table><br>
                <input type="submit" name="login "value="로그인">
			    <br><br>
			  
              <br><br></form>
              
              회원가입을 하신 적이 없나요?<br><br>
              <form action="signup.php" method="post">
			  <button>회원가입</button>
	
        <br><br><br><br>
          </form>
        </div>
      </div>
      <br><br><br><br><br><br><br><br>
      <!-- 하단 -->
      <footer>
        <p align="center">&copy; Copyright EXERCITE</p>
      </footer>
    </div>
 </body>
</html>
<style>
  body { 
    text-align: center; 
    margin: 0 auto;
   
  }

  #form {
          display: inline-block;
          text-align: center;
          margin: 0 auto;
          
        }
</style>
