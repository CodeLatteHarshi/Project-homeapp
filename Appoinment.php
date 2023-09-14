
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
<h2> SELECT SERVICE ENGINEER</h2>
<br>
	<center >
	</table>
	
	<br>
<br>
	<table border="0" cellspacing="4" cellspadding="4"  bgcolor="Orange" class="displaycontent"  width="400" height="200">
	<caption> *    Please select the correct Engineer ID*</caption>

	<tr>
		<td class="col"><b>ID</b></td>
		<td><input type="text" name="Uid" value="<?php echo $row['id']; ?>" class="required email"  /></td>
	</tr>
	
		<tr>
		<td class="col"><b>Service Engineer ID</b></td>
		<td><select name="sid" onchange="getUserInfo(this.value)" > 
	<option><strong>--SELECT--</strong></option> 
<?php $a = array() ;
	  $a['Empid'] = '';
	  	 $goods_query=mysql_query("select * from Employee") or die(mysql_error());
                                while($fetch_goods_id=mysql_fetch_array($goods_query))
                                {
                                  echo '<option value="'.$fetch_goods_id['Empid'].'">';;
                                    echo $fetch_goods_id['Empid'].'<br/>'; 
                                    echo ' </option>';
									if(isset($_GET['Empid']) && $_GET['Empid']==$fetch_goods_id['Empid']){
									  $a = $fetch_goods_id;
									  
									
									}
								}

?> 
</select></td>
	</tr>
	<tr>
		<td class="col"><b>Date</b></td>
		<td><input type="text" name="datepicker" id="datepicker" value="" class="required email"  /></td>
	</tr>
	

	
		
	
	</table>
	<input type="submit" name="register" value="CONFIRM" />
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
	</form>
</div>
    </div>
</div>


<?php
 
 
if(isset($_POST['register'])){

		 $query ="select Empname,Mob from employee where Empid='".$_POST['sid']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
		{
	$row = mysql_fetch_assoc($result);
		$sname = $row['Empname'];
		$mob=$row['Mob'];
		}

	$query = "update servicerequest set Adate='".$_POST['datepicker']."',Empid='".$_POST['sid']."',Serviceeng='$sname',Mobile='$mob' where id='".$_POST['Uid']."'";
	echo $query;
         
	if(mysql_query($query)){
		echo 'REGISTERD SUCCESSFULLY';

	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Viewservicerequest.php");
	exit;
//}
 }

?>

<?php
include('footer.php');
?>
 

