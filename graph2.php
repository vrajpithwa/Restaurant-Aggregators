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
                                                    while($row = mysqli_fetch_assoc($result)){
                                                        if($row['date']==date("m/d/20y")){
                                                            if(strtolower($row['platefromName'])=="uber eats"){
                                                                $uber = $uber+1;
                                                            }
                                                            if(strtolower($row['platefromName'])=="zomato"){
                                                                $zomato=$zomato+1;
                                                            }
                                                            if(strtolower($row['platefromName'])=="swiggy"){
                                                                $swiggy=$swiggy+1;
                                                            }
                                                            $totalOrder=$totalOrder+1;
                                                        }                
                                                    }            
                                                }

                                                $count=0;
                                                if ($result-> num_rows > 0)
                                                {
                                                    while ($row=$result-> fetch_assoc()) {

                                                        $count=$count+1;
                                                    }
                                                }
                                            $data = array( 
                                                array("y" => $uber,"label" => "UBER" ),
                                                array("y" => $swiggy,"label" => "SWIGGY" ),
                                                array("y" => $zomato,"label" => "ZOMATO" ),
                                                );
                                            ?>

                                            <!DOCTYPE html>
                                            <html>
                                            <head>
                                            <title>Bar</title>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
                                            <style>
                                                canvas {
                                                width: 500px;
                                                height: 300px;
                                                }
                                            </style>
                                            </head>
                                            <body>
                                            <canvas id="recent-chart"></canvas>
                                            <script>
                                                var ctx = document.getElementById('recent-chart').getContext('2d');
                                                var chart = new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                    labels: [""],
                                                    datasets: [{
                                                    label: 'Recent Orders',
                                                    data: [<?php foreach ($data as $row) { echo $row[''] . ','; } ?>],
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
