<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "Testas12"; /* Password */
$dbname = "projektas_1"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}