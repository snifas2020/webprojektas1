<?php include "header.php" ?>

<!-- JG chart kodo pradzia -->

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

<!-- Pabaigtas prisijungimas; -->


<div class="aboutImgTop1">
    <img src="https://picsum.photos/2000/100" alt="AboutMainPic01">
</div>

<div class="container">
    <div class="row">
    <li class="col s2"><a href="#myRadarChart">Contacts</a></li>
    <li class="col s2"><a href="#myChart">Header</a></li>
    <li class="col s2"><a href="registration.php">Registration</a></li>
    </div>
</div>


<div class="aboutCh1Center">
    <h1 class="abouth1">BestCoding school statistics</h1>

    <h2>Students response value</h2>

    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Java', 'Hours per Day'],
                ['C#', 8.5],
                ['HTML', 9.0],
                ['JavaScript', 7.8],
                ['CSS', 8.4],
                ['PHP', 7.8]
            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'Avarage of response value',
                'width': 550,
                'height': 400
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</div>

<div class="container">

    <div class="row">
        <!-- Paskutiniu grafiku i viena eilute-->

        <div class="col s6">

            <h2 class="abouth2">Students avarage per year</h2> 

            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

            <canvas id="myChart" width="200" height="100"></canvas>
            <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Java', 'C#', 'HTML', 'CSS', 'JavaScript', 'PHP'],
                        datasets: [{
                            label: '2020 years students',
                            data: [<?php echo $kint; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            </script>
        </div>

        <!-- JG chart kodo pabaiga -->

        <div class="col s6">

        <h2 class="abouth2">Students total per year</h2>

            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

            <canvas id="myRadarChart" width="200" height="100"></canvas>
            <script>
                var ctx = document.getElementById('myRadarChart').getContext('2d');
                var myRadarChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: ['Java', 'C#', 'HTML', 'CSS', 'JavaScript', 'PHP'],
                        datasets: [{
                            label: '2020 years total students',
                            data: [<?php echo $kintCount; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            </script>
        </div>

    </div>
</div>



<?php include "footer.php" ?>