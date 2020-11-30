<?php
//session에 저장된 data 가져오기
session_start();

//login.html에서 post방식으로 전달한 아이디,비번 받기
$guest_id = $_POST["guest_id"];
$guest_password = $_POST["guest_password"];

//phpmyadmin db에 접속
$con = mysqli_connect("localhost", "chicken", "k20162020#", "chicken");
if(!$con){ //db에 접속이 안되면 에러 알림...
    die("Error ".mysqli_connect_error());
}

#db에 접속 성공시--------------------------------------------------------------
//Query문
$sql = "SELECT * FROM guest WHERE guest_id = '$guest_id' AND guest_password = '$guest_password'";

//Query문 결과 result변수에 저장
$result = $con->query($sql);

//Query문 결과로 가져온 값이 한 줄이라도 있다면 true, 아니면 false
if($result->num_rows==1){

    //가져온 data를 행열로 바꾸어줌, table의 컬럼명으로 data에 접근하는것을 쉽게 하기위해서...
    $row=$result->fetch_array(MYSQLI_ASSOC);

    //login.html에서 입력한 비번과 db에 들어있는 비번이 같은지 비교
    if($row['guest_password']==$guest_password){

        //같다면 아이디를 session에 저장
        $_SESSION['guest_id']=$guest_id;

        //성공적으로 저장 했다면 main으로 이동, 저장 실패면 login화면으로 다시 이동
        if(isset($_SESSION['guest_id'])){
            //성공
            echo "success";
        }else{
            //실패 : session저장 실패
            echo "Fail:session";
        }
    }else{
        //실패 : 비번이 같지 않음
        echo "Fail:password";
    }
}else{
    //실패 : db에 아이디 존재하지 않음
    echo "Fail:empty";
}
mysqli_close($con);
?>