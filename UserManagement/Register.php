<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
$fName = trim($_POST['fName']);
$surname = trim($_POST['surname']);
$uName = trim($_POST['uName']);
$psswrd = trim($_POST['psswrd']);
$rePsswrd = trim($_POST['rePsswrd']);
$email = trim($_POST['email']);
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
</head>

<body>
<?php
require "User.class.php";

if(!$fName || !$surname || !$uName || !$psswrd || !$rePsswrd|| !$email)
{
	echo "All fields must be entered!!!!!";
	exit;
}
if(!(preg_match("#[a-zA-Z]+#",$fName) && (preg_match("#[a-zA-Z]+#",$surname))))
{
	echo "Your name and surname must contain only letters";
	
}

if(!preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]/",$email))
{
	echo "Wrong email format</br>";
	exit;
}
 
if(!(preg_match("#[0-9]+#",$psswrd) && (preg_match("#[.]+#",$psswrd)) && (preg_match("#[a-zA-Z]+#",$psswrd))))
{
	echo "Password should contain atleast 1 number, 1 character  and 1 alphabet</br>";
	exit;
}
if(((strlen($psswrd) < 8 )))
{
	echo "Password too short</br>";
	echo "it must be 8 or more  characters long</br>";
	exit;
}
if($psswrd != $rePsswrd)
{
	echo "The passwords does not match</br>";
	exit;
}
echo "YOUR DETAILS ARE AS FOLLOWS:</br>";
$user  = new User($uName,$email);
$user->save();
$user->displayUserInfo($uName,$email);
?>
</body>
</html>