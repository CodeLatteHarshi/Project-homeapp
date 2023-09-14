<html>
    <head>
    <
<body>
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
    text-shadow: 0 0 3px #E7FFAC, 0 0 5px #7743DB;
  font-family: "Times New Roman", Times, serif;
  font-size: 250%;
  font-weight: bold;
}
body{
background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQT2H1kXloCir74f9WAmVlADpR9fNbzOmapQ&usqp=CAU");
background-repeat:no-repeat;
background-size: cover;
background-position-x: center;

}
</style>
<div style="text-align:center;">
	<h1>Thank you!</h1>
	<p>Your submission has been received.</p>
	<p>This page will redirect in <span id="timer"></span>s.</p>
</div>
<script type="text/javascript">
	var count = 5;
	var redirect = "index.php";
	
	function countDown() {
		if(count >= 0){
			document.getElementById("timer").innerHTML = count--;
			setTimeout("countDown()", 1000);
		}else{
			window.location.href = redirect;
		}
	}
	countDown();
</script>
    </head>
</body>
</html>