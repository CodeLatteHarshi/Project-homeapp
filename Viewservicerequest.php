
<?php
include('Adminheader.php');
include_once("config.php");  
?>


<div align="center">




<form action="" name="register"  id="register" method="post">
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color:#f2f2f2 ;
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
  top:10px;
  
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



<h2><b>REQUEST DETAILS</h2></b>
<br>
<br>
<table>
	<!-- <table border="2" cellspacing="6" class="displaycontent" width="1300" height="220" style="border:5px solid grey;" align="center"> -->
	

			<th >Id</th>
			<th >User Id</th>
			<th >Electronics</th>
			<th >Brand</th>
			<th >Problem</th>
			<th >Request Date</th>
			<th >Appoinment Date</th>
			<th >Employee id</th>
			<th >Service engineer</th>
			<th>Mobile</th>
			<th>Select</td>
			<th>Status</td>
			  
	
	<?php
	
	$query = "select * from servicerequest";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td ><?php echo $row['id']; ?></font></td>
		<td><?php echo $row['Uid']; ?></font></td>
		<td ><?php echo $row['Electronics']; ?></font></td>
		<td><?php echo $row['Brand']; ?></font></td>
		<td ><?php echo $row['Problem']; ?></font></td>
		<td ><?php echo $row['Rdate']; ?></font></td>
		<td ><?php echo $row['Adate']; ?></font></td>
		<td ><?php echo $row['Empid']; ?></font></td>
			<td ><?php echo $row['Serviceeng']; ?></font></td>
				<td><?php echo $row['Mobile']; ?></font></td>
		<td ><a href="Appoinment.php?select=<?php echo $row['id'];?>">Allocate</a></font></td>
		<td ><a href="Status.php?select=<?php echo $row['id'];?>">Status</a></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>
	<br>
	</form>
</div>



<?php


include('footer.php');
?>
 

