<?php
require_once 'Dao.php';
session_start();

$email=$pass="";
$_SESSION['valid'] = true;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$email = test_input($_POST["Email"]);
$pass = test_input($_POST["password"]);
$pass = validate_password($pass);
}

	function validate_password($data){
		if(!empty($data)){
				{
				return $data;
}
}
		else{
			$_SESSION['password_Err'] ="Please enter correct password";
			$_SESSION['valid'] = false;

	}
}


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


function exist_email($eml){
		$dao1 = new Dao();
		$Email = $dao1->getUser($eml);
		return $Email;
}

function exist_account($eml, $passWord) {
 $dao1 = new Dao();
 $Email = $dao1->verify_Password($eml, $passWord);
 return $Email;
}

if($_SESSION['valid'])
{
if(exist_account($email, $pass) > 0){
	header('Location: homepage.php');
}
else{
	if(!isset($_SESSION['email_doesnot'])){
		$_SESSION['passwordErr']="please enter correct password";
	}
	$_SESSION['formInput'] =$_POST;
	header('Location: login.php');
}
}
else{
	header('Location: login.php');
}
exit;
?>
