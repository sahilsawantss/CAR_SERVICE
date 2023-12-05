<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
    include_once("connection.php");
	
	if(isset($_POST['Send'])) {
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$feedback=$_POST["feedback"];
	
	$result = mysqli_query($conn, "insert into
feedback(fname,lname,email,mobile,feedback)values('$fname','$lname','$email', $mobile ,'$feedback')");

	
header("Location:contact.html");
   }
?>

</body>
</html>
