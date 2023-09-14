<?php
 include_once("config.php");  
 include_once("header.php"); 
 
  if(isset($_POST['login']))
	  {
	$query ="select * from  tab_user where Uid='".$_POST['email_id']."'  and	password ='".$_POST['password']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
		{
	$row = mysql_fetch_assoc($result);
		$_SESSION['login_user'] = $row['Uid'];
		echo '<script> alert("Login success"); window.location.href = "userhome.php" </script>';
		}
 else
	 {
		echo '<script> alert("Login failed");</script>';
	 }
 }

?>



<div align="center">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: "Verdana", Helvetica, sans-serif;}
form {border: 2px solid black;
  /* background-color:#bed5db ;} */
}
input[type=text], input[type=password] {
 
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #1ABC9C;
  color: white;
   padding: 10px 20px;
  margin: 4px 2px;
  border: none;
  cursor: pointer;
   text-align: center;
    text-decoration: none;
	  display: inline-block;
	   margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}


button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: "10";
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #1ABC9C;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}
p  {
  color: white;
  font-family: "Verdana", serif;
  font-size: 130%;
   
}
body{
	background: rgba(0,0,0,0.7) url("https://s3media.freemalaysiatoday.com/wp-content/uploads/2021/09/handymen.jpg");
background-repeat:no-repeat;
background-size: cover;
background-position-x: center;
background-blend-mode:darken;
color: white;
  font-family: "Verdana", serif;
  font-size: 100%;
}
</style>

	<form action="" name="login_form" id="login_form"  method="post">
	<div class="imgcontainer">
    
  </div>

  <div class="container">
   <table class="displaycontent" width="500" height="120">
  	<tr>
    <td><label for="uname"><b>USERNAME</b></label></td>
  <td> <input type="text" placeholder="Enter Username" name="email_id" required></td>
		</tr>

	<tr>
	<td>
    <label for="psw"><b>PASSWORD</b></label></td>
   <td> <input type="password" placeholder="Enter Password" name="password" required></td>
		</tr>
		  </table>
        <br>
        
    <input type="submit" name="login" value="Login" style="color: #000000"/><br>
    <br>
 <u><a href="register.php">SIGN UP</a></u>
  </div>

  




	</form>

<br>
<?php include("footer.php")?>

</div>
</div>
