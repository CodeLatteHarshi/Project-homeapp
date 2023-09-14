
<?php
include('Adminheader.php');
include_once("config.php");  
?>


<div align="center">




<form action="" name="register"  id="register" method="post">
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
body{
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQT2H1kXloCir74f9WAmVlADpR9fNbzOmapQ&usqp=CAU");
background-repeat:no-repeat;
background-size: cover;
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
  tr:hover {background-color: #DEBACE;}
</style>
	<br>



<h1>STATUS DETAILS</h1>
<br>
<br>
	<!-- <table border="2" cellspacing="6" class="displaycontent" width="1200" height="220" style="border: 5px;px solid grey;" align="center"> -->
	<table>
	
	    
			<th >ID</th>
			<th>Service Id</th>
			<th>User id</th>
			<th>Electronics</font></th>
			<th>Brand</font></th>
			<th>Status</font></th>
			<th>Date</font></th>
				<th >Service engineer</font></th>
				<th >Amount</font></th>
			 <th >Delete</font></td>
			
			  
	
	
	<?php
	
	$query = "select * from status";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['Serviceid']; ?></font></td>
		<td><?php echo $row['Uid']; ?></font></td>
		<td ><?php echo $row['Electronics']; ?></font></td>
		<td><?php echo $row['Brand']; ?></font></td>
		<td ><?php echo $row['Status']; ?></font></td>
		<td><?php echo $row['Sdate']; ?></font></td>
		<td ><?php echo $row['Serviceeng']; ?></font></td>
			<td ><?php echo $row['Amt']; ?></font></td>
					
		<td><a href="?delete=<?php echo $row['id'];?>">Delete</a></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>
	<br>
	</form>
</div>



<?php
if(isset($_GET['delete']))
	{
	
	$query = "delete from status where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:Viewstatus.php");
	exit;
	}

include('footer.php');
?>
 

