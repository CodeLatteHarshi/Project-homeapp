<?php
error_reporting(0);
include('Userheader.php');
include('config.php');
if(isset($_GET['select'])){

$query2 = "select * from status where id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}
//echo $query2;
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/theme.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

<div align="center">

<script type="text/javascript">	
  $(document).ready(function(){
    $("#Allocatetomanager").validate();
  });
</script>
<div class="content">
    <div class="content_resize">

    
<form action="" name="Orderupdate_form" id="Orderupdate_form"   method="post">
<br>
<div align="center">

<h2> PAYMENT PORTAL</h2>
	<center >
	

	<br>
<br>
	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="500" height="500">
	
	<caption><center>*This page contains personal information*</caption>
	<br>
	<br>
	<tr>
		<td class="col"><b>ID</b></td>
		<td><input type="text" name="t1" value="<?php echo $row['Serviceid']; ?>" class="required email"  /></td>
	</tr>
	
		<tr>
		<td class="col"><b>User id</b></td>
		<td><input type="text" name="t2" value="<?php echo $row['Uid']; ?>" class="required email"  /></td>
	</tr>
		<tr>
		<td class="col"><b>Electronics</b></td>
		<td><input type="text" name="t3" value="<?php echo $row['Electronics']; ?>" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col"><b>Amount</b></td>
		<td><input type="text" name="t4" value="<?php echo $row['Amt']; ?>" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col"><b>Date</b></td>
		<td><input type="text" name="t5" id="t5" value="<?php echo date('d/m/y'); ?>" class="required email"  /></td>
	</tr>
	
		
	
	</table>
	
		<!-- <input type="submit" name="register" value="PAY NOW" /> -->
		</div>
    <div id="paypal-payment-button" style="width:30%"></div>
</div>
		<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #1ABC9C;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
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
</style>
</div>
    </div>
</div>
</form>

<?php
 
 
if(isset($_POST['register'])){

		

	$query = "insert into payment values('null','".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4']."','".$_POST['t5']."','".$_POST['t6']."')";
	echo $query;
         
	if(mysql_query($query)){
		echo 'Paid successfully';

	}
	else{
		echo 'Payment failed';
	}
	header("location:Viewstatus1.php");
	exit;
//}
 }

?>
<script src="https://www.paypal.com/sdk/js?client-id=AbOm8YZ9bpjApp9rLx1AbtilYE37lLyUkPt8WYKhrg3xOWISvLL0Re-jUE5J_Mk6q2mTy4wZQyWrEDiT&disable-funding=credit,card"></script>
<script src="paypal.js">
    
</script>

<?php
include('footer.php');
?>