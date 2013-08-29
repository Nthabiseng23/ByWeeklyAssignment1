<?php
require "dbconn.class.php";
class User{

public $email;
public $username;
public $password;

function __construct($username,$email)
{
	$this->username = $username;
	$this->email = $email;
}
function setPassword()
{
	return md5($password);
}
function displayUserInfo($username,$email)
{
	return "Username is ".$username."</br> E-mail address is ".$email."\n";
}

function save()
{
	$db = new dbConn();
	$con = $db->establishConnection();
	$queryString = '
			INSERT INTO users(user_id, username, password, email)
			VALUES (" NULL ", "'. $username. '", "'.$password.'", "'. $email.')
			'; 
	echo $db->execute($queryString);
}

}
?>