<?php

session_start();
require 'config/db.php';
require_once 'emailController.php';
// For Server
// $notEVerifiedLocation =[

// 	'/Petroleum-Facts/',
// 	'/Petroleum-Facts/index.php',
// 	'/Petroleum-Facts/register.php',
// 	'/Petroleum-Facts/login.php',
// 	'/Petroleum-Facts/home.php',
// 	'/Petroleum-Facts/forget_password.php',
// 	'/Petroleum-Facts/knowledge.php',


// ];
// if(!in_array($_SERVER['REQUEST_URI'], $notEVerifiedLocation)){
// 	if($_SESSION['verified']!= 1){

// 		header("location: home.php");
// 	}
// }
// $AdminLocation =[
// 	'/Petroleum-Facts/userdetails.php',
// ];
// if(in_array($_SERVER['REQUEST_URI'], $AdminLocation)){
// 	if($_SESSION['type'] != 'admin'){
// 		header("location: index.php");
// 	}
// }


$errors = array();
$username = "";
$email = "";
$reference = "";
$referencecount = "";
$count = 0;

if (isset($_POST['signup-btn']) && isset($_POST['password_1']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['reference'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$reference = $_POST['reference'];
	$password = $_POST['password_1'];
	$passwordConf = $_POST['passwordConf'];
	$mobile=$_POST['mobile'];



	// validation
	if (empty($username)) {
		$errors['username'] = "Username Required";
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = "Email Address is invalid";
	}
	if (empty($email)) {
		$errors['email'] = "Email Required";
	}
	if (empty($reference)) {
		$errors['reference'] = "Reference Required";
	}
	if (empty($password)) {
		$errors['password'] = "Password Required";
	}
	if ($password !== $passwordConf) {
		$errors['password'] = "The two Password do not match";
	}

	$emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
	$stmt = $conn->prepare($emailQuery);
	if ($stmt->bind_param('s', $email)) {
		$stmt->execute();
		$result = $stmt->get_result();
		$userCount = $result->num_rows;
		$stmt->close();
		if ($userCount > 0) {
			$errors['email'] = "Email already exists";
		}
	}
	
	if (isset($reference)) {
		$refCounta = "SELECT refmax,refcount,id FROM users WHERE userref=?";
		$stmt1 = $conn->prepare($refCounta);
		$stmt1->bind_param('s', $reference);
		$stmt1->execute();
		$results = $stmt1->get_result();
		$refCount = $results->num_rows;
		$user = $results->fetch_assoc();

		$stmt1->close();
if($refCount > 0){
		if ($user) {
			if (json_encode($user['refcount']) >= json_encode($user['refmax'])) {
				$errors['reference'] = "Cannot add more users from this reference";
			} else {
				$dumb = intval(json_encode($user['refcount']));
				$idu = json_encode($user['id']);
				$dumb = $dumb + 1;
				$queryd = "UPDATE users SET refcount= $dumb WHERE id=?  ";
				$stmt2 = $conn->prepare($queryd);
				$stmt2->bind_param('s', $idu);
				$stmt2->execute();
			}
		}
	} else {
		$errors['refernce'] = "refernce does not exists";
	
	}
}


	if (count($errors) === 0) {
		$password = password_hash($password, PASSWORD_DEFAULT);
		$token = bin2hex(random_bytes(50));
		$userreference = substr($username, 0, 3) . mt_rand($min = 00001,$max= 99999);
		$verified = 0;
		$paid = 0;
		$type = 'user';

		$sql = "INSERT into users(`username`,`email`,`mobile`,`reference`,`token`,`password`,`userref`) VALUES (?,?,?,?,?,?,?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('sssssss', $username, $email,$mobile, $reference, $token, $password, $userreference);
		$stmt->execute();
			//login user
			$user_id = $conn->insert_id;
			$_SESSION['id'] = $user_id;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['verified'] = $verified;
			$_SESSION['paid'] = $paid;
			$_SESSION['myref'] = $userreference;
			$_SESSION['type'] = $type;
			sendVerificationEmail($email, $token, $userreference);
			//flash message
			$_SESSION['message'] = "You are now Logged In";
			$_SESSION['alert-class'] = "alert-success";
			header('location: home.php');
			exit(0);
		 
} else {
	$errors['db_error'] = "Database error: Failed to Register";
}
}

//if the user clicks the login button

if (isset($_POST['login-btn']) && isset($_POST['password_1']) && isset($_POST['email'])) {

	$email = $_POST['email'];
	$password = $_POST['password_1'];


	// validation

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = "Email Address is invalid";
	}
	if (empty($email)) {
		$errors['email'] = "Email Required";
	}

	if (empty($password)) {
		$errors['password'] = "Password Required";
	}
	if (count($errors) === 0) {
		$sql = "SELECT * FROM users WHERE email=? LIMIT 1";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s', $email);
		$stmt->execute();
		$result = $stmt->get_result();
		$user = $result->fetch_assoc();

		if (password_verify($password, $user['password'])) {
			//login succesfull
			//login user
			$user_id = $conn->insert_id;
			$_SESSION['type'] = $user['type'];
			$_SESSION['id'] = $user['id'];
			$_SESSION['username'] = $user['username'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['verified'] = $user['verified'];
			$_SESSION['paid'] = $user['paid'];
			$_SESSION['myref'] = $user['userref'];
			//flash message
			$_SESSION['message'] = "You are now Logged In";
			$_SESSION['alert-class'] = "alert-success";
			header('location: home.php');
			exit();
		} else {
			$errors['login fail'] = "Wrong credentials";
		}
	}
}

//verify user by token
function verifyUser($token)
{
	global $conn;
	$sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$user = mysqli_fetch_assoc($result);
		$update_query = "UPDATE users SET verified=1 WHERE token='$token'";

		if (mysqli_query($conn, $update_query)) {
			//log user in
			//login succesfull
			//login user
			$user_id = $conn->insert_id;
			$_SESSION['id'] = $user['id'];
			$_SESSION['username'] = $user['username'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['verified'] = 1;
			//flash message
			$_SESSION['message'] = "Your email was successfully Verified ";
			$_SESSION['alert-class'] = "alert-success";
			header('location: index.php');
			exit(0);
		}
	}
}

// if user clicks on the forget password button
if (isset($_POST['forget-password'])) {
	$email = $_POST['email'];

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = "Email Address is invalid";
	}
	if (empty($email)) {
		$errors['email'] = "Email Required";
	}

	if (count($errors) == 0) {
		$sql = "SELECT * FROM users WHERE email=? LIMIT 1";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s', $email);
		$stmt->execute();
		$result = $stmt->get_result();
		$user = $result->fetch_assoc();
		$token = $user['token'];
		sendPasswordResetLink($email, $token);
		header('location: password_message.php');
		exit(0);
	}
}
//if user clicked on the reset password button
if (isset($_POST['reset-password-btn'])) {
	$password = $_POST['password_1'];
	$passwordConf = $_POST['passwordConf'];
	if (empty($password)) {
		$errors['password_1'] = "Password Required";
	}
	if ($password !== $passwordConf) {
		$errors['password_1'] = "The two Password do not match";
	}

	$password = password_hash($password, PASSWORD_DEFAULT);
	$email = $_SESSION['email'];

	if (count($errors) == 0) {
		$sql = "UPDATE users  SET password='$password' WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header('location: login.php');
			exit(0);
		}
	}
}


function resetPassword($token)
{
	global $conn;
	$sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('s', $token);
	$stmt->execute();
	$result = $stmt->get_result();
	$user = $result->fetch_assoc();
	$_SESSION['email'] = $user['email'];
	header('location: reset_password.php');
	exit(0);
}

