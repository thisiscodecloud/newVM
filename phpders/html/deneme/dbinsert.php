<?php
$il = strtoupper($_POST["cihazbul_il"]);
$ilce = strtoupper($_POST["cihazbul_ilce"]);
$sokak = strtoupper($_POST["cihazbul_sokak"]);
$rand_id = rand(1, 10000000);
echo "ID : ". $rand_id ."<br>";
echo "IL : ". $il ."<br>";
echo "ILCE : ". $ilce ."<br>";
echo "SOKAK : ". $sokak ."<br>";

echo "Teşekkürler..";

class MyDB extends SQLite3 {
      function __construct() {
         $this->open('haritacihazveritabani.db');
      }
   }
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
   
   $sql =<<<EOF

      INSERT INTO CIHAZ_VERITABANI (ID,IL NOT NULL,ILCE,SOKAK)
      VALUES ( '$rand_id', '$il', '$ilce', '$sokak' );

EOF;
   

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }   
   
   
   $db->close();   

?>