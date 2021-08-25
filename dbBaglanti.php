<?php

class dbBaglanti
{ 
    protected static $db;

    //veritabanına bağlanan fonksiyon
    public function __construct()
    {
        try{
            self::$db = new PDO("mysql:localhost;dbname=ogrenciderskayit;charset=utf8", "root", "");
          
        }
        catch (PDOException $exception)
        {
            print $exception->getMessage();
        }
    }


}


?>


<?php //PDO bağlantısı için vt_ayar.php.

try{
	$host='localhost'; 
	$vtadi='ogrenciderskayit';// veritabanı adı
	$kullanici='root';
	$sifre='';

 
	$vt=new PDO("mysql:host=$host;dbname=$vtadi;charset=UTF8","$kullanici",$sifre);
	$vt->exec("SET NAMES 'utf8';SET CHARSET 'utf8'");
	//mysqli_character_set_name($vt);
    //mysqli_set_charset($vt,"utf8");
}
catch(PDOException $e){ 
	print $e->getMessage();  
} //bu dosyayı bağlantı kuracağımız her sayfa için include edeceğiz.  



?> 
