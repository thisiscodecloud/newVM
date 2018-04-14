<?php
   
   $il = strtoupper($_POST["cihazbul_il"]);
   $ilce = strtoupper($_POST["cihazbul_ilce"]);
   $sokak = strtoupper($_POST["cihazbul_sokak"]);

echo "IL : ". ($il) ."<br>";
echo "ILCE : ". ($ilce) ."<br>";
echo "SOKAK : ". ($sokak) ."<br>";

  class MyDB extends SQLite3 {
      function __construct() {
         $this->open('haritacihazveritabani.db');
      }
   }
   
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully <br><br>";
   }

$sql =<<<EOF
   SELECT * from CIHAZ_VERITABANI where IL='$il' OR ILCE='$ilce' OR SOKAK='$sokak';
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      echo "ID = ". $row['ID'] . "<br>";
      echo "IL = ". $row['IL'] ."<br>";
      echo "ILCE = ". $row['ILCE'] ."<br>";
      echo "SOKAK = ".$row['SOKAK'] ."<br><br>";
   }
   echo "Operation done successfully"."<br>";
   $db->close();
?>