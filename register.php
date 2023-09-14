<?php
include('header.php');
?>
<div align="center">
<script type="text/javascript">	
  $(document).ready(function(){
    $("#register_form").validate();
  });
</script>
<form action="register.php" name="register_form"  id="register_form"  method="post">
		
<h2>REGISTER</h2>
<br>
<table>
	<table border="0" cellspacing="4" cellspadding="4"   class="displaycontent"  width="500" height="500">
	<font color= "white" > <caption><center>*This information cannot be changed. Please check your credentials*</caption></font>
	<tr>
		
	<tr>
	<tr>
		<td class="col">Name</td>
		<td><input type="text" name="t1"  value="" /></td>
	</tr>

	<tr>
		<td class="col">User ID</td>
		<td><input type="text" name="t2" value="" class="required" /></td>
	</tr>

	<tr>
		<td class="col">Password</td>
		<td><input type="password" name="t3" value="" class="required" /></td>
	</tr>
	<tr>
		<td class="col">Email</td>
		<td><input type="text" name="t4" value="" class="required email"  /></td>
	</tr>
	
	
	<tr>
		<td class="col">Address</td>
		<td><input type="text" name="t5" value="" class="required"  /></td>
	</tr>

	<tr>
		<td class="col"  >Mobile</td>
		<td><input type="text" class="required" onkeypress="return numbers(event);" name="t6" value="" /></td>
	</tr>
	

	<tr>
		<td>&nbsp;</td>
		<td >
		<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #a9ebb3;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  border radius :20px;
  margin: 4px 2px;
  cursor: pointer;
}
table{
	top:100%;}
	tr,td,th{
		color:white
	}

h2 {
  text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
  font-family: "Times New Roman", Times, serif;
  font-size: 300%;
  font-weight: bold;
  color:white;
  
}
body{

background: rgba(0,0,0,0.7) url("https://s3media.freemalaysiatoday.com/wp-content/uploads/2021/09/handymen.jpg");
background-repeat:no-repeat;
background-size: cover;
background-position-x: center;
background-blend-mode:darken;}
</style>
			<input type="submit" name="register" value="Register" />

		     	<input type="Reset"  value="Reset" />
		</td>
	</tr>

	
		
	
	</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">BACK</a>
	</form>
</div>


<?php
 include_once("config.php");  
 if(isset($_POST['register'])){
	 if($_POST['t1']=="" || $_POST['t2']=="" || $_POST['t3']=="" || $_POST['t4']=="" || $_POST['t5']=="" || $_POST['t6']=="" )
	 {
		 echo '<script> alert("PLEASE FILL THE FORM");</script>';
	 }
	 else
	 {
	$query = "INSERT INTO `tab_user` VALUES ('".$_POST['t1']."', '".$_POST['t2']."', '".$_POST['t3']."', '".$_POST['t4']."', '";
	$query .=  $_POST['t5']."', '";
	$query .= $_POST['t6']."')";
        echo '<script> alert("REGISTERD SUCCESSFULLY");</script>';
//	echo $query;exit;
   
	if(mysql_query($query)){
		echo 'REGISTERD SUCCESSFULLY';

	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:login.php");
	exit;
 }
 }

?>

<?php
include('footer.php');
?>
 

