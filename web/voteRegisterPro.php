<?php

$connect = mysqli_connect("localhost", "chicken", "k20162020#", "chicken") or die("fail");

session_start();    //session 가져오기
$guest_id = $_SESSION["guest_id"];

$aritcle = $_POST['aritcle'];                      //Writer
$contents = $_POST['contents'];                        //Password
$plus = $_POST['plus'];                  //Title
$can1 = $_POST['can1'];
$can2 = $_POST['can2'];
$can3 = $_POST['can3'];

$URL = './main.html';                   //return URL
 
 
$query = "insert into board (aritcle, contents, plus, user, can1, can2, can3) values('$aritcle', '$contents', '$plus', '$guest_id' ,'$can1', '$can2', '$can3');";
 
 
$result = $connect->query($query);
if($result){
?>
    <script>
        alert("<?php echo "Done!"?>");
        location.replace("<?php echo $URL?>");
    </script>
<?php
                }
                else{
                        echo "FAIL";
                }

                mysqli_close($connect);
?>
