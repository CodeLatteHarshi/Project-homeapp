<?php
include('config.php');
include('Userheader.php');
error_reporting(0);
?>

<style>
	h3 {
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
<div align=center>
</br>
</br>											
</br>		
</br>
</br>
</br>											
	</br>
<h3><b>Welcome: </b>

<b><?php  echo $_SESSION['login_user']; ?></b></h3>
</br>		
</br>		
</br>
</div>
</br>		
</br>		
</br>
</br>		
</br>		
</br>
</br>		
</br>		
</br>

<?php
include('footer.php');
?>


</div>