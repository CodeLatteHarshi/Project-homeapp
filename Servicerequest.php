
<?php
include('Userheader.php');
include_once("config.php");  
?>


<div align="center">




<form action="" name="register"  id="register" method="post">
	
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #a9ebb3;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  border-radius: 8px;
  cursor: pointer;
 
}
table {
    border: 2px solid;
  width: 100%;
  top:100%;
  
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #957DAD;
  color: white;}
  tr:hover {background-color: #DEBACE ;}
  body{
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQT2H1kXloCir74f9WAmVlADpR9fNbzOmapQ&usqp=CAU");
background-repeat:no-repeat;
background-size: cover;
}
h2{
	text-shadow: 0 0 3px #E7FFAC, 0 0 5px #7743DB;
  font-family: "Times New Roman", Times, serif;
  font-size: 250%;
  font-weight: bold;
}
h3{
	text-shadow: 0 0 3px #E7FFAC, 0 0 5px #7743DB;
  font-family: "Times New Roman", Times, serif;
  font-size: 250%;
  font-weight: bold;
}
</style>
	<br>

<h2>SERVICE REQUEST</h2>
<br>
<br>


<table>

	<!-- <table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="500" height="500"> -->
		
	<tr>
		<td class="col" style="color: ">User Id  </td>
		<td><input type="text" name="t1" value="<?php  echo $_SESSION['login_user']; ?>"  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Electronics</td>
		<td><select name="s1">
    <option value="AC"> AC </option>
    <option value="TV"> TV </option>
	<option value="fan"> Fan</option>
	 <option value="Microwave Ovens"> Microwave Ovens </option>
	 <option value="Refrigerators"> Refrigerators </option>
	  <option value="Washing Machines"> Washing Machines </option>
	  <option value="Dish washer"> Dish washer </option>
</select></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Brand</td>
		<td><input type="text" name="t3" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000">Issue</td>
		<td><input type="text" name="t4" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	
	
	<tr>
		<td class="col"  style="color: #000000">Date</td>
		<td><input type="text" name="t5" value="<?php  echo date('d/m/Y', time()); ?>"  style="color: #000000" class="required"  /></td>
	</tr>

	
	

	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="SUBMIT"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>

<h3>REQUEST DETAILS</h3>
<br>


	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="220" style="border: 5px; solid gray;" align="center">
	<tr>
	    
			<th bgcolor=#1ABC9C><b><center><font color=black size=2>Id</font></th>
			<th bgcolor=#1ABC9C><b><center><font color=black size=2>User Id</font></th>
			<th bgcolor=#1ABC9C><b><center><font color=black size=2>Electronics</font></th>
			<th bgcolor=#1ABC9C><b><center><font color=black size=2>Brand</font></th>
			<th bgcolor=#1ABC9C><b><center><font color=black size=2>Issue</font></th>
			<th bgcolor=#1ABC9C><b><center><font color=black size=2>Request Date</font></th>
			<th bgcolor=#1ABC9C><b><center><font color=black size=2>Appoinment Date</font></th>
			<th bgcolor=#1ABC9C><b><center><font color=black size=2>Employee id</font></th>
			<th bgcolor=#1ABC9C><b><center><font color=black size=2>Service engineer</font></th>
				<th bgcolor=#1ABC9C><b><center><font color=black size=2>Mobile</font></th>
			 <th bgcolor=#1ABC9C><b><center><font color=black size=3>Delete</font></td>
			  
	</tr>
	
	<?php
	
	$query = "select * from servicerequest where Uid='".$_SESSION['login_user']."'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=#a9ebb3><b><center><font color=#000000 size=3><?php echo $row['id']; ?></font></td>
		<td bgcolor=#a9ebb3><b><center><font color=#000000 size=2><?php echo $row['Uid']; ?></font></td>
		<td bgcolor=#a9ebb3><b><center><font color=#000000 size=2><?php echo $row['Electronics']; ?></font></td>
		<td bgcolor=#a9ebb3><b><center><font color=#000000 size=2><?php echo $row['Brand']; ?></font></td>
		<td bgcolor=#a9ebb3><b><center><font color=#000000 size=2><?php echo $row['Problem']; ?></font></td>
		<td bgcolor=#a9ebb3><b><center><font color=#000000 size=2><?php echo $row['Rdate']; ?></font></td>
		<td bgcolor=#a9ebb3><b><center><font color=#000000 size=2><?php echo $row['Adate']; ?></font></td>
		<td bgcolor=#a9ebb3><b><center><font color=#000000 size=2><?php echo $row['Empid']; ?></font></td>
			<td bgcolor=#a9ebb3><b><center><font color=#000000 size=2><?php echo $row['Serviceeng']; ?></font></td>
			<td bgcolor=#a9ebb3><b><center><font color=#000000 size=2><?php echo $row['Mobile']; ?></font></td>
				
		<td bgcolor=#a9ebb3><b><center><font color=#000000 size=2><a href="?delete=<?php echo $row['id'];?>">Delete</a></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>
	<br>
	</form>
</div>


<?php



 if(isset($_POST['register']))
	 {

	
	 	         		
	$query = "INSERT INTO `servicerequest`"; 
	$query .= " VALUES ('null','".$_POST['t1']."','".$_POST['s1']."', '".$_POST['t3']."','".$_POST['t4']."', '".$_POST['t5']."','Pending','Pending','Pending','Pending')";
         
		//  echo $query;
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
header("location:Servicerequest.php");
//	exit;
 
 }

?>

<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from servicerequest where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:Servicerequest.php");
	exit;
	}
include('footer.php');
?>
 

