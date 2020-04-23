<?php include "header.php" ?>

<!-- JG chart kodo pradzia -->

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webprojektas1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT round(avg(java),0) as avgjava, round(avg(csharp),0 ) as avgcsharp, round(avg(html),0) as avghtml, round(avg(css),0) as avgcss, round(avg(javascript),0) as avgjavascript, round(avg(php),0) as avgphp FROM charts WHERE chartsCode = 1";

    $result = $conn->query($sql);

    $kint = "";

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $kint = $row['avgjava'] . "," . $row['avgcsharp'] . "," . $row['avghtml'] . "," . $row['avgcss'] . "," . $row['avgjavascript'] . "," . $row['avgphp']; 

    }
//    echo $kint;
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>




<div class="aboutImgTop1">
    <img src="https://picsum.photos/1000/100" alt="AboutMainPic01">
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

<h2 class="abouth2">Students per year</h2>

<div class="aboutCh2">

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
                    data: [ <?php echo $kint; ?>],
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


<p>Pabaiga</p>
<!-- JG chart kodo pabaiga -->

<?php include "footer.php" ?>