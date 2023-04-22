<?php
if (isset($_POST['submit']))
{

    $name = $_POST['user_name'];
    $plateform = $_POST['zom'];
    $address= $_POST['address']; 
    $menu = $_POST['spa'];
    $payment = $_POST['onl'];
    $orderNo=random_int(1000000000,9999999999);
    $ratings = random_int(1, 5);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db1";
    $today = date("m/d/20y"); 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $time = "8:01:30";  
    //$sql = "INSERT INTO `orderlist`(`order_no`, `customer_name`, `order_details`, `amount`,`tax`, `final_amount`, `payment_status` , `date`, `time`, `address`, `platefromName`) VALUES ($orderNo, $name, $menu,'300','36','336',$payment,date('mm/dd/20y'),$time,$address,$plateform)";
    

    $sql="INSERT INTO `orderlist` (`order_no`, `customer_name`, `order_details`, `amount`, `tax`, `final_amount`, `payment_status`, `date`, `time`, `address`, `platefromName`, `ratings`) VALUES ('$orderNo', '$name', '$menu', '200', '30', '230', '$payment', '$today', '$time', '$address', '$plateform', '$ratings')";
    if ($conn->query($sql) === TRUE)
     {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./order.css">
    <title>Ratings Page</title>
</head>
<body>
<fieldset>
    <div class="main">
        <h1>Give Your Ratings Here!</h1>
            <legend><div class="number"></div> Ratings:</legend>
            <input type="radio" id="1" name="spa" value = "1"><label>1</label>
            <input type="radio" id="2" name="spa" value = "2"><label>2</label>
            <input type="radio" id="3" name="spa" value="3"><label>3</label>
            <input type="radio" id="4" name= "spa" value="4"><label>4</label>
            <input type="radio" id="5" name="spa" value="5"><label>5</label>
            
        </fieldset>
    <input class="button" type="submit" name="submit" value="OK">
    

    
    </form>
    </div>
    <div class="order">
        <h1>Thanks for your order!</h1>
        <img src="https://i.imgur.com/O0oqbwc.jpg">
    </div>
    </div>
    
<script>

</script>
</body>
</html>