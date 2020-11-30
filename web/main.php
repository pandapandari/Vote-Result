
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>CHICKEN</title>
</head>
<body>
<!-- 메뉴 -->
<div class="menubar">
    <h2>YOU MUST VOTE</h2>

    <!-- 우측 메뉴 바 -->
    <ul>
        <li><a href="main.jsp">Home</a></li><!--홈버튼-->
        <li><a href="login.jsp" id="current">로그인</a></li>
        <li><a href="basket.jsp">마이페이지</a></li>
    </ul>
</div>
<h3 id="text">VOTE LIST</h3>
<div class="login-form">
	<?php 
	include("mainList.php");

print($num);
?>
<h3>★TOP 10★</h3>
<div style="height: auto; width: 60%; border:1px solid black;">

	for(int i =0; i< 5; i++){
	
<p> 야ㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑㅑ</p>

}
</div>

    <div class="links">
        <a href="register.jsp">회원가입</a>
    </div>
</div>
</body>
</html>
<link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Do+Hyeon&display=swap" rel="stylesheet">
<style>
    @font-face {
        font-family: 'Do Hyeon', sans-serif;
    }
    html{
        margin:0 auto;
        background-color: #fcf9fa;
    }
    h2{/*제목 위치지정*/
        font-family: 'Black Han Sans', sans-serif;
        font-size:30px;
        color : #8f4d57;
        margin-left: 10%;
    }
    h3{/*투표리스트 텍스트*/
        font-family: 'Do Hyeon', sans-serif;
        font-size:20px;
        color : #b4747e;
    }

    .login-form {
        background-color: #ffffff;
        position: absolute;
        padding: 20px;
        width: 900px;
        border: 2px solid #cfa6ac;
        border-radius: 5px;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /*우측 상단 바*/
    .menubar{
        margin:0px;
        padding:0px;
        font: 67.5% "Do Hyeon", sans-serif;
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
    .man{
        width: 600px;
        height: 900px;
        margin-left: 100px;
        margin-right: 10px;
    }
    .man img{
        height: 100%;
        width: 100%;
    }
    .women{
        width: 615px;
        height: 900px;
        margin-left: 100px;
        margin-right: 0px;
    }
    .woman img{
        height: 100%;
        width: 100%;
    }

    /*사진 슬라이드쇼*/
    #mainImage{
        width:100%;
        height:420px;
        margin-top:5%;
    }

    /*좌측 즐겨찾기 별표*/
    #starleft1,#starleft2, #starleft3{
        color:#8000FF;
        font-size:50px;
        margin-left: 20%;
    }

    /*우측 즐겨찾기 별표*/
    #starright4, #starright5, #starright6{
        color:#8000FF;
        font-size:50px;
    }

    /*3개 로고*/
    #logo{
        width:10px;
        height:10px;
        display: inline;
        margin-left:37%;
    }
    /*로고 이미지*/
    #logo img{
        width:5%;
        height:5%;
    }
    /*로고 옆의 텍스트*/
    #logo h4{
        display: inline;
    }

    /*문단 나눔*/
    #listimg{
        column-count: 2;
        column-rule: 3px solid #ccc;
        margin-bottom: 10%;
    }

    /*좌측 이미지*/
    .imgleft{
        margin-left: 30%;
        margin-top: 0%;
        width: 70%;
    }
    /*우측 이미지*/
    .imgright{
        margin-right: 20%;
        margin-top: 0%;
        width: 70%;
    }

    /*좌측 로고*/
    .logoleft{
        display:inline;
        margin-top: 0%;
        width:5%;
        height: 5%;
    }
    /*우측 로고*/
    .logoright{
        display:inline;
        margin-top: 0%;
        width:5%;
        height: 5%;
    }

    /*이미지들 간단 제목*/
    #listimg h6{
        display: inline;
        border-top:1px solid #9C9C9C;
    }


    /*간단한 동작 설명하는 h4*/
    #content h4{
        color:#29088A;
        margin-left: 20%;
    }
</style>


