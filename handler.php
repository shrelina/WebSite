<?php
require_once 'Dao.php';

session_start();

$email=$pass="";
$_SESSION['valid'] = true;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$email = test_input($_POST["Email"]);
$pass = test_input($_POST["password"]);
$email = validate_email($email);
$pass = validate_password($pass);
}

	function validate_password($data){
		if(!empty($data)){
			if(preg_match("/^.*(?=,{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $data)===0){
				return $data;


			}else{
				$_SESSION['password_Err'] = "password should include atlease length of 8 , one capital letter
        one small letter and one digit";
				$_SESSION['valid'] = false;
			}


		}
		else{
			$_SESSION['password_Err'] ="Please enter password";
			$_SESSION['valid'] = false;
		}
	}


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function validate_email($data){
        if(!empty($data)){
                if(preg_match("/^[\w-\.]+@([\w-]+\.)+[\w]{2,4}$/", $data)){
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
