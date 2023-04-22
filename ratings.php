<?php
include ('./dbconnect.php'); 
?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['platefromName', 'ratings'],
      <?php
      $platform == 'zomato';
      
        while($col = mysqli_fetch_array($result))
        {
            echo "['".$col["platrfromName"]."', ".$col["ratings"]."],";
        }

      ?>
    ]);

    var options = {
      chart: {
        title: 'Ratings according to Platforms',
        subtitle: 'Zomato, Swiggy, UberEats',
      }
    };

    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>


