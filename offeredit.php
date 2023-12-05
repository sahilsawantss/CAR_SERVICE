<?php
//including the database connection files
include_once("connection.php");

if(isset($_POST['update']))
{
  $id=$_POST['id'];
  $oname=$_POST['oname'];
  $descri=$_POST['descri'];
  $no=$_POST['no'];
  
  if(empty($oname) || empty($descri) || empty($no)) {
       
	   if(empty($oname)){
	    echo"<font color='red'>Offer Name field is empty.</font><br>";
		}
	   if(empty($descri)){
	    echo"<font color='red'>Description field is empty.</font><br>";
		}
	   if(empty($no)){
	    echo"<font color='red'>Offer Period field is empty.</font><br>";
		}
  }
  else{
    //updating table
	$result=mysqli_query($conn, "UPDATE offer SET oname='$oname',descri='$descri',no='$no' WHERE id=$id");
	
	header("Location:viewoffer.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

$result=mysqli_query($conn, "SELECT * FROM offer WHERE id=$id");

while($res =mysqli_fetch_array($result))
{
  $oname=$res['oname'];
  $descri=$res['descri'];
  $no=$res['no'];
}
?>
   
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<!--<a href="index.php">Home</a>
<br><br>-->
<form name="form1" method="post" action="offeredit.php">
    <table border="0">
	  <tr>
	      <td>Offer Name</td>
		  <td><input type="text" name="oname" value="<?php echo $oname;?>"></td>
	   </tr>
	   <tr>
	      <td>Offer Description</td>
		  <td><input type="text" name="descri" value="<?php echo $descri;?>"></td>
	   </tr>
	   <tr>
	      <td>Offer Period</td>
		  <td><input type="text" name="no" value="<?php echo $no;?>"></td>
	   </tr>
	   <tr>
	      <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
		  <td><input type="submit" name="update" value="Update"></td>
		</tr>
	</table>
</form>
</body>
</html>
