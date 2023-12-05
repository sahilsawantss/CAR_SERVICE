<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//including the database connection file
include("connection.php");

//getting id of the data from url
$id=$_GET['id'];

//deleting the row from table
$result=mysqli_query($conn,"DELETE FROM service WHERE id=$id");


header("Location:viewservice.php");
?>
</body>
</html>
