<?php 
$servername="localhost";
$username="id6761805_danish";
$password="786012";
$DBname="id6761805_danish";
$conn=new mysqli($servername,$username,$password,$DBname);

if ($conn->connect_error)
{
	echo "connection error";
}


else
{
   $sql="SELECT temp,gas FROM Bittu";
    
   $value = $conn->query($sql);
   $row = $value->fetch_assoc();
 
}

?>

<html>
<head>
<meta http-equiv="refresh" content="30">

	<title>AIR FILTERING</title>
</head>

<body style="background-color: #7F00FF">

<center><h1 style="color:orange">AIR FILTERING</h1></center>
<hr>
<h2 style="color:black">Temp= <?php echo $row['temp'] ?></h2>

<h3 style="color:red">Gas= <?php echo $row['gas'] ?></h3>
<hr>


</body>
</html>