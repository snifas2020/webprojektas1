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
?>

<!--
JG lenteles sukurimo sql kodas:
Atsiudaryti db ir sql tabe ikelti zemiau esancia eilute. Paleisti ja paspaudus go.

CREATE TABLE `projektas_1`.`charts` ( `chartsid` INT NOT NULL AUTO_INCREMENT , `java` DECIMAL(10,2) NOT NULL , `csharp` DECIMAL(10,2) NOT NULL , `html` DECIMAL(10,2) NOT NULL , `css` DECIMAL(10,2) NOT NULL , `javascript` DECIMAL(10,2) NOT NULL , `php` DECIMAL(10,2) NOT NULL , `chartscode` TINYINT NOT NULL , PRIMARY KEY (`chartsid`)) ENGINE = InnoDB;
-->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projektas_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT round(avg(java),0) as avgjava, round(avg(csharp),0 ) as avgcsharp, round(avg(html),0) as avghtml, round(avg(css),0) as avgcss, round(avg(javascript),0) as avgjavascript, round(avg(php),0) as avgphp FROM projektas_1.charts WHERE chartsCode = 1";

$result = $conn->query($sql);

$kint = "";

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $kint = $row['avgjava'] . "," . $row['avgcsharp'] . "," . $row['avghtml'] . "," . $row['avgcss'] . "," . $row['avgjavascript'] . "," . $row['avgphp'];
    }
    //        echo $kint;
} else {
    echo "0 results";
}
// kiekio studentu suskaiciavimas:

$sql = "SELECT round(sum(java),0) as avgjava, round(sum(csharp),0 ) as avgcsharp, round(sum(html),0) as avghtml, round(sum(css),0) as avgcss, round(sum(javascript),0) as avgjavascript, round(sum(php),0) as avgphp FROM projektas_1.charts WHERE chartsCode = 1";

$result = $conn->query($sql);

$kintCount = "";

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $kintCount = $row['avgjava'] . "," . $row['avgcsharp'] . "," . $row['avghtml'] . "," . $row['avgcss'] . "," . $row['avgjavascript'] . "," . $row['avgphp'];
    }
    //        echo $kint;
} else {
    echo "0 results";
}

$conn->close();
?>
