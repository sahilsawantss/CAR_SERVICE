<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
    include("connection.php");
	
	if(isset($_POST['Submit'])) {
	$sname=$_POST["sname"];
	$descri=$_POST["descri"];
	$cost=$_POST["cost"];
	
	
	
	$result = mysqli_query($conn, "insert into
service(sname,descri,cost)values('$sname','$descri','$cost')");

	header("Location:adminhome.php");
	
   }
?>
</body>
</html>
