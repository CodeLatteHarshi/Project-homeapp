<?php
error_reporting(0);
include('Adminheader.php');
include('config.php');
if(isset($_GET['select'])){

$query2 = "select * from servicerequest where id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}
//echo $query2;
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
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
<br>
<br>
<h2> STATUS  </h2>
<br>
	<center >
	</table>
	
	<br>
<br>
	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="500" height="500">
	<caption></caption>

	<tr>
		<td class="col"><b>ID</b></td>
		<td><input type="text" name="t1" value="<?php echo $row['id']; ?>" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col"><b>User ID</b></td>
		<td><input type="text" name="t2" value="<?php echo $row['Uid']; ?>" class="required email"  /></td>
	</tr>
		<tr>
		<td class="col"><b>Electronics</b></td>
		<td><input type="text" name="t3" value="<?php echo $row['Electronics']; ?>" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col"><b>Brand</b></td>
		<td><input type="text" name="t4" value="<?php echo $row['Brand']; ?>" class="required email"  /></td>
	</tr>
	
<tr>
		<td class="col"><b>Status</b></td>
		<td><input type="text" name="t5" value="" class="required email"  /></td>
	</tr>
	
		<tr>
		<td class="col"><b>Date</b></td>
		<td><input type="text" name="datepicker" id="datepicker" value="" class="required email"  /></td>
	</tr> 
	<tr>
		<td class="col"><b>Service Engineer</b></td>
		<td><input type="text" name="t6" value="<?php echo $row['Serviceeng']; ?>" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col"><b>Amount to be paid</b></td>
		<td><input type="text" name="t7" value="" class="required email"  /></td>
	</tr>
	</table>
	<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #1ABC9C;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  border-radius :20px;
  margin: 4px 2px;
  cursor: pointer;
}
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
	<input type="submit" name="register" value="Add" />
	</form>
</div>
    </div>
</div>


<?php
 
 
if(isset($_POST['register'])){

	 if($_POST['t1']=="" || $_POST['t2']=="" || $_POST['t3']=="" || $_POST['t4']=="" || $_POST['t5']=="" || $_POST['t6']=="" || $_POST['t7']=="" )
	 {
		 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
	 }
	 else
	 {
	$query = "INSERT INTO `status` VALUES ('null','".$_POST['t1']."', '".$_POST['t2']."', '".$_POST['t3']."', '".$_POST['t4']."', '";
	$query .=  $_POST['t5']."','".$_POST['datepicker']."','".$_POST['t6']."', '".$_POST['t7']."')";
       // echo '<script> alert("PREGISTERD SUCCESSFULLY");</script>';
	//echo $query;
	//exit;
   
	if(mysql_query($query)){
		echo 'REGISTERD SUCCESSFULLY';

	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Viewservicerequest.php");
	//exit;
 }

 }

?>

<?php
include('footer.php');
?>
 

