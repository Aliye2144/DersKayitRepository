<?php
 $mysqli= new MySQli('localhost','root','','ogrenciderskayit');

 mysqli_character_set_name($mysqli);
 mysqli_set_charset($mysqli,"utf8");
 ?>

<?php include ("dbBaglanti.php"); ?>

<DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

            <title> ÖĞRENCİ EKLE </title>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

            <link rel="stylesheet" type="text/css" href="css/style.css" />

        </head>

        <style>
          
.buttonListe {
  background-color: #9DC45F;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-border-radius: 5px;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #FFF;
    text-shadow: 1px 1px 1px #949494;
}

  .content-table {
	  border-collapse: collapse;
	  margin: 25px 0;
	  font-size: 0.9em;
	  min-width: 400px;
	  border-radius: 5px 5px 0 0;
	  overflow: hidden;
	  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	}
	
	.content-table thead tr {
	  background-color: #80A24A;
	  color: #ffffff;
	  text-align: center;
	  font-weight: bold;
	}
	
	.content-table th,
	.content-table td {
	  padding: 12px 15px;
	}
	
	.content-table tbody tr {
	  border-bottom: 1px solid #dddddd;
	}
	
	.content-table tbody tr:nth-of-type(even) {
	  background-color: #f3f3f3;
	}
	
	.content-table tbody tr:last-of-type {
	  border-bottom: 2px solid #009879;
	}
	
	.content-table tbody tr.active-row {
	  font-weight: bold;
	  color: #009879;
	}

  </style>
        <body> 

 

     

            <div class="">
                <div class="row">

                    <div class="col-lg-3"> </div>

                    <div class="col-lg-6">
                        <div id="ui">
                        <h1 class="text-center"> ÖĞRENCİYE DERS ATAMA</h1> 
                        <?php

$dersId = $_GET["dersId"];
$sorgu = $vt->prepare("SELECT * FROM dersatama WHERE dersId =:dersId");
$sorgu -> execute(array(":dersId"=>$dersId));
$person = $sorgu->fetch(PDO::FETCH_ASSOC);

?>

                        <form class="form-group" action="" method="post">
                                <!-- İlk satırım -->
                                
                                  <br> 
                                
                                <label> Ders Kodu : </label>
                                    <input type="text" name="dersKodu" value="<?php echo $person["dersKodu"];?>" class="form-control" placeholder="  ">
                                
                                    <br> 
                                     
                                <label> Öğrenci No :  </label>
                                    <input type="text" name="ogrNo" value="<?php echo $person["ogrNo"];?>" class="form-control" placeholder="   ">
                                    
                                    <br>

                                <label> Öğrenci Ad :  </label>
                                    <input type="text" name="ogrAd" value="<?php echo $person["ogrAd"];?>" class="form-control" placeholder="   ">
                                    
                                    <br>
                                <label> Öğrenci Soyad :  </label>
                                    <input type="text" name="ogrSoyad" value="<?php echo $person["ogrSoyad"];?>" class="form-control" placeholder="   ">
                                    
                                    <br>

                                    <label> Fakülte:  </label>
                                    <input type="text" name="ogrFakulte" value="<?php echo $person["ogrFakulte"];?>" class="form-control" placeholder="   ">
                                    
                                    <br>

                                <label> Bölüm :  </label>
                                    <input type="text" name="ogrBolum" value="<?php echo $person["ogrBolum"];?>" class="form-control" placeholder="   ">
                                    
                                    <br>

                                <label> Ders :  </label>
                                    <input type="text" name="ogrDers" value="<?php echo $person["ogrDers"];?>" class="form-control" placeholder="   ">
                                    
                                    <br>

                                    <input type="submit" name="submit" value="EKLE" class="btn btn-primary btn-block btn-lg">
                            </from>                         
                            </div>
                               
  
            

                        </div>                    
            </div>    
            
            </div>



        </body>

    </html>



    <?php
    if($_POST){
        $dersKodu=$_POST["dersKodu"];
        $ogrNo=$_POST["ogrNo"];
        $ogrAd=$_POST["ogrAd"];
        $ogrSoyad=$_POST["ogrSoyad"]; 
        $ogrFakulte=$_POST["ogrFakulte"];
        $ogrBolum=$_POST["ogrBolum"];
        $ogrDers=$_POST["ogrDers"];
      
        $guncelle = $vt -> prepare("UPDATE dersatama SET dersKodu=:dersKodu, ogrNo=:ogrNo, ogrAd=:ogrAd, ogrSoyad=:ogrSoyad, ogrFakulte=:ogrFakulte, ogrBolum=:ogrBolum, ogrDers=:ogrDers WHERE dersId=:dersId"); 
           
        $guncelle -> execute(array(":dersKodu" => $dersKodu, ":ogrNo" => $ogrNo, ":ogrAd" => $ogrAd, ":ogrSoyad" => $ogrSoyad, ":ogrFakulte" => $ogrFakulte, ":ogrBolum" => $ogrBolum, ":ogrDers" => $ogrDers, ":dersId" => $dersId));

        if($guncelle){
            echo " <h3> KAYIT GÜNCELLENDİ </h3>";

        }else{
            echo "KAYIT GÜNCELLENEMEDİ TEKRAR DENEYİNİZ!!!";
        }

        
        //$url = htmlspecialchars($_SERVER['HTTP_REFERER']);  
        //echo "<a href='$url'>önceki sayfa</a>"; 

    }

?>