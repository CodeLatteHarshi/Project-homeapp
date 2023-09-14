
<?php
include('Adminheader.php');
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
  border radius :20px;
  margin: 4px 2px;
  cursor: pointer;
  left:50%;
}
h1{
	text-shadow: 0 0 3px #E7FFAC, 0 0 5px #7743DB;
  font-family: "Times New Roman", Times, serif;
  font-size: 250%;
  font-weight: bold;
}
h3{
	/* color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; */
	text-shadow: 0 0 3px #E7FFAC, 0 0 5px #7743DB;
  font-family: "Times New Roman", Times, serif;
  font-size: 250%;
  font-weight: bold;
}
body{
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQT2H1kXloCir74f9WAmVlADpR9fNbzOmapQ&usqp=CAU");
background-repeat:no-repeat;
background-size: cover;
}
</style>

	<br>

<tr>
<td>
<h3><b>NEW EMPLOYEE</h3></b>
</td>
</tr>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="500" height="500">
		
	<tr>
		<td class="col" style="color: black">Employee Id</td>
		<td><input type="text" name="t1" value=""  style="color: #000000" class="required" /></td>
	</tr>
	
	<tr>
		<td class="col" style="color: black">Employee Name</td>
		<td><input type="text" name="t2" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col" style="color: black">Address</td>
		<td><input type="text" name="t3" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	
	
	<tr>
		<td class="col"  style="color: black">Mobile</td>
		<td><input type="text" name="t4" value=""  style="color: #000000" class="required"  /></td>
	</tr>

	<tr>
		<td class="col"  style="color: black">Email id</td>
		<td><input type="text" name="t5" value=""  style="color: #000000" class="required"  /></td>
	</tr>
	
	

	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="SUBMIT"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>
<style>
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
  
</style>
<h1>EMPLOYEE DETAILS</h1>
<br>
<table>
	<!-- <table border="2" cellspacing="6" class="displaycontent" width="1200" height="220" style="border:5px solid black;" align="center"> -->
	
	    
			<th> Employee Id</font></th></center>
			<th >Name </font></th></center>
			<th >Address</font></th></center>
			<th >Mobile</font></th></center>
			<th >Email</font></th></center>
			
			 <th bgcolor=#1ABC9C><center><font color=black size=4>Delete</font></td>
			  
	
	
	<?php
	
	$query = "select * from Employee";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
	   <td bgcolor=#a9ebb3><center><font color=purple size=4><?php echo $row['Empid']; ?></font></td>
		<td bgcolor=#a9ebb3><center><font color=teal size=4><?php echo $row['Empname']; ?></font></td>
		<td bgcolor=#a9ebb3><center><font color=purple size=4><?php echo $row['Addr']; ?></font></td>
		<td bgcolor=#a9ebb3><center><font color=teal size=4><?php echo $row['Mob']; ?></font></td>
		<td bgcolor=#a9ebb3><center><font color=purple size=4><?php echo $row['Email']; ?></font></td>
			
		<td bgcolor=#a9ebb3><center><font color=#000000 size=4><a href="?delete=<?php echo $row['Empid'];?>">Delete</a></font></td>
		
	</tr>
	<?php }  ?>
		
	</table>
	<br>
	</form>
</div>


<?php



 if(isset($_POST['register']))
	 {

	
	 	         		
	$query = "INSERT INTO `Employee`"; 
	$query .= " VALUES ('".$_POST['t1']."','".$_POST['t2']."', '".$_POST['t3']."','".$_POST['t4']."', '".$_POST['t5']."')";
         
		//  echo $query;
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
header("location:Addemp.php");
//	exit;
 
 }

?>

<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from Employee where Empid='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted successfully");</script>';
	
		
header("location:Addemp.php");
	exit;
	}
include('footer.php');
?>
 

