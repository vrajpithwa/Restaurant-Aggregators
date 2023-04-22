<?php
if (isset($_POST['submit']))
{

    $name = $_POST['user_name'];
    $plateform = $_POST['zom'];
    $address= $_POST['address']; 
    $menu = $_POST['spa'];
    $payment = $_POST['onl'];
    $orderNo=random_int(1000000000,9999999999);
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
    

    $sql="INSERT INTO `orderlist` (`order_no`, `customer_name`, `order_details`, `amount`, `tax`, `final_amount`, `payment_status`, `date`, `time`, `address`, `platefromName`) VALUES ('$orderNo', '$name', '$menu', '200', '30', '230', '$payment', '$today', '$time', '$address', '$plateform')";
    if ($conn->query($sql) === TRUE)
     {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			margin: 0;
		}
		.main {
			background-color: #fff;
			padding: 20px;
			margin: 20px auto;
			max-width: 600px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		h1 {
			font-size: 30px;
			margin-top: 0;
			text-align: center;
			color: #333;
		}
		legend {
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		label {
			display: inline-block;
			margin-bottom: 5px;
			color: #555;
		}
		input[type="text"], textarea {
			padding: 10px;
			border-radius: 5px;
			
            border-color: #333;
			width: 50%;
			margin-bottom: 20px;
			box-sizing: border-box;
			resize: vertical;
		}
		input[type="radio"] {
			margin-right: 5px;
		}
		.number {
			font-size: 20px;
			font-weight: bold;
			color: #555;
			border-radius: 50%;
			width: 30px;
			height: 30px;
			line-height: 30px;
			text-align: center;
			background-color: #eee;
			display: inline-block;
			margin-right: 10px;
		}
		.button {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 18px;
		}
		.button:hover {
			background-color: #3e8e41;
		}
		.order {
			background-color: #fff;
			padding: 20px;
			margin: 20px auto;
			max-width: 600px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			display: none;
		}
		.order h1 {
			font-size: 30px;
			margin-top: 0;
			text-align: center;
			color: #333;
		}
		.order img {
			display: block;
			margin: 20px auto;
			max-width: 100%;
		}
	</style>
</head>
<body>
    <div class="main">
        <h1>Place Your Order Here!</h1>
            <legend> Your Info:</legend>
            <legend><label for="name"><div class="number">1</div>Name:</label><br></legend>
        <form name="form" action="" method="post">
        <input type="text" id="name" name="user_name" value="" >
                
       <br>
        <legend>	
            <label for="mail"><div class="number">2</div>Platform</label></legend><br>
                <input type="radio" id="zomato" name="zom" value="zomato" ><label>Zomato</label>  
                <input type="radio" id="swiggy" name="zom" value="Swiggy" ><label>Swiggy</label>
                <input type="radio" id="uber eats" name="zom" value="Uber eats"><label>Uber Eats</label><br><br>
    
                <legend><label for="address"><div class="number">3</div>Address:</label><br></legend>
                <input type="text" id="address" name="address" value="" >
            <!-- <textarea><input type="text" id="address" name="address" ></textarea> -->
        
            <legend><div class="number">4</div> Menu:</legend>
            <input type="radio" id="spaghetti" name="spa" value = "spaghetti"><label>Spaghetti</label>
            <input type="radio" id="manchurian" name="spa" value="manchurian"><label>Manchurian</label>
            <input type="radio" id="pasta" name= "spa" value="pasta"><label>Pasta</label>
            <input type="radio" id="pizza" name="spa" value="pizza"><label>Pizza</label>
            <br>
            <br>
            <br>
            <legend><div class="number">5</div> Payment:</legend>
            <input type="radio" id="online" name="onl" value = "online"><label>Online</label>
            <input type="radio" id="cash" name="onl" value ="cash"><label>Cash On Delivery</label>
            
        </fieldset>
        <br>
        <br>
    <input class="button" type="submit" name="submit" value="Give me Food!">
    
    </form>
    </div>
    <div class="order">
        <h1>Thanks for your order!</h1>
        <img src="https://i.imgur.com/O0oqbwc.jpg">
    </div>
    </div>
    </body>
</html>