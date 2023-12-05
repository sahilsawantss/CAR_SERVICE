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
	$oname=$_POST["oname"];
	$descri=$_POST["descri"];
	$no=$_POST["no"];
	
	
	
	$result = mysqli_query($conn, "insert into
offer(oname,descri,no)values('$oname','$descri','$no')");
	
header("Location:adminhome.php");
	
   }
?>

</body>
</html>
