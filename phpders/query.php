<?php
  class MyDB extends SQLite3 {
      function __construct() {
         $this->open('ailekutuk.db');
      }
   }
   
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully <br><br>";
   }

   $sql =<<<EOF
      SELECT * from AILEKUTUK;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      echo "ID = ". $row['ID'] . "<br>";
      echo "AD = ". $row['AD'] ."<br>";
      echo "SOYAD = ". $row['SOYAD'] ."<br>";
      echo "YAS = ".$row['YAS'] ."<br><br>";
   }
   echo "Operation done successfully"."<br>";
   $db->close();
?>