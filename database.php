<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$table1 = "HRUSERS";
$sql ="CREATE table HRUSERS(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     NAZWISKO VARCHAR( 50 ) NOT NULL, 
     IMIE VARCHAR( 250 ) NOT NULL,
     LOGIN VARCHAR ( 250 ) NOT NULL,
     PASSWORD VARCHAR ( 250 ) NOT NULL,
     EMAIL VARCHAR( 250 ) NOT NULL,
     TELEFON INT,
     ODDZIAL VARCHAR ( 250 ) NOT NULL,
     CZAS TIMESTAMP,
     ZABLOKOWANY VARCHAR( 25 ),
     UPRAWNIENIA TINYINT NOT NULL
     )";
     
try {
    $connection->exec($sql);
    print("<br/>Created $table1 Table.<br/>");
} catch (Exception $ex) {
    echo "Tabel " . $table1 . " not created : <br/>" . $ex->getMessage();
}
    
    
    
    
     