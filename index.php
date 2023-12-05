<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CAR SERVICING</title>
<link rel="stylesheet" type="text/css" href="css/style.css" /> 
<script language="javascript">
  function valid()
  {
    var name1=document.getElementById("username").value;
	var pass1=document.getElementById("password").value;
	if(name1=="")
	{
	  alert("Enter Your Username...");
	  document.getElementById("username").focus();
	  return false;
	 }
	 if(pass1=="")
	{
	  alert("Enter Your Password...");
	  document.getElementById("password").focus();
	  return false;
	 }
	return true;
   }
	
</script>
<script language="javascript">
  function valid1()
  {
    var fname1=document.getElementById("fname").value;
	var lname1=document.getElementById("lname").value;
	var email1=document.getElementById("email").value;
	var pass1=document.getElementById("pass").value;
	var cpass1=document.getElementById("cpass").value;
	if(fname1=="")
	{
	  alert("Enter Your First Name...");
	  document.getElementById("fname").focus();
	  return false;
	 }
	 if(lname1=="")
	{
	  alert("Enter Your Last Name...");
	  document.getElementById("lname").focus();
	  return false;
	 }
	 if(email1=="")
	{
	  alert("Enter Your Email...");
	  document.getElementById("email").focus();
	  return false;
	 }
	 if(pass1=="")
	{
	  alert("Enter Your Password...");
	  document.getElementById("pass").focus();
	  return false;
	 }
	 if(cpass1=="")
	{
	  alert("Enter Your Feedback...");
	  document.getElementById("cpass").focus();
	  return false;
	 }
	return true;
   }
	
</script>
</head>

<body>
	
  
     <section class="landing">
	    <div class="nav_bar">
		   <h1>Car<span>Servicing</span></h1>
		   <nav>
	           <ul>
	               <li><a href="index.html" class="active">Home</a></li>
				   <li><a href="about.html">About</a></li>	
				   <li><a href="services.html">Services</a></li>	
				   <li><a href="gallery.html">Gallery</a></li>	
				   <li><a href="contact.html">Contact</a></li>
				   <li><button class="loginbtn" onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">LOGIN</button></li>
				 </ul>
			 </nav>
	       </div>
	  
	 <!--Login-->
	  <div id="login-form" class="login-page" >
	      <div class="form-box">
		    <div class="button-box">
			<div id="btn"></div>
			<button type="button" onclick="login()" class="toggle-btn">LOG IN</button>
			
			<button type="button" onclick="register()" class="toggle-btn" style="float:right">REGISTER</button>
		    </div>
		<form id="login" class="input-group-login" method="post" action="adminhome.php">
			 <input type="text" name="username" id="username" class="input-field" placeholder="Username" required />
			 <input type="password" name="password" id="password" class="input-field" placeholder="Enter Password" required />
			
			 <button type="submit" name="Login" value="Login" onclick="return valid();" class="submit-btn">Log in</button>
		</form>
		
		<!--Resiter-->
		<form id="register" class="input-group-register" action="radd.php" method="post" name="form1">
		  <input type="text" class="input-field" name="fname" id="fname" placeholder="First Name" required />
		  <input type="text" class="input-field" name="lname" id="lname" placeholder="Last Name" required />
		  <input type="email" class="input-field" name="email" id="email" placeholder="Email Id" required />
		  <input type="password" class="input-field" name="pass" id="pass" placeholder="Enter Password" required />
		  <input type="password" class="input-field" name="cpass" id="cpass" placeholder="Confirm Password" required />

			 <button type="submit" value="Register" onclick="return valid1();" name="Register" class="submit-btn">Register</button>
		</form>
		  </div>
	  </div>
	 </div>
	  <script>
	         var x=document.getElementById('login');
			 var y=document.getElementById('register');
			 var z=document.getElementById('btn');
			 function register()
			 {
			    x.style.left='-400px';
				y.style.left='50px';
				z.style.left='110px';
			 }
			 function login()
			 {
			    x.style.left='50px';
				y.style.left='450px';
				z.style.left='0px';
			 }
	  </script>
	  <script>
	        var modal = document.getElementById('login-form');
			window.onclick = function(event)
			{
			  if(event.target == modal)
			  {
			    modal.style.display = "none";
			   }
			 }
	  </script>
	 
</body>
</html>
