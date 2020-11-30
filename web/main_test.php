
<?php 

	print($id);
 	$con = mysqli_connect("localhost", "chicken", "k20162020#", "chicken");
    	mysqli_query($con,'SET NAMES utf8');

    	$userID = $id;

    	$statement = mysqli_prepare($con, "SELECT * FROM board");
    	mysqli_stmt_execute($statement);

    	mysqli_stmt_store_result($statement);
    	mysqli_stmt_bind_result($statement, $time, $article, $contents, $plus);

    	$response= array();
    	while($row =  $statement->fetch()){
      $data = array(
      "time"=>$time,
      "article"=>$article,
      "contents"=>$contents,
      "plus"=>$plus
      );
     	 array_push($response, $time);
	}
	$num = count($response);

?>
