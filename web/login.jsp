
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="login.css" type="text/css" rel="stylesheet">
    <title>J S M</title>
  </head>
  <body>
    <!-- 메뉴 -->
    <div class="menubar">
      <h2>J S M</h2>

   <!-- 우측 메뉴 바 -->
   <ul>
      <li><a href="index.html">Home</a></li><!--홈버튼-->
      <li><a href="login.jsp" id="current">로그인</a>

      </li>
      <li><a href="basket.jsp">장바구니</a></li>
      <li><a href="question.jsp">자주묻는질문</a></li>
      <li><a href="notice.jsp">공지사항</a></li>
      <li><a href="write.jsp">구매후기</a></li>
   </ul>
</div>

<!-- 로그인화면-->
<div class="login-form">
  <form method = "post" action="loginPro.php">
    <h3 id="text">LOGIN</h3>
    <input type="text" name="guest_id" placeholder="아이디"><br>
    <input type="password" name="guest_password" class="text-field" placeholder="비밀번호"><br>
    <input type="submit" value="로그인" class="submit-btn">
  </form>

  <div class="links">
    <a href="register.jsp">회원가입</a>
  </div>
</div>
</body>
</html>
  
<style>
html{
  margin:0 auto;
}
h2{/*제목 위치지정*/
  margin-left: 10%;
}

/*우측 상단 바*/
.menubar{
margin:0px;
padding:0px;
font: 67.5% "Lucida Sans Unicode", "Bitstream Vera Sans", "Trebuchet Unicode MS", "Lucida Grande", Verdana, Helvetica, sans-serif;
font-size:14px;
font-weight:bold;
}


.menubar ul{
height:50px;
list-style:none;
margin-left:50%;
padding:0;
}

.menubar li{
float:left;
padding:0px;
}

.menubar li a{
display:block;
font-weight:normal;
line-height:50px;
margin:0px;
padding:0px 25px;
text-align:center;
text-decoration:none;
}

.menubar li a:hover, .menubar ul li:hover a{
background: rgb(71,71,71);
color:#FFFFFF;
text-decoration:none;
}

.menubar li ul{
background: rgb(109,109,109);
display:none; /* 평상시에는 드랍메뉴가 안보이게 하기 */
height:auto;
padding:0px;
margin:0px;
border:0px;
position:absolute;
width:200px;
z-index:200;
}

.menubar li:hover ul{
display:block; /* 마우스 커서 올리면 드랍메뉴 보이게 하기 */
}

.menubar li li {
background: rgb(109,109,109);
display:block;
float:none;
margin:0px;
padding:0px;
width:200px;
}

.menubar li:hover li a{
background:none;
}

.menubar li ul a{
display:block;
height:50px;
font-size:12px;
font-style:normal;
margin:0px;
padding:0px 10px 0px 15px;
text-align:left;
}

.menubar li ul a:hover, .menubar li ul li:hover a{
background: rgb(71,71,71);
border:0px;
color:#ffffff;
text-decoration:none;
}

.menubar p{
clear:left;
}

.login-form {
position: absolute;
padding: 20px;
width: 285px;
border: 2px solid #cfa6ac;
border-radius: 5px;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}

.text-field {
    border:none;
    border-radius:5px;
    width:260px;
    margin-bottom:10px;
    border: 1px solid #e4ccd0;
    padding:10px;
  font-size: 14px;
}

.submit-btn {
    color:white;
    width:260px;
    border:none;
    border-radius:5px;
    background-color: #ffc8c3;
    font-size: 14px;
    margin-bottom:30px;
    margin-left: 10px;
    padding:10px;
}

.links {
        text-decoration:None;
        margin-left: 117px;
        margin-top: -10px;
}

.links a {
    text-decoration:none;
    color:#9B9B9B;
    font-size: 12px;
}
#text {
  text-align: center;
  font-size: 20px;
}
</style>