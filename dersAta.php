

<?php
 $mysqli= new MySQli('localhost','root','','ogrenciderskayit');

 mysqli_character_set_name($mysqli);
 mysqli_set_charset($mysqli,"utf8");
 ?>

<?php include ("dbBaglanti.php"); ?>
<?php
$db=new dbBaglanti();
$sorgu=$vt->prepare('SELECT * FROM dersatama ORDER BY dersId DESC');

$sorgu->execute();

$personellist=$sorgu-> fetchAll(PDO::FETCH_OBJ);//object olarak verilerimizi çekiyoruz.

?>


<?php
 

$sorgu->execute();
$personellist=$sorgu-> fetchAll(PDO::FETCH_OBJ);//object olarak verilerimizi çekiyoruz.

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

                                         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>

            <script type="text/javascript">
        $(document).ready(function() {
            $('#ogrNo').keyup(function() {
                var sogrNo = $(this).val();
				//alert(sogrNo);
                var data_String = 'sogrNo=' + sogrNo;
                $.get('ogrenciAra.php', data_String, function(result) {

                    $.each(result, function(){
                        $('#ogrNo').val(this.ogrNo);
                        $('#ogrAd').val(this.ogrAd);
                        $('#ogrSoyad').val(this.ogrSoyad);
                        $('#ogrFakulte').val(this.ogrFakulte);
						            $('#ogrBolum').val(this.ogrBolum);
						                                   
                    }); 
                });
            });
        });
    </script>
 
        </head>

        <style>
          
.buttonListe {
  background-color: ##333;
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
	  background-color: #757575;    
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
                        <form class="form-group" action="dersAtamaEkle.php" method="post">
                                <!-- İlk satırım -->
                                
                                  <br> 
                                
                                <label> Ders Kodu : </label>
                                    <input type="text" name="dersKodu" class="form-control" placeholder="  " required>
                                
                                    <br> 
                                     
                                <label for="ogrNo"> Öğrenci No :  </label>
                                    <input type="text" name="ogrNo" id="ogrNo" class="form-control" placeholder="   ">
                                    
                                    <br>

                                <label for="ogrAd"> Öğrenci Ad :  </label>
                                    <input type="text" name="ogrAd" id="ogrAd" class="form-control" placeholder="   " readonly>
                                    
                                    <br>
                                <label for="ogrSoyad"> Öğrenci Soyad :  </label>
                                    <input type="text" name="ogrSoyad" id="ogrSoyad"  class="form-control" placeholder="   " readonly>
                                    
                                    <br>

                                    <label for="ogrFakulte"> Fakülte:  </label>
                                    <input type="text" name="ogrFakulte" id="ogrFakulte"  class="form-control" placeholder="   " readonly>
                                    
                                    <br>

                                <label for="ogrBolum"> Bölüm :  </label>
                                    <input type="text" name="ogrBolum" id="ogrBolum" class="form-control" placeholder="   " readonly>
                                    
                                    <br>

                                <label> Ders :  </label>
                                    <input type="text" name="ogrDers" class="form-control" placeholder="   " required>
                                    
                                    <br>

                                    <input type="submit" name="submit" value="EKLE" class="btn btn-primary btn-block btn-lg">
                            </from>                         
                            </div>
                               
 

		 <table class="content-table">    <!--table table-bordered table-striped table-dark  -->
     <thead>
         <br>

			<tr>
            
			 <th>ID</td>&emsp;
       <th>Ders Kodu</td> &emsp;
       <th>Öğrenci No</td> &emsp;
			 <th>Öğrenci Ad</td>&emsp;
			 <th>Soyad</td>&emsp; 
			 <th>FAKÜLTE</td>&emsp;
			 <th>BÖLÜM</td> &emsp;
       <th>DERS</td> &emsp;
       <th>İŞLEMLER</td> &emsp;
			 
			  
			 </tr>
			 

			 </thead>
       </tbody>
			 <?php 
			 foreach($personellist as $person){?>
			 
			 	<tr>
				 <th><?= $person->dersId ?></td>
         <th><?= $person->dersKodu ?></td>	
				 <th><?= $person->ogrNo ?></td>				 
				 <th><?= $person->ogrAd ?></td>
			 	<th><?= $person->ogrSoyad  ?></td>
				 <th><?= $person->ogrFakulte ?></td>
				 <th><?= $person->ogrBolum ?></td>
         <th><?= $person->ogrDers ?></td>

         <td><a href="update.php?dersId=<?= $person->dersId ?>" onclick="return confirm('Kaydı güncellemek istediğinize eminmisiniz?')">GÜNCELLE </a><br></br><a href="delete.php?dersIdSil=<?= $person->dersId ?>" onclick="return confirm('Kaydı silmek istediğinize eminmisiniz?')"> SİL </a> </td>
              
			    </tr>             
			
			 <?php } ?>
             
        </tbody>
			</table>   

      <input type="submit" name="listeSayfasi" class="button" value="geri" onClick="location.href='index.php'">>
	 
    </form>
            

                        </div>                    
            </div>    
            
            </div>



        </body>

    </html>


