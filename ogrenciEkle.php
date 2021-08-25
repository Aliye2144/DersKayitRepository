<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ogrenciderskayit";

$connect = mysqli_connect($servername,$username,$password,$dbname);
 
 $sorguFakulte= "SELECT DISTINCT ogrFakulte FROM fakultebolum";
 $sorguBolum= "SELECT DISTINCT ogrBolum FROM fakultebolum";

 $sonuc1=mysqli_query($connect,$sorguFakulte);

 $sonuc2=mysqli_query($connect,$sorguFakulte);
 $sonuc3=mysqli_query($connect,$sorguBolum);

 $options="";
 $options2="";
 while($row2=mysqli_fetch_array($sonuc2))
 {
     $options=$options."<option>$row2[0]</option>";
 }

 while($row3=mysqli_fetch_array($sonuc3))
 {
     $options2=$options2."<option>$row3[0]</option>";
 }


 
 ?>

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
         
        <body> 
       

                                
    <div class="container">
        <div class="row">

            <div class="col-lg-3"> </div>

                <div class="col-lg-6">
                    
                    <div id="ui">
                    
                        <h1> YENİ ÖĞRENCİ EKLEME </h1>
                        <button class="button button2" onClick="location.href='index.php'" >geri</button> 
                            <form class="form-group" action="test.php" method="post">
                                <!-- İlk satırım -->
                                
                                  <br> 
                                    <label> Öğrenci No </label>
                                    <input type="text" name="ogrNo" class="form-control" placeholder="  ">
                                    
                                <div class="row">
                                      <br>
                                        <div class="col-lg-6">
                                            <label> Öğrenci Adı </label>
                                            <input type="text" name="ogrAd" class="form-control" placeholder="  ">
                                        </div>   
                                    
                                        <div class="col-lg-6">
                                            <label> Öğrenci Soyadı </label>
                                            <input type="text" name="ogrSoyad" class="form-control" placeholder="  ">
                                        </div>
                                </div>

                                <label> E-Mail </label>
                                    <input type="text" name="email" class="form-control" placeholder=" E-Mail ">
                                    
                                    <br>
                                <div class="col-lg-6"> 
                                <select for="ogrFakulte" class="form-control" name="ogrFakulte" id="ogrFakulte">
                                <option>Fakülte Seçiniz </option>
                                <?php echo $options;?> 
                                </select>
                                </div>
                               
                                <div class="col-lg-6"> 
                                <select for="ogrBolum" class="form-control" name="ogrBolum" id="ogrBolum">
                                <option>Bölüm Seçiniz </option>
                                <?php echo $options2;?> 
                                </select>
                                </div>

                                <br><br><br>
                                <input type="submit" name="btnEkle" value="EKLE" class="btn btn-primary btn-block btn-lg">
                                </div>
                            </from>
                             
                    </div>  
                    
                </div>           

            </div>
                            
        </div>                    
                       
                
    </div>
    

           
         

        </body>

    </html>


