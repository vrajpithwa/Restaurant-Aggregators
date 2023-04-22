<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db1";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM orderlist";
    $result = mysqli_query($conn, $sql);
    $orderList=[];
    if (mysqli_num_rows($result) > 0) {
        echo '
        <table>
            <thead>
                <tr>
                    <td>Order No.</td>
                    <td>Customber Name</td>
                    <td>Order Details</td>
                    <td>Amount</td>
                    <td>Platform Name</td>
                    <td>Payment status</td>
                </tr>
            </thead>
            <tbody>';
        while($row = mysqli_fetch_assoc($result) ) {
            
                while($row = mysqli_fetch_assoc($result)) {
                    if($row['date']==date("m/d/20y")){
                        // array_unshift($orderList,$row);
                        echo '<tr>
                        <td>'.$row['order_no'].'&nbsp</td>'.
                        '<td>&nbsp&nbsp'.$row['customer_name'].'&nbsp</td>'.
                        '<td>&nbsp&nbsp'.$row['order_details'].'&nbsp</td>'.
                        '<td>&nbsp&nbsp'.$row['final_amount'].'&nbsp</td>'.
                        '<td>&nbsp&nbsp'.$row['platefromName'].'&nbsp</td> '.
                        '<td>&nbsp&nbsp'.$row['payment_status'].'&nbsp</td>'.
                        '</tr>';
                    }
                };
                }
    }
?>