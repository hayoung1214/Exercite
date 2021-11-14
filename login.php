<head>
    <META NAME="GENERATOR" Content="Microsoft Visual Studio">
    <meta name="description" content="This is an HTML5 example">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
<meta charset="utf-8">
    <title> 커픽(CUPPICK) </title>
    <link rel="stylesheet" href="main_css.css">
</head>
<body>
    <div class="wapper">
        <!--헤더시작-->
        <header>
            <a href="main.php"><img src="logo.jpg" width="100px" height="100px"></a>
            <p>What's your Cuppick?</p>
        </header>
        <!--콘텐츠부분-->
        <section>
            <article>
                 <!-- <form action="aftersearch.php"  method="post"> -->
	<p>지역 :
	<select name="region">
    	<option value="">지역선택</option>
	<optgroup label="서울특별시">
    	<optgroup label="서대문구">서대문구
	<option value="Daehyeon-dong">대현동</option>
    	<option value="Shinchon-dong">신촌동</option>
   	 <option value="Ahyeon-dong">아현동</option>
	</optgroup>
	</optgroup>
    	</select>
                    <p><b>원하시는 조건들을 선택해주세요!</b></p>
                    [카페 타입]</br>
                      <input type="radio" name="cafetype" value="franchise"> 프렌차이즈
                      <input type="radio" name="cafetype" value="independent"> 개인카페 <br>
                    <p>
                      [카페 목적]</br>
                      <input type="radio" name="purpose" value="study">스터디
                      <input type="radio" name="purpose" value="chat"> 수다떨기
                      <br><br>
                      <p>
	         [카페 서비스]</br>
                      <콘센트></br>
                      <input type="radio" name="plug" value="1"> 있음
                      <input type="radio" name="plug" value="0"> 없음 <br>
                      <p>
                      <주차가능></br>
                      <input type="radio" name="parking" value="1"> 가능
                      <input type="radio" name="parking" value="0"> 불가능 <br>
                      <p>
                      <와이파이></br>
                      <input type="radio" name="wifi" value="1"> 있음
                      <input type="radio" name="wifi" value="0"> 없음 <br>
                      <p>
                      <카페 내부 화장실></br>
                      <input type="radio" name="toilet" value="1"> 있음
                      <input type="radio" name="toilet" value="0"> 없음 <br>
                    <p><button>검색</button></p>
                </form>
            </article>
        </section>
        <!--사이드바-->
        <aside>
             <form action="login_ye1.php" method="post">
                <button>로그인</button>
            </form>
                 <form action="new_signup.php" method="post">
				<button>회원가입</button>
	</form>
        </aside>
        <!--풋터-->
        <footer>   </footer>
    </div>
</body>
</html>