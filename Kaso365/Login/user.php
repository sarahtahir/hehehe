<?php
//user.php
//=================== validatePassword
function validatePassword($username,$password)
{
$con=mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error();
	exit;
	}
	
$sql= "SELECT * FROM users where username = '".$username."'"; 
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
if($count == 1){
	while($row = mysqli_fetch_array($result)){
		if(password_verify($password, $row['password'])){
			return true;
		}
		else {
			return false;
			
		}
	}
}
else
	{
	return false; //invalid password
	}
	 }

//=================== getUserType
function getUserType($username)
{
$con=mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql= "SELECT * FROM users where username = '".$username ."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
if($count == 1){
	$row = mysqli_fetch_assoc($result);
	$userType=$row['userType'];
	return $userType;
	}
 }

?>