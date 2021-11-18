<head>
    <META NAME="GENERATOR" Content="Microsoft Visual Studio">
    <meta name="description" content="This is an HTML5 example">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
<meta charset="utf-8">
    <title>EXERCITE</title>
    
</head>
<body>
    <div class="wapper">
        <!--헤더시작-->
        <header>
            <a href="main.php">
                <!-- <img src="logo.jpg" width="100px" height="100px"> -->
            </a>
            <p>Let's find your EXERCITE <input type="button" value="마이페이지" onclick="location.href='../php/mypage.php'">
            <input type="button" value="로그아웃" onclick="location.href='../php/logout.php'">
            </p>
            <input type="button" value="인기 강좌 조회" onclick="location.href='../php/rank.php'">
            <input type="button" value="센터별 보유 강좌 개수 조회" onclick="location.href='../php/ad1.php'">
            <input type="button" value="센터별, 종목별 평균 수용 인원 조회" onclick="location.href='../php/ad2.php'">
            
            
        </header>
        <!--콘텐츠부분-->
        <section>
            <article>
                 <form action="show.php"  method="post">
	<p>

                    <p><b>당신의 EXERCITE를 골라주세요!  </b></p>
                    
                    <br> 운동 종목 </br>
                      <input type="radio" name="sport_type" value="검도"> 검도
                      <input type="radio" name="sport_type" value="수영"> 수영
                      <input type="radio" name="sport_type" value="농구"> 농구
                      <input type="radio" name="sport_type" value="골프"> 골프
                      <input type="radio" name="sport_type" value="발레"> 발레
                      <!-- <input type="radio" name="sport_type" value="kendo"> 검도
                      <input type="radio" name="sport_type" value="swim"> 수영
                      <input type="radio" name="sport_type" value="basket"> 농구
                      <input type="radio" name="sport_type" value="golf"> 골프
                      <input type="radio" name="sport_type" value="ballet"> 발레 -->
                     <br>
                      <br> 원하는 최소 인원수 </br>
                      <input type="number" name="sport_num">
                     
                      <br> 
                      <br>운동 지역 </br>
                      <input type="radio" name="region" value="성남시">성남시
                      <input type="radio" name="region" value="서울시">서울시
                      <input type="radio" name="region" value="고양시">고양시
                      <input type="radio" name="region" value="인천광역시">인천광역시

                      <!-- <input type="radio" name="region" value="sungnam">성남시
                      <input type="radio" name="region" value="seoul"> 서울시
                      <input type="radio" name="region" value="goyang">고양시
                      <input type="radio" name="region" value="incheon"> 인천광역시 -->
                      <br>

                      <br>가능한  운동 시작 날짜</br>
                    <p> <p><input type="date" name="start_date"></p></p>
                    
                    <br>
                    <p><input type="submit" value="Submit"></p>
                    <!-- <button>검색</button></p> -->

                </form>
            </article>
        </section>
        <!--사이드바-->
        <aside>
             <!-- <form action="login_ye1.php" method="post">
                <button>로그인</button>
            </form> -->
                 <!-- <form action="new_signup.php" method="post">
				<button>회원가입</button>
	</form> -->
        </aside>
        <!--풋터-->
        <footer>   </footer>
    </div>
</body>
</html>