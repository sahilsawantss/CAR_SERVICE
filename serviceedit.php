<?php
//including the database connection files
include_once("connection.php");

if(isset($_POST['update']))
{
  $id=$_POST['id'];
  $sname=$_POST['sname'];
  $descri=$_POST['descri'];
  $cost=$_POST['cost'];
  
  if(empty($sname) || empty($descri) || empty($cost)) {
       
	   if(empty($sname)){
	    echo"<font color='red'>Service Name field is empty.</font><br>";
		}
	   if(empty($descri)){
	    echo"<font color='red'>Description field is empty.</font><br>";
		}
	   if(empty($cost)){
	    echo"<font color='red'>Service Cost field is empty.</font><br>";
		}
  }
  else{
    //updating table
	$result=mysqli_query($conn, "UPDATE service SET sname='$sname',descri='$descri',cost='$cost' WHERE id=$id");
	
	header("Location:viewservice.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

$result=mysqli_query($conn, "SELECT * FROM service WHERE id=$id");

while($res =mysqli_fetch_array($result))
{
  $sname=$res['sname'];
  $descri=$res['descri'];
  $cost=$res['cost'];
}
?>
   
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<!--<a href="index.php">Home</a>
<br><br>-->
<form name="form1" method="post" action="serviceedit.php">
    <table border="0">
	  <tr>
	      <td>Service Name</td>
		  <td><input type="text" name="sname" value="<?php echo $sname;?>"></td>
	   </tr>
	   <tr>
	      <td>Service Description</td>
		  <td><input type="text" name="descri" value="<?php echo $descri;?>"></td>
	   </tr>
	   <tr>
	      <td>Service Cost</td>
		  <td><input type="text" name="cost" value="<?php echo $cost;?>"></td>
	   </tr>
	   <tr>
	      <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
		  <td><input type="submit" name="update" value="Update"></td>
		</tr>
	</table>
</form>
</body>
</html>
