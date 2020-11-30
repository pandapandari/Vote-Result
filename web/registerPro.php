<?php
$con = mysqli_connect("localhost", "chicken", "k20162020#", "chicken") or die("fail");
    $guest_id = $_POST["guest_id"];
    $guest_name = $_POST["guest_name"];
    $guest_password= $_POST["guest_password"];
    $guest_address = $_POST["guest_address"];
    $guest_email = $_POST["guest_email"];
    $guest_email_dns = $_POST["guest_email_dns"];
    $guest_phonenumber = $_POST["guest_phonenumber"];

   

  if($guest_id == NULL){
      echo "Empty ID";
  }else if($guest_name == NULL){
      echo "Empty Password";
  }else if($guest_password == NULL){
      echo "Empty Name";
  }else if($guest_address == NULL){
      echo "Empty Address";
  }else if($guest_email == NULL){
      echo "Empty Email";
  }
  else if($guest_email_dns == NULL){
      echo "Empty Email_DNS";
  }
  else if($guest_phonenumber == NULL){
      echo "Empty PhoneNumber";
  }
  else{
      //회원 가입하고자 하는 아이디가 이미 존재하는지 확인
      $compare_sql = "SELECT guest_id FROM guest WHERE guest_id = '$guest_id'";
      $compare_result = $con->query($compare_sql);

      //DB에서 가져온 결과값이 1개 이상이고, 그 결과값이 입력한 ID와 같다면 DB에 존재하므로 다른 아이디로 시도...매세지 출력
      if($compare_result->num_rows == 1){

          //DB에서 가져온 결과값을 행렬로 변환 하여 DATA 접근
          $row=$compare_result->fetch_array(MYSQLI_ASSOC);
          if($row['guest_id']==$guest_id){
              echo "IDcheck";
          }
      }else{  //DB에 입력한 아이디와 동일한 아이디가 없다면 DB에 저장
          $sql = "INSERT INTO guest VALUES ('$guest_id','$guest_name','$guest_password','$guest_address','$guest_email','$guest_email_dns','$guest_phonenumber')";
          $result = $con->query($sql);

          //저장 되었다면 성공, 아님 실패
          if($result){
              echo "Success save";
          }else{
              echo "Fail save";
          }
      }
  }

  mysqli_close($con);
?>