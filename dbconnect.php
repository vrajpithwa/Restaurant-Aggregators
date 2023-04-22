<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db1";
    
    // Create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);//mysqli|false{};
    // echo $conn;
    $db=mysqli_select_db($conn,$dbname);
    // Check connection
    if (!$conn)
    {
    die("Connection failed: " . mysqli_connect_error());
    } 
     
?>