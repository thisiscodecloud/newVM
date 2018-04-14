<?php
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
      CREATE TABLE CIHAZ_VERITABANI
      (
      ID INT PRIMARY KEY     NOT NULL,
      IL              TEXT    NOT NULL,
      ILCE           TEXT    NOT NULL,
      SOKAK             TEXT     NOT NULL
      );
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   
   $sql =<<<EOF
      INSERT INTO CIHAZ_VERITABANI (ID,IL,ILCE,SOKAK)
      VALUES (1, 'İSTANBUL', 'KURTKÖY', 'BAKÜ CADDESİ' );

EOF;
   

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }   
   
   
   $db->close();
?>