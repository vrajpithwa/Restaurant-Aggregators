<?php
  $con = mysqli_connect("localhost","root","","db1");
  if($con){
    
  }
  // $con = "SELECT * FROM orderlist";
  // $result = mysqli_query($conn, $sql);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
  </head>
  <body>
    <div id="piechart" style="width: 100%; height: 100%;">
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
    ['Zomato',     11],
    ['Swiggy',      2],
    ['Ubereats',  2],
    ['EkathamOrders', 12],
    
        ]); 

        var options = {
          title: 'Date and the Platform'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </div>
  </body>
</html>
