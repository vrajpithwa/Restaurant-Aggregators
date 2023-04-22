<?php 
    include ('./dbconnect.php'); 
    $sql = "SELECT * FROM orderlist";
    $result = mysqli_query($conn, $sql);
    $totalOrder=0;
    $uber=0;
    $swiggy=0;
    $zomato=0;
    if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) {
            if(strtolower($row['platefromName'])=="uber eats"){
                $uber = $uber+1;
            }
            // if(strtolower($row['platefromName'])=="zomato"){
            //     $zomato=$zomato+1;
            // }
            // if(strtolower($row['platefromName'])=="swiggy"){
            //     $swiggy=$swiggy+1;
            // }
            $totalOrder=$totalOrder+1;
        }                            
    }

    $count=0;
    if ($result-> num_rows > 0)
    {
        while ($row=$result-> fetch_assoc()) {

            $count=$count+1;
        }
    }
   $dataPoints1 = array( 
       array("y" => $uber,"label" => "UBER" ),
       array("y" => $swiggy,"label" => "SWIGGY" ),
       array("y" => $zomato,"label" => "ZOMATO" ),
     );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Test</title>

    <script>
        window.onload = function() {
                                    
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title:{
                text: ""
            },
            axisY: {
                title: "",
                includeZero: true,
                                           
            },
            data: [{
                type: "line",
                yValueFormatString: "#,##",
                indexLabel: "{y}",
                indexLabelPlacement: "inside",
                indexLabelFontWeight: "bolder",
                indexLabelFontColor: "white",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
                                    
        }
    </script>
    
</head>
<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>


