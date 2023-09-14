<?php 
	
	include_once("Adminheader.php");
?>	

<html>
    <body>
        <div class="center">
   <h1><center> <p id="demo"></p>

</div>
<script>
const time = new Date().getHours();
let greeting;
if (time < 10) {
  greeting = "GOOD MORNING!!";
} else if (time < 16) {
  greeting = "GOOD NOON!!";
} else {
  greeting = "GOOD EVENING!!";
}
document.getElementById("demo").innerHTML = greeting;
</script>
<style>
    .center {
  margin: auto;
  
  width: 60%;
  text-align:center;
 position:absolute;
  padding: 10px;
  left:20%;
  top:50%;
}
h1 {
  text-shadow: 0 0 3px #FF0000;
}

</body>
</html>

<style>
  
h1 {
  text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
  font-family: "Times New Roman", Times, serif;
  font-size: 300%;
  font-weight: bold;
  
  
  
  
}
body {
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQT2H1kXloCir74f9WAmVlADpR9fNbzOmapQ&usqp=CAU");
background-repeat:no-repeat;
background-size: cover;
}

p  {
  
  font-family: "ARIAL", Times, serif;
  font-size: 140%;
   font-weight: bold;
   top:50%;
}



</style>
<div align=center>		
			
<h1>WELCOME ADMIN</h1>
</br>		

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</html>
<?php			
	include_once("footer.php");
?>
