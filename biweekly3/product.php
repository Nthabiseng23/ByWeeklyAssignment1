<?php
session_start();
mysql_connect('localhost','root','');
	mysql_select_db('productdb');
	$queryString = "SELECT * FROM product";
			$run_query = mysql_query($queryString);
			
			if($row = mysql_fetch_assoc($run_query)){
				echo "<a href='product.php?prodid=".$row['id']."'>".$row['name']."</a><br>";
			}
			else
			{
				echo"prod_id".$row['id']."not found";
			}	

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<p><img src="mySQL.jpg" alt="mySQL" width="179" height="149" /> mySQL <a href="cart.php">Add to cart</a></p>
<p><img src="Java.jpg" alt="java" width="178" height="141" />Java <a href="cart.php">Add to cart</a></p>
</body>
</html>
