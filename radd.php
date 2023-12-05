<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
    include("connection.php");
	
	if(isset($_POST['Register'])) {
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$cpass=$_POST["cpass"];
	
	
	$result = mysqli_query($conn, "insert into
register(fname,lname,email,pass,cpass)values('$fname','$lname','$email','$pass', '$cpass')");
	
header("Location:index.html");
   }
?>
</body>
</html>
