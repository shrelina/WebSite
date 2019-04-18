
<?php
require_once 'Dao.php';
session_start();


$email = $password = $repassword = "";


$_SESSION['valid'] = true;
if($_SERVER["REQUEST_METHOD"] == "POST"){

	$email = test_input($_POST['email']);
	$password = test_input($_POST["password"]);
	$repassword = test_input($_POST["repassword"]);

	$email = validate_email($email);
  $password = validate_password($password);
	$repassword = validate_repassword($password, $repassword);
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

function validate_email($data){
        if(!empty($data)){
if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $data)){
				if(exist_email($data) <= 0){
								return $data;
                }
								else{
                        $_SESSION['email_already'] = "Please use another email";
                        $_SESSION['valid'] = false;
}
}

								else{
                        $_SESSION['email_Err'] = "Invalid Email";
                        $_SESSION['valid'] = false;

                }
        }
				else{
                $_SESSION['email_Err'] = "Please Enter Your Email";
                $_SESSION['valid'] = false;

        }
}

function validate_password($data){
if(!empty($data)){
if(preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/", $data) === 0){
$_SESSION['password_Err'] = "Please enter a passsword of length 8 with atleast 1 number, capital and small letter. ";
$_SESSION['valid'] = false;
}else{
return $data;
}
}
else{
$_SESSION['password_Err'] ="Please Enter Your Password";
$_SESSION['valid'] = false;
}
}

function validate_repassword($data, $redata){
	if(!empty($data) && !empty($redata) && ($data === $redata)){
		return $redata;
	}
	if (!empty($data) && !empty($redata) && ($data != $redata)){
		$_SESSION['repassword_Err'] = "Password do not match";
		$_SESSION['valid'] = false;
	}
  if (!empty($data) && empty($redata)){
		$_SESSION['repassword_Err'] = "Password enter password ";
		$_SESSION['valid'] = false;
}
}



if($_SESSION['valid'])
{

		$dao = new Dao();
		$dao->saveUser($email,$password, $repassword);
	  header('Location: login.php');
	}
else{
		$_SESSION['formInput'] = $_POST;
		header('Location: signup.php');
	}
	exit;
	?>
