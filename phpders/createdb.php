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
      echo "Opened database successfully\n";
   }
   
   $sql =<<<EOF
      CREATE TABLE AILEKUTUK
      (
      ID INT PRIMARY KEY     NOT NULL,
      AD              TEXT    NOT NULL,
      SOYAD           TEXT    NOT NULL,
      YAS             INT     NOT NULL
      );
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   
   $sql =<<<EOF
      INSERT INTO AILEKUTUK (ID,AD,SOYAD,YAS)
      VALUES (1, 'Haktan', 'Demirbukuz', 32 );

EOF;
   

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }   
   
   
   $db->close();
?>