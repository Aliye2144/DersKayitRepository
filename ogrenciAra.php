<?php
 
header('Content-Type: application/json');
$response = array();
if (isset($_GET['sogrNo']))
{ 
    include("dbBaglanti.php");
	$con=mysqli_connect("localhost", "root", "", "ogrenciderskayit");
	if (mysqli_connect_errno()){
		echo "Bağlanılamadı: " . mysqli_connect_error();
	}
	mysqli_character_set_name($con);
	mysqli_set_charset($con,"utf8");

	$qry = "SELECT * FROM ogrenciler WHERE ogrNo = '".$_GET['sogrNo']."' ";
	$result = mysqli_query($con, $qry);  
	while ($row = mysqli_fetch_array($result)) {
		array_push($response, $row);
    }

	echo json_encode($response); 
} 
?>


