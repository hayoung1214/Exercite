<html lang="en">
 <head>
  <META NAME="GENERATOR" Content="Microsoft Visual Studio">
    <meta name="description" content="This is an HTML5 example">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
    <title> 커픽(CUPPICK) </title>
    <link rel="stylesheet" href="main_css.css">
</head>
<body>
    <div class="wapper">
	<header>
            <a href="main.php"><img src="logo.jpg" width="100px" height="100px"></a>
            <p>What's your Cuppick?</p>
        </header>
  <title>LOGIN</title>
 </head>
 <body>
      <!-- 로그인 폼 CSS -->
      <div id="loginer">
        <div id="form">
          <form action="login_php_ye1.php" method="post">
            <fieldset>
              <legend>LOGIN</legend>
              <input type="text" name="id" placeholder="Enter Your ID">
              <br><br>
              <input type="password" name="pwd1" placeholder="Enter Your Password">
              <br><br>
              <input type="submit" name="login "value="로그인">
			  <br><br>
			  ------------------------------------------------
              <br><br></form>
              You Don't Have Your Account?<br>
  	<form action="new_signup.php" method="post">
			  <button>회원가입</button>
	
            </fieldset>
          </form>
        </div>
      </div>
      <!-- 하단 -->
      <footer>
        <p align="center">&copy; Copyright</p>
      </footer>
    </div>
 </body>
</html>
<!--그 로그인, 회원가입 이거는 나중에 데베에서 유저 아이디랑 매칭하는 부분이 필요함 그래서 같으면 로그인 되고 아니면 안되게 만들어야 됨. 이부분은 나중에...-->
