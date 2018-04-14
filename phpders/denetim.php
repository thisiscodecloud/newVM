<?php
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$yas = $_POST["yas"];
$rand_id = rand(1, 10000000);
echo "ID : ". $rand_id ."<br>";
echo "AD : ". $ad ."<br>";
echo "SOYAD : ". $soyad ."<br>";
echo "YAŞ : ". $yas ."<br>";

echo "Teşekkürler..";

class MyDB extends SQLite3 {
      function __construct() {
         $this->open('ailekutuk.db');
      }
   }
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
   
   $sql =<<<EOF

      INSERT INTO AILEKUTUK (ID,AD,SOYAD,YAS)
      VALUES ( '$rand_id', '$ad', '$soyad', '$yas' );

EOF;
   

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }   
   
   
   $db->close();   

?>