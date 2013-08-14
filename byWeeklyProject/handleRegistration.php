<html>
<head>
<title></title>
<style type="text/css">
.Well {
	color: #8080FF;
}
</style>
</head>

<body bgcolor="#00FFFF">
<p>click <a href="Registration.html">here </a>to go back...<br>
  <?php
  
  $name=trim($_POST['name']);
  $surname=trim($_POST['surname']);
  $email=trim($_POST['email']);
  $cellNumber=trim($_POST['cellNumber']);
  $password=trim($_POST['password']);

      if (!$name||!$surname||!$email||!$cellNumber||!$password) 
      {
         echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
		  exit;
	  }
	  elseif(strlen($password)< 8)
	  {
	     echo "Password is too short".'<br/>'; 
		 exit;
	  }
	  
	  if(preg_match("/^\(?[0-9]{3}\)?[0-9]{3}[-.]?[0-9]{4}$/",$cellNumber))
	  {
		  	echo"Number is valid".'<br/>';
		  }
		  else
		  {
			  	echo"Number is invalid".'<br/>';
			  }
	  
	 if(preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/",$email))
	 {
		 	echo" Email address is correct".'<br/>';	
	 }
	 else
	 {
		echo "Email is incorrect... Try again".'<br/>';
	 }

	 if(strlen($password)>20)
	 {
		echo "Password is too long".'<br/>';
	 }
	// Used cafeWebmaster
	if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%&^*()]{8,20}$/',$password))
	{
		echo "Password is strong".'<br/>'."Password is valid".'<br/>';	
	}
	else
	{
		echo "Password is invalid".'<br/>';
	}
	
?>

</body>
</html>
