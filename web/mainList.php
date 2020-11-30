<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>CHICKEN</title>
</head>
<body>
<?php 

	print($id);
 	$con = mysqli_connect("localhost", "chicken", "k20162020#", "chicken");
    	mysqli_query($con,'SET NAMES utf8');

    	$userID = $id;

    	$statement = mysqli_prepare($con, "SELECT * FROM temp WHERE userID = ?");
    	mysqli_stmt_bind_param($statement, "s", $userID);
    	mysqli_stmt_execute($statement);

    	mysqli_stmt_store_result($statement);
    	mysqli_stmt_bind_result($statement, $name, $age, $votename, $userID);

    	$response= array();
    	while($row =  $statement->fetch()){
      $data = array(
      "name"=>$name, 
      "age"=>$age,
      "votename"=>$votename,
      "userId"=>$userID
      );
     	 array_push($response, $name);
	}
	$num = count($response);

?>

</body>