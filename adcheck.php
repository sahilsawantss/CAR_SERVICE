<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
$username=$_POST["username"];
$password=$_POST["password"];



if(isset($_POST["Login"])=="Login")
{
  $q="select * from login   ";
  $res=mysqli_query($conn,$q);
  $rows=mysqli_fetch_row($res);
  $username1=$rows[0];
  $password1=$rows[1];
  
  $q1="select * from register where email='$username' and pass='$password'";
  $res=mysqli_query($conn,$q1);
  $rows1=mysqli_fetch_row($res);
  $username2=$rows1[2];
  $password2=$rows1[3];
 
   echo $username2;
   echo $password2;
  if($username==$username1 && $password==$password1 )
  {
      echo "<script>alert('login successfully')</script>";
	  header('Location:adminhome.php');
    
  }
  else if($username==$username2 && $password==$password2 )
  {
      
	  header('Location:userhome.php');
  }
  else
  {
      echo "<script>alert('login unsuccessfully Please Enter Valid Login Information')</script>";
      
  }
}
?>   
</body>
</html>
