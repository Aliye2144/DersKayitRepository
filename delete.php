<?php
 $mysqli= new MySQli('localhost','root','','ogrenciderskayit');

 mysqli_character_set_name($mysqli);
 mysqli_set_charset($mysqli,"utf8");
 ?>

<?php include ("dbBaglanti.php"); ?>


<!DOCTYPE html> 
<html>
    <head>
    <link rel="stylesheet" href="css.css">
        <meta charset="utf-8">
        <title>MİLLİ PİYANGO </title>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>



<style>
.smart-green {
	margin-left:auto;
	margin-right:auto;

    max-width: 600px;
    background: #F8F8F8;
    padding: 30px 30px 20px 30px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #666;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}
.smart-green h1 {
    font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;
    padding: 20px 0px 20px 40px;
    display: block;
    margin: -30px -30px 10px -30px;
    color: #FFF;
    background: #9DC45F;
    text-shadow: 1px 1px 1px #949494;
    border-radius: 5px 5px 0px 0px;
    -webkit-border-radius: 5px 5px 0px 0px;
    -moz-border-radius: 5px 5px 0px 0px;
    border-bottom:1px solid #89AF4C;

}
.smart-green h1>span {
    display: block;
    font-size: 11px;
    color: #FFF;
}

.smart-green label {
    display: block;
    margin: 0px 0px 5px;
}
.smart-green label>span {
    float: left;
    margin-top: 10px;
    color: #5E5E5E;
}
.smart-green input[type="text"], .smart-green input[type="email"], .smart-green textarea, .smart-green select {
    color: #555;
    height: 30px;
	line-height:15px;
    width: 100%;
    padding: 0px 0px 0px 10px;
    margin-top: 2px;
    border: 1px solid #E5E5E5;
    background: #FBFBFB;
    outline: 0;
    -webkit-box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
    box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
    font: normal 14px/14px Arial, Helvetica, sans-serif;
}
.smart-green textarea{
    height:100px;
    padding-top: 10px;
}
.smart-green select {
    background: url('down-arrow.png') no-repeat right, -moz-linear-gradient(top, #FBFBFB 0%, #E9E9E9 100%);
    background: url('down-arrow.png') no-repeat right, -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FBFBFB), color-stop(100%,#E9E9E9));
   appearance:none;
    -webkit-appearance:none; 
   -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width:100%;
    height:30px;
}
.smart-green .button {
    background-color: #9DC45F;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-border-radius: 5px;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #FFF;
    text-shadow: 1px 1px 1px #949494;
}
.smart-green .button:hover {
    background-color:#80A24A;
}
</style>


    </head>
    <body>
<?php

$dersId = $_GET["dersId"];
$sorgu = $vt->prepare("SELECT * FROM dersatama WHERE dersId =:dersId");
$sorgu -> execute(array(":dersId"=>$dersId));
$person = $sorgu->fetch(PDO::FETCH_ASSOC);

?>


</body>
</html>    

<?php 
    if($_GET){
      $dersId= $_GET["dersIdSil"];
      
      $dersIdSil = $vt -> prepare("DELETE FROM dersatama WHERE dersId=:dersId");
      $dersIdSil -> execute(array(":dersId" => $dersId));

      if($dersIdSil){
        echo "KAYIT SİLİNDİ";
        header("Refresh:0; url=dersAta.php");
      }else{
        echo "KAYIT SİLİNEMEDİ TEKRAR DENEYİNİZ";
      }
    }
    ?>
