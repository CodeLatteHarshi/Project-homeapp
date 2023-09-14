
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



<h2>PAYMENT DETAILS</h2>
<br>
<br>
<table>

	<!-- <table border="2" cellspacing="6" class="displaycontent" width="1200" height="220" style="border: 5px; solid grey;" align="center"> -->
	<tr>
	    
			<th>Payment Id</font></th>
			<th >Service Id</font></th>
			<th >User id</font></th>
			<th >Electronics</font></th>
				<th >Amount</font></th>
				<th >Date</font></th>
					
			
			
			  
	</tr>
	
	<?php
	
	$query = "select * from payment";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td ><?php echo $row['id']; ?></font></td>
		<td ><?php echo $row['Serviceid']; ?></font></td>
		<td ><?php echo $row['Uid']; ?></font></td>
		<td ><?php echo $row['Electronics']; ?></font></td>
		<td ><?php echo $row['Amount']; ?></font></td>
		<td ><?php echo $row['Pdate']; ?></font></td>
	
		
		
	</tr>
	<?php }  ?>
	
	</table>
	<br>
	</form>
</div>



<?php

include('footer.php');
?>
 

