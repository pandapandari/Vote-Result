<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" dir="ltr">
<meta charset="utf-8" />
<head>
    <link href="cssfile.css" media="screen and (min-width: 512px) and (max-width: 1024px)" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote</title>
</head>
<script type="text/javascript">
    //jQuery 문법
    $(document).ready(function(){
        $('#reg').submit(function(e){
            e.preventDefault();
            //Ajax 문법
            $.ajax({
                type : 'POST',
                url : 'http://chicken.dothome.co.kr/registerPro.php',
                data : $(this).serialize(),
                success : function(result){
                    if(result=="IDcheck"){
                        alert("입력하신 아이디가 이미 존재 합니다. 다른 아이디로 입력하세요.");
                    }else if(result=="Success save"){
                        alert("회원 가입을 축하합니다. 로그인을 해주세요.");
                        location.replace('http://chicken.dothome.co.kr/index.html')
                    }else if(result=="Fail save"){
                        alert("회원 가입에 실패 했습니다. 다시 시도해 주세요.");
                    }else if(result=="Empty ID"){
                        alert("아이디를 입력하지 않았습니다. 아이디를 입력하세요.");
                    }else if(result=="Empty Name"){
                        alert("이름을 입력하지 않았습니다. 이름을 입력하세요.");
                    }else if(result=="Empty Password"){
                        alert("비밀번호를 입력하지 않았습니다. 비밀번호을 입력하세요.");
                    }else if(result=="Empty Address"){
                        alert("주소를 입력하지 않았습니다. 주소를 입력하세요.");
                    }
                    else if(result=="Empty Email"){
                        alert("이메일을 입력하지 않았습니다. 이메일을 입력하세요.");
                    }
                    else if(result=="Empty Email_DNS"){
                        alert("이메일 도메인을 입력하지 않았습니다. 이메일 도메인을 입력하세요.");
                    }
                    else if(result=="Empty PhoneNumber"){
                        alert("전화번호를 입력하지 않았습니다. 전화번호를 입력하세요.");
                    }
                },
                error : function(xtr,status,error){
                    alert(xtr +":"+status+":"+error);
                }
            });
        });
    });
</script>
<body topmargin="0" leftmargin="0" >
<!-- 메뉴 -->
<div class="menubar">
    <h2>YOU MUST VOTE</h2>

    <!-- 우측 메뉴 바 -->
    <ul>
        <a>!! When you login, you can see VOTE LIST :) !!</a>
    </ul>
</div>
<!-- 회원가입화면-->
<div class="register-form">
    <form id="reg" mehtod="POST">
        <h3 id="text">REGISTER</h3>
        <tr>
            <th>ID</th> <td><input type="text" name="guest_id" placeholder="아이디" class="text-field"></td>
        </tr>
        <br/>
        <tr>
            <th>NAME</th> <td><input type="text" name="guest_name" placeholder="이름" class="text-field"></td>
        </tr>
        <br/>
        <tr>
            <th>PASSWORD</th> <td><input type="text" name="guest_password" placeholder="비밀번호" class="text-field"></td>
        </tr>
        <br/>
        <tr>
            <th>ADDRESS</th> <td> <input type="text" name="guest_address" placeholder="주소" class="text-field"></td>
        </tr>
        <br/>
        <tr>
            <th>E-MAIL </th> <td>
            <input type="text" name="guest_email" class="text-field" placeholder="이메일 아이디" placeholder="Id">
            <br/>@
            <input type="text" name="guest_email_dns" class="text-field" placeholder="이메일 도메인" placeholder="Dot-Com">
        </td>
        </tr>
        <br/>
        <tr>
            <th>PHONE NUMBER</th>
            <td><input type="text" name="guest_phonenumber" placeholder="전화번호" class="text-field"></td>
        </tr>
        <br/>
        <input type="submit" value="Click" class="submit-btn">
    </form>

    <div class="links">
        <a href="index.html">Back</a>
    </div>
</div>
</body>
</html>
<link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Do+Hyeon&family=Architects+Daughter&display=swap" rel="stylesheet">
<style>
    html{
        margin:0 auto;
        background-color: #fcf9fa;
    }
    h2{/*제목 위치지정*/
        font-family: 'Architects Daughter', cursive;
        font-size:45px;
        color : #8f4d57;
        text-align:center;
        font-weight:bold;
    }
    h3{/*투표리스트 텍스트*/
        font-family: 'Architects Daughter', cursive;
        font-size:28px;
        color : #c27884;
        font-weight:bold;
        text-align:center;
        margin-left:42%;

    }
    imput{
        font-family: 'Architects Daughter', cursive;
        color:#f0e9eb;
    }

    /*우측 상단 바*/
    .menubar{
        margin:-10px;
        padding:5px;
        font: 67.5% 'Architects Daughter', cursive;
        font-size:15px;
    }

    .menubar ul{
        height:50px;
        list-style:none;
        margin-left:40%;
        color:#7a6d71;
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
        margin-left:50%;
    }

    .menubar li a:hover, .menubar ul li:hover a{
        background:#7a6d71;
        color:#FFFFFF;
        text-decoration:none;
    }

    .menubar li li {
        background: #a19498;
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
        background: #a19498;
        border:0px;
        color:#ffffff;
        text-decoration:none;
    }

    .menubar p{
        clear:left;
    }

    .register-form {
        background-color: #ffffff;
        position: absolute;
        padding: 20px;
        border: 2px solid #cfa6ac;
        border-radius: 5px;
        margin-top:8%;
        margin-bottom:10%;
        top: 53%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 35%;
        font-family: 'Architects Daughter', cursive;
        text-align: right;
        padding-right:15%;
    }

    th {
        font-family: 'Architects Daughter', cursive;
        font-size:20px;
        color : #b4747e;
        text-align:left;
    }

    .text-field {
        border:none;
        border-radius:5px;
        width:250px;
        border: 1px solid #e4ccd0;
        margin-bottom:10px;
        padding:10px;
        font-size: 14px;
        margin-left:5%;
    }

    .submit-btn {
        padding:4px;
        margin:5px;
        width:150px;
        font-family: 'Architects Daughter', cursive;
        background: #a19498;
        color:#ffffff;
        font-weight:bold;
        border:0;
        border-radius: 5px;
        outling:0;
        cursor:pointer;
        margin-right:13%;
    }

    .links {
        text-align:center;
        margin-left:45%;
    }

    .links a {
        font-family: 'Architects Daughter', cursive;
        text-align:center;
        color:#5823ad;
    }

</style>