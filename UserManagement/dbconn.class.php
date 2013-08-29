<?php
class dbconn
{

private $username;
private $dbHostname;
private $password;
private $database;

function establishConnection()
{
	$conn = mysql_connect('localhost','root','') or die('Cannot connect to the database');
	mysql_select_db('usersdb');
	return $conn;
}
function execute($query)
{
	$run_query = mysql_query($query);
			
	if(!($row = mysql_affected_rows()== 1))
	{
		return ' Registered Successfully!<br>';
	}
	else
	{
		return 'Could not add to the database!! <br>';
	}
}


}

?>
