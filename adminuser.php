
<?php
  
// Username is root
$user = 'root';
$password = ''; 
  
// Database name is gfg
$database = 'appliancesdb'; 
  
// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM tab_user";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<!DOCTYPE html>
<?php 
	
	include_once("Adminheader.php");
?>	

<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <!-- <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 2px solid black;
			width: 1000px;
            height: 500px;
        }
  
        h1 {
            text-align: center;
            color: #EBF5FB;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #EBF5FB;
            border: 2px solid black;
			color: black;
			font-style: bold;
        }
  
        th,
        td {
            font-weight: bold;
            border: 2px solid black;
            padding: 10px;
            text-align: center;
            text-shadow: 1px 1px 1px grey;
            letter-spacing: 1px;
			
        }

		 th {
			 color: black;
            font-weight: bold;
            border: 1px solid;
            padding: 10px;
            text-align: center;
			background-color: #EBF5FB ;
            text-shadow: 1px 1px 1px gold;
            letter-spacing: 1px;
        }

  
  
        td {
            font-weight: lighter;
        }
    </style> -->

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
  body{
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQT2H1kXloCir74f9WAmVlADpR9fNbzOmapQ&usqp=CAU");
background-repeat:no-repeat;
background-size: cover;
  }
</style>
</head>
  
<body>
    <section>
        <h3><b><center>USER DETAILS</h3></b>
        <br>
        <br>
        
        <table>
            <tr>
                <th>Name</th>
                <th>User Id</th>
                <th>Email id</th>
                <th>Address</th>
				 <th>Mobile</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['Uid'];?></td>
                <td><?php echo $rows['email_id'];?></td>
                <td><?php echo $rows['address'];?></td>
				<td><?php echo $rows['mobile'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>