<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="admin.css" />
<style>
td{
 text-align:center;
 color:#000000;
 }
 table{
  margin-top:100px;
  
  }
   a{
  text-decoration:none;
  
  }
</style>
</head>

<body>
<div class="nav_bar">
		   <h1><font color="#000033">Car<span>Servicing</span></h1>
		   <nav>
	           <ul>
	               <li><a href="Vfeedback.php">View Feedback</a></li>
				   <li><a href="viewservice.php">View Services</a></li>
				   <li><a href="viewoffer.php">View Offer</a></li>	
				   <li><a href="Vregister.php">View User</a></li>	
				   <li><a href="adminhome.php">Logout</a></li>	
				  
				   
				 </ul>
			 </nav>
	       </div>
<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entery first)
//$result = mysql_query(SELECT * FROM users ORDER BY id DESC");
//mysql_query is deprecated

$result = mysqli_query($conn, "SELECT * FROM feedback ");//using mysqli_query instead

?>
<html>
<head>
     <title>Home Page</title>
</head>
<body bgcolor="#CCCCCC">
    
	<h1><center>Feedback Report</center></h1><hr />
	<table width="80%" border="2" align="center">
	   <tr bgcolor="#000000">
	       <td style="color:#CCCCCC; font-weight:bold">First Name</td>
		   <td style="color:#CCCCCC; font-weight:bold" >Last Name</td>
		   <td style="color:#CCCCCC; font-weight:bold">Email</td>
		   <td style="color:#CCCCCC; font-weight:bold">Mobile No.</td>
		   <td style="color:#CCCCCC; font-weight:bold">feedback</td>
		   <td style="color:#CCCCCC; font-weight:bold">Date</td>
		   
		</tr>
		
		
		<?php
		   while($res=mysqli_fetch_array($result)) {
		       echo"<tr>";
			   echo"<td>".$res['fname']."</td>";
			   echo"<td>".$res['lname']."</td>";
			   echo"<td>".$res['email']."</td>";
			   echo"<td>".$res['mobile']."</td>";
			   echo"<td>".$res['feedback']."</td>";
			   echo"<td>".$res['cdate']."</td>";
			   
			   }
			   ?>
			   </table>
			   <br />
<a href="adminhome.php"><center>BACK</center></a>
</body> 
</html>

