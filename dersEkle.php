<?php
 $mysqli= new MySQli('localhost','root','','ogrenciderskayit');

 mysqli_character_set_name($mysqli);
 mysqli_set_charset($mysqli,"utf8");
 ?>

<?php include ("dbBaglanti.php"); ?>
<?php
$db=new dbBaglanti();
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
                        <h1 class="text-center"> YENİ DERS EKLEME </h1>
                        <button class="button button2" onClick="location.href='index.php'" >geri</button> 
                            <form class="form-group" action="dersleriEkle.php" method="post">
                                <!-- İlk satırım -->
                                
                                  <br> 
                                
                                <label> Ders Kodu : </label>
                                    <input type="text" name="dersKodu" class="form-control" placeholder="  ">
                                
                                    <br> 
                                     
                                <label> Ders Adı :  </label>
                                    <input type="text" name="dersAdi" class="form-control" placeholder="   ">
                                    
                                    <br>

                                <div class="row">
                                    <div class="col-lg-4">
                                      <label> Ders Kredisi :  </label>
                                          <input type="text" name="dersKredi" class="form-control" pattern="\d" title="Ders kredisi sadece sayısal değerler içermelidir!" placeholder="   ">
                                     </div> 
                                </div>    
                                    <br>

                                    <input type="submit" name="submit" value="EKLE" class="btn btn-primary btn-block btn-lg">
                            </from>
                            
                            </div>
                                
                        </div>                    
            
            
            </div>



        </body>

    </html>


