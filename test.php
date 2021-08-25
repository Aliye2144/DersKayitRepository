<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css.css">
        <meta charset="utf-8">
        <title>  dddd  </title> 

       
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

            <link rel="stylesheet" type="text/css" href="css/style.css" />


</head>
    <body>
        <html>


<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ogrenciderskayit";

$connect = new mysqli($servername,$username,$password,$dbname);

mysqli_character_set_name($connect);
 mysqli_set_charset($connect,"utf8");

if($connect->connect_error){
    die("bağlantı hatası");
}
 
    $ogrNo=$_POST["ogrNo"];
    $ogrAd=$_POST["ogrAd"];
    $ogrSoyad=$_POST["ogrSoyad"]; 
    $email=$_POST["email"]; 
    $ogrFakulte=$_POST["ogrFakulte"];
    $ogrBolum=$_POST["ogrBolum"];
   
  
    $ekle = "insert into ogrenciler(ogrNo,ogrAd,ogrSoyad,email,ogrFakulte,ogrBolum) values('$ogrNo','$ogrAd','$ogrSoyad','$email','$ogrFakulte','$ogrBolum')"; 
       

    if($connect->query($ekle)){ 
        echo"KAYIT YAPILDI"; 
       
        
    }
    else { 
        echo"KAYIT YAPILAMADI";
    
    }


?>

</body>
</html>    