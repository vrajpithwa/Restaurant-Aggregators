

<!DOCTYPE html>
<html>
<head>
  <title>Rating Graph</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <style>
    canvas {
      width: 500px;
      height: 300px;
    }
  </style>
</head>
<body>
  <canvas id="rating-chart"></canvas>
  <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Write a query to fetch the data
$sql = "SELECT platefromName, final_amount FROM orderlist";
$result = mysqli_query($conn, $sql);

// Fetch the data
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Close the connection
mysqli_close($conn);

?>
  <script>
    var ctx = document.getElementById('rating-chart').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [<?php foreach ($data as $row) { echo '"' . $row['platefromName'] . '",'; } ?>],
        datasets: [{
          label: 'Ratings',
          data: [],
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }]
      },
      options: {}
    });
  </script>
</body>
</html>
