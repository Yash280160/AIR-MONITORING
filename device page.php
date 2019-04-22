<?php

	$temp=$_GET['temp'];
    $gas=$_GET['gas'];
    

echo $temp . $gas ;
$servername="localhost";
$username="id6761805_danish";
$password="786012";
$DBname="id6761805_danish";
$conn=new mysqli($servername,$username,$password,$DBname);

if($conn->connect_error)
{
	echo "connection error";
}

else
{	$sql="UPDATE Bittu SET temp=$temp,gas=$gas";
    
    $conn->query($sql);

}

?>

