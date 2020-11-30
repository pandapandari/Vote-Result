
<?php
session_start();    //session 가져오기

$guest_id = $_SESSION["guest_id"];
$guest_password = $_POST["guest_password"];

$con = mysqli_connect("localhost", "chicken", "k20162020#", "chicken");
mysqli_query($con,'SET NAMES utf8');
$sql = "SELECT * FROM guest WHERE guest_id = '$guest_id'";

$result = $con->query($sql);
$row = $result -> fetch_array();

if($row["guest_password"]==$guest_password){//쿼리문을 실행해서 결과가 있으면 로그인 성공
    echo "<script>location.href='mypage.html'</script>";
}
else{//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
    echo "<script>alert(\"잘못된 비밀번호입니다. 다시 입력해 주세요. \");</script>";
    require ("mypageCheck.html");
}
?>