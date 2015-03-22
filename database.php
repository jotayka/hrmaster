<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$table1 = "hrUsers";
$columns1 = "ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY, surname VARCHAR(200 NOT NULL), name VARCHAR( 250 ) NOT NULL,
 email VARCHAR( 150 ) NOT NULL" ;


$createTable = $connection->exec("CREATE TABLE IF NOT EXISTS mydb.$table1 ($columns1)");

if ($createTable) 
{
    echo "Table $table1 - Created!<br /><br />";
}
else { echo "Table $table1 not successfully created! <br /><br />";
}