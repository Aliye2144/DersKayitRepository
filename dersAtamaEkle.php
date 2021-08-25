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
 
    $dersKodu=$_POST["dersKodu"];
    $ogrNo=$_POST["ogrNo"];
    $ogrAd=$_POST["ogrAd"];
    $ogrSoyad=$_POST["ogrSoyad"];  
    $ogrFakulte=$_POST["ogrFakulte"];
    $ogrBolum=$_POST["ogrBolum"];
    $ogrDers=$_POST["ogrDers"];
   
  
    $ekle = "insert into dersatama(dersKodu,ogrNo,ogrAd,ogrSoyad,ogrFakulte,ogrBolum,ogrDers) values('$dersKodu','$ogrNo','$ogrAd','$ogrSoyad','$ogrFakulte','$ogrBolum','$ogrDers')"; 
       

    if($connect->query($ekle)){ 
       
        header("Refresh:0; url=dersAta.php");
        
    }
    else { 
        echo"KAYIT YAPILAMADI";
    
    }


?>

</body>
</html>    