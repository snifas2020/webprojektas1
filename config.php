<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "";/*"Testas12"; Password */
$dbname = "projektas_1"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

/*
JG lenteles sukurimo sql kodas:
Atsiudaryti db ir sql tabe ikelti zemiau esancia eilute. Paleisti ja paspaudus go.

CREATE TABLE `projektas_1`.`charts` ( `chartsid` INT NOT NULL AUTO_INCREMENT , `java` DECIMAL(10,2) NOT NULL , `csharp` DECIMAL(10,2) NOT NULL , `html` DECIMAL(10,2) NOT NULL , `css` DECIMAL(10,2) NOT NULL , `javascript` DECIMAL(10,2) NOT NULL , `php` DECIMAL(10,2) NOT NULL , `chartscode` TINYINT NOT NULL , PRIMARY KEY (`chartsid`)) ENGINE = InnoDB;
*/