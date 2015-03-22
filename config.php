<?php

// To startup HRMASTER it is obligatory to:
// 1. download the latest version in a package from: 
// 2. unzip the package
// 3. place the package on the server - PHP version used 5.5
// 4. create own database, user and password
// 5. Fill in the following informations:

//Database host:
$dbHost = "localhost";

//Database name:
$dbName = "13574007_02";

//Database user's name (it is highly reccomended not using root!):
$dbUser = "13574007_02";

//Database user's password:
$dbPass = "Zwierzaki2015";

global $connection;

try {
    $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection established";
    require_once 'database.php';     
} catch (Exception $ex) {
    echo "Connection failed : <br/>" . $ex->getMessage();
}

