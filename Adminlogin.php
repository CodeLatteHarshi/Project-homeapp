<?php
  include_once("header.php"); 
 if(isset($_POST['login']))
 {
	 echo '<script> alert("Login Failed");</script>';
	if($_POST['uid']=="Admin1" && $_POST['password']=="1234")
	 {
		
	 header("location:adminhome.php");

	 }
	 else
	 {
	 	 	echo '<script> alert("Login Failed");</script>';
	 }
 }
 
?>


<div align="center">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



body {font-family: "verdana", Times, serif;}
form
 {
  border: 2px solid black;
  /* background-color:#bed5db ; */
}

input[type=text], input[type=password] {
 
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #1ABC9C;
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
  align-items:center;
  justify-content: center;
}

img.avatar {
  width: "10";
  border-radius: 50%;
}

.container {
  padding: 16px;
  
  align-items:center;
  justify-content: center;
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
  padding: 15px 42px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  text-align: center;
  display: inline-block;
border-radius: 16px;
}
</style>



<style>
h1 {
  color: #1ABC9C;
  font-family: "Verdana";
  font-size: 300%;

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
background-blend-mode:darken;}

</style>

<style>
.textbox {
	border: 1px solid #848484;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
	outline:0;
	height:25px;
	width: 275px;
	padding-left:10px;
	padding-right:10px;
}
</style>


	<form action="" name="login_form" id="login_form"  method="post">
	<div class="imgcontainer">
  
  </div>

  <div class="container">
  <h1>ADMIN LOGIN</h1>
  <br>
  <table class="displaycontent" width="400" height="120">
  	<tr>
    <td><label for="uname"><p>Username</p></label></td>
  <td> <input type="text" placeholder="Enter Username" name="uid" required ></td>
		</tr>

	<tr>
	<td>
    <label for="psw"><p>Password</p></label></td>
   <td> <input type="password" placeholder="Enter Password" name="password" required ></td>
		</tr>
		  </table>
        <br>
    <input type="submit" name="login" value="Login" style="color: #000000"/>
 
  </div>


	</form>




</div>

<?php include("footer.php")?>